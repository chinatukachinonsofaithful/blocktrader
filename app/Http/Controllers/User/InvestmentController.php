<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Plan;
use Illuminate\Support\Facades\Auth;
use App\Mail\InvestmentNotificationMail;
use Illuminate\Support\Facades\Mail;
use App\Models\Investment;

class InvestmentController extends Controller
{
    //
    public function index()
    {
        $title = "Plans";
        $user = Auth::user();
        $plans = Plan::all();
        $planshort = Plan::where('terms', 'short')->get();
        $planslong = Plan::where('terms', 'long')->get();
        if (Auth::user()->survey == 0) {
            return redirect()->intended('user/survey');
        } else {
        }
        return view('user.plan.index', compact('title', 'user', 'plans', 'planshort', 'planslong'));
    }

    public function invalid()
    {
        $title = "Invalid";
        $user = Auth::user();
        return view('user.plan.invalid', compact('title', 'user'));
    }


    public function dashboardStats()
    {
        $title = "Investments";
        $user = Auth::user();
        if (Auth::user()->survey == 0) {
            return redirect()->intended('user/survey');
        } else {
        }

        // Retrieve user's investments
        $investments = Investment::where('user_id', $user->id)->orderBy('created_at', 'desc')->get();


        // Calculate Invested
        $totalInvested = $investments->sum('amount');

        // Calculate Profit
        $totalProfit = $investments->sum(function ($investment) {
            return $investment->total_return + ($investment->amount / 100);
        });


        // Calculate Conversion Rate
        $totalPlans = Plan::count(); // Total available plans
        $conversionRate = $totalPlans > 0 ? ($investments->count() / $totalPlans) * 100 : 0;

        // Calculate Avg. Value
        $avgValue = $investments->count() > 0 ? $totalInvested / $investments->count() : 0;

        return view('user.plan.investments', [
            'totalInvested' => $totalInvested,
            'totalProfit' => $totalProfit,
            'investments' => $investments,
            'conversionRate' => $conversionRate,
            'avgValue' => $avgValue,
        ], compact('title', 'user'));
    }



    public function show($id)
    {
        $plan = Plan::findOrFail($id); // Fetch the plan by id
        $user = Auth::user();
        $title = "$plan->name Plan";
        return view('user.plan.show', compact('plan', 'user', 'title'));
    }




    public function confirm($id, Request $request)
    {
        $plan = Plan::findOrFail($id); // Fetch the plan by id
        $amount = $request->input('amount'); // Get the amount from the request
        $user = Auth::user();
        $title = "$plan->name Plan";

        // Calculate total return (including capital)
        $totalReturn = $amount + ($amount * $plan->roi / 100);
        $ProxAmount = $amount * $plan->roi / 100;

        if ($user->balance < $amount) {
            return redirect()->route('plan.invalid')->with('error', 'Your balance is insufficient for this investment.');
        }

        return view('user.plan.confirm', compact('plan', 'amount', 'totalReturn', 'user', 'ProxAmount', 'title'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'amount' => 'required|numeric|min:1',
            'plan_id' => 'required|exists:plans,id',
        ]);

        // Access validated data
        $investmentAmount = $validated['amount'];
        $plan_id = $validated['plan_id'];

        // Fetch the plan
        $plan = Plan::findOrFail($plan_id);

        $user = Auth::user();

        if ($user->balance < $request->input('amount')) {
            return redirect()->route('plan.invalid')->with('error', 'Your balance is insufficient for this investment.');
        }


        // Calculate total return based on plan ROI
       
        $interest = floatval($plan->roi);
        $totalReturn = $investmentAmount + ($investmentAmount * $interest) / 100;

        

        // Generate a unique reference ID for the transaction
        $reference_id = uniqid();
        $investmentStatus = "active";

        // Assuming you have an 'Investment' model to store the investment data
        Investment::create([
            'user_id' => $user->id,
            'plan_id' => $plan_id,
            'amount' => $investmentAmount,
            'total_return' => $totalReturn,
            'duration' => $plan->duration,
            'roi' => $plan->roi,
            'reference_id' => $reference_id,
            'status' => $investmentStatus,
        ]);

        $user->balance -= $investmentAmount;
        $user->save();

        $investmentId = $reference_id;

         Mail::to($user->email)->send(new InvestmentNotificationMail($user, $investmentAmount, $investmentId, $investmentStatus));
        return redirect()->route('plan.index')->with('success', 'Investment successfully made.');
    }
}