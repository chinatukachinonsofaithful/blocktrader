<?php

namespace App\Http\Controllers\Admin;

use App\Models\PaymentOption;
use App\Models\Investment;
use App\Models\Plan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\TicketStatusUpdated;
use App\Models\Deposit;
use App\Models\Withdraw;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class AdminPaymentController extends Controller
{
    public function index()
    {

        if (Auth::user()->role_id >= 2) {
        } else {
            return redirect()->intended('user/dashboard');
        }
        // Fetch transactions with pagination
        $page_title = "All Payment";
        $payment = PaymentOption::all();

        return view('admin.payments.index', compact('payment', 'page_title'));
    }

    public function create()
    {

        if (Auth::user()->role_id >= 2) {
        } else {
            return redirect()->intended('user/dashboard');
        }
        // Fetch transactions with pagination
        $page_title = "New Payment";

        return view('admin.payments.create', compact('page_title'));
    }



    public function store(Request $request)
    {
        // Validate the input fields
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'short_name' => 'required|string|max:255',
            'website_address' => 'required|string|max:255',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);

        // Initialize an array to store the data
        $settingsData = $validatedData;

        if ($request->hasFile('icon')) {
            // Store the uploaded icon file in the 'public/images' directory
            $filePath = $request->file('icon')->store('images', 'public');

            // Set appropriate file permissions
            chmod(storage_path('app/public/' . $filePath), 0755);

            // Store the file path relative to the storage path
            $settingsData['icon'] = basename($filePath); // Save only the filename, not the full path
        }

        // Create the payment option using the validated data
        PaymentOption::create([
            'name' => $settingsData['name'],
            'short_name' => $settingsData['short_name'] ?? null,
            'website_address' => $settingsData['website_address'],
            'icon' => $settingsData['icon'] ?? null, // Use null if no icon is uploaded
        ]);

        return redirect()->route('admin.payments.index')->with('success','New Payment Method Added');
    }


    public function destroy($id)
    {
        PaymentOption::findOrFail($id)->delete();
        return redirect()->route('admin.payments.index')->with('success', 'Plan deleted successfully.');
    }
}
