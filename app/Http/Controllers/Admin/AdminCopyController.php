<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Plan;
use App\Models\CopyExpert;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminCopyController extends Controller
{
    // List all copy
    public function index()
    {
        if (Auth::user()->role_id >= 2) {
        } else {
            return redirect()->intended('user/dashboard');
        }
        $page_title = "Copy Experts";
        $copy = CopyExpert::all(); // Retrieve all copy
        return view('admin.copy.index', compact('copy', 'page_title'));
    }

    // Show the form to create a new Plan
    public function create()
    {
        $page_title = "New Copy Expert";
        $users = User::whereIn('role_id', ['1'])->get();
        return view('admin.copy.create', compact('page_title', 'users'));
    }

    // Store a new Plan
    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'profile_name' => 'required|string|max:255',
            'bio' => 'required',
            'specialty' => 'required',
            'win_count' => 'required|numeric',
            'loss_count' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate the image file
        ]);
    
        // Store the uploaded image and get its path
        $imagePath = $request->file('image')->store('images', 'public'); // Store image in 'storage/app/public/images'
        chmod(storage_path('app/public/' . $imagePath), 0755);
        // Save the relative file path in settings
    
        // Create the CopyExpert record
        CopyExpert::create([
            'profile_name' => $validated['profile_name'],
            'bio' => $validated['bio'],
            'specialty' => $validated['specialty'],
            'win_count' => $validated['win_count'],
            'loss_count' => $validated['loss_count'],
            'image' => basename($imagePath), // Store the image path in the database
        ]);
    
        return redirect()->route('admin.copy.index')->with('success', 'Copy Expert created successfully.');
    }
    
    // Show the form to edit an existing Plan
    public function edit($id)
    {
        $copy = CopyExpert::findOrFail($id);
        $page_title = "Edit Copy Expert";
        $users = User::whereIn('role_id', ['1'])->get();
        return view('admin.copy.edit', compact('copy', 'page_title', 'users'));
    }

    // Update an Plan
    public function update(Request $request, $id)
    {
        // Validate the input data
        $validated = $request->validate([
            'profile_name' => 'required|string|max:255',
            'bio' => 'required',
            'specialty' => 'required',  // Use string instead of numeric for specialty (Duration)
            'win_count' => 'required|numeric',
            'loss_count' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',  // Optional image
        ]);
    
        // Find the CopyExpert by ID
        $copy = CopyExpert::findOrFail($id);
    
        // Update the CopyExpert details
        $copy->profile_name = $validated['profile_name'];
        $copy->bio = $validated['bio'];
        $copy->specialty = $validated['specialty'];
        $copy->win_count = $validated['win_count'];
        $copy->loss_count = $validated['loss_count'];
    
        // Handle the image upload (only if an image is provided)
        if ($request->hasFile('image')) {
            // Store the uploaded image
            $imagePath = $request->file('image')->store('images', 'public');
            chmod(storage_path('app/public/' . $imagePath), 0755);
            $copy->image = basename($imagePath);  // Update image path
            
            
        }
    
        // Save the updated CopyExpert model
        $copy->save();
    
        // Redirect to the CopyExpert index with a success message
        return redirect()->route('admin.copy.index')->with('success', 'Copy Expert updated successfully.');
    }
    

    // Delete an Plan
    public function destroy($id)
    {
        CopyExpert::findOrFail($id)->delete();
        return redirect()->route('admin.copy.index')->with('success', 'Copy Expert Profile deleted successfully.');
    }
}
