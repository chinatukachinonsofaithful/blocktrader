<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Investment;
use Illuminate\Http\Request;
use App\Models\Plan;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Mail\InvestmentNotificationMail;
use Illuminate\Support\Facades\Mail;

class AdminPlanController extends Controller
{
    // List all Plans
    public function index()
    {
        if (Auth::user()->role_id >= 2) {
        } else {
            return redirect()->intended('user/dashboard');
        }
        $page_title = "Plans";
        $Plans = Plan::all(); // Retrieve all Plans
        return view('admin.plans.index', compact('Plans', 'page_title'));
    }

    // Show the form to create a new Plan
    public function create()
    {
        $page_title = "New Plans";
        $users = User::whereIn('role_id', ['1'])->get();
        return view('admin.plans.create', compact('page_title', 'users'));
    }

    // Store a new Plan
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'min' => 'required',
            'max' => 'required|numeric',
            'roi' => 'required',
            'amount' => 'required|numeric',
            'duration' => 'required',
            'capital' => 'required',
            'commission' => 'required',
            'terms' => 'required', // Add validation for Plan_size
        ]);



        Plan::create([
            'name' => $validated['name'],
            'min' => $validated['min'],
            'amount' => $validated['amount'],
            'max' => $validated['max'], // Calculated ETH price
            'roi' => $validated['roi'],
            'status' => "active",
            'duration' => $validated['duration'],
            'capital' => $validated['capital'],
            'commission' => $validated['commission'],
            'terms' => $validated['terms'],

        ]);

        return redirect()->route('admin.plans.index')->with('success', 'Plan created successfully.');
    }

    public function createhistory()
    {
        $page_title = "New Investment History";
        $users = User::whereIn('role_id', ['1'])->get();
        $plans = Plan::get();
        return view('admin.plans.create-history', compact('page_title', 'users', 'plans'));
    }

    public function submithistory(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'plan_id' => 'required|exists:plans,id',
            'status' => 'required|string',
            'amount' => 'required|numeric',
            'total_return' => 'required|numeric',
            'created_at' => 'required|date',
        ]);

        $planid = $validated['plan_id'];
        $userid = $validated['user_id'];
        $investmentAmount = $validated['amount'];
        $investmentStatus = $validated['status'];


        $planget = Plan::find($planid); // Use find() for a single record
        $user = User::find($userid);

        if (!$planget) {
            return back()->with('error', 'Invalid Plan ID.');
        }

        if ($investmentAmount < $planget->min) {
            return back()->with('error', 'Amount is lesser than plan minimum');
        }

        if ($investmentAmount > $planget->max) {
            return back()->with('error', 'Amount is greater than plan maximum');
        }
        
        if (!$user) {
            return back()->with('error', 'Invalid User ID.');
        }
        

        $investmentId = uniqid();
        $durationget = $planget->duration;
        $roiget = $planget->roi;
        $copy_expert_id = $user->copy_expert_id;

        Investment::create([
            'user_id' => $validated['user_id'],
            'plan_id' => $validated['plan_id'],
            'status' => $investmentStatus,
            'amount' => $investmentAmount, // Calculated ETH price
            'total_return' => $validated['total_return'],
            'created_at' => $validated['created_at'],
            'copy_expert_id' => $copy_expert_id,
            'reference_id' => $investmentId,
            'duration' => $durationget,
            'roi' => $roiget,

        ]);


        Mail::to($user->email)->send(new InvestmentNotificationMail($user, $investmentAmount, $investmentId, $investmentStatus));

        return redirect()->route('admin.plans.index')->with('success', 'Plan created successfully.');
    }


    // Show the form to edit an existing Plan
    public function edit($id)
    {
        $Plan = Plan::findOrFail($id);
        $page_title = "New Plans";
        $users = User::whereIn('role_id', ['1'])->get();
        return view('admin.plans.edit', compact('Plan', 'page_title', 'users'));
    }

    // Update an Plan
    public function update(Request $request, $id)
    {
        // Validate the input data
        $request->validate([
            'name' => 'required|string|max:255',
            'min' => 'required|numeric',
            'max' => 'required|numeric',
            'roi' => 'required',
            'amount' => 'required|numeric',
            'duration' => 'required', // Assuming this is an integer ID
            'capital' => 'required',  // Assuming this is a user ID
            'commission' => 'required',
            'terms' => 'required',    // Assuming terms is a text field
        ]);

        // Find the Plan by ID
        $Plan = Plan::findOrFail($id);

        // Update the Plan with validated data
        $Plan->name = $request->input('name');
        $Plan->min = $request->input('min');
        $Plan->max = $request->input('max');
        $Plan->roi = $request->input('roi');
        $Plan->amount = $request->input('amount');
        $Plan->duration = $request->input('duration');
        $Plan->capital = $request->input('capital');
        $Plan->commission = $request->input('commission');
        $Plan->terms = $request->input('terms');

        // Save the updated Plan
        $Plan->save();

        // Redirect to the Plan index with a success message
        return redirect()->route('admin.plans.index')->with('success', 'Plan updated successfully.');
    }



    // Delete an Plan
    public function destroy($id)
    {
        Plan::findOrFail($id)->delete();
        return redirect()->route('admin.plans.index')->with('success', 'Plan deleted successfully.');
    }
}
