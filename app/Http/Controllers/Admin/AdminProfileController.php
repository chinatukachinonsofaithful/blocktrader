<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;


class AdminProfileController extends Controller
{
    public function index()
    {

        if (Auth::user()->role_id >= 2) {
        } else {
            return redirect()->intended('user/dashboard');
        }
        $page_title = "Edit";
        return view('admin.profile', compact('page_title'));
    }

    public function update(Request $request)
    {
        // Validate the request
        $request->validate([
            'email' => 'required|email|unique:users,email,' . Auth::id(),
            'password' => 'nullable|min:6|confirmed', // Ensures password confirmation
        ]);

        // Get the authenticated admin user
        $admin = Auth::user();

        // Update email
        $admin->email = $request->email;

        // Update password if provided
        if ($request->filled('password')) {
            $admin->password = Hash::make($request->password);
        }

        // Save the updated data
        $admin->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Profile updated successfully.');
    }
}
