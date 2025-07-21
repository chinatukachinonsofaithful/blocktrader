<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SettingsController extends Controller
{
    public function index()
    {
        if (Auth::user()->role_id >= 2) {
        } else {
            return redirect()->intended('user/dashboard');
        }
        // Fetch existing settings from the database (assuming settings are stored in a 'settings' table)
        $settings = DB::table('settings')
            ->pluck('settings_value', 'settings_key')
            ->toArray();
        $page_title = "Settings";

        return view('admin.settings.index', compact('settings', 'page_title'));
    }

   public function update(Request $request)
{
    // Validate the request for required fields, including logo file
    $request->validate([
        'website_name' => 'required|string|max:255',
        'official_email' => 'required|email',
        'official_phone' => 'required|string|max:15',
        'live_chat' => 'required|string|max:255',
        'loan_features' => 'required',
        'site_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'official_address' => 'nullable|string|max:255',
    ]);

    // Prepare settings data from the request
    $settingsData = [
        'website_name' => $request->website_name,
        'official_email' => $request->official_email,
        'official_phone' => $request->official_phone,
        'live_chat' => $request->live_chat,
        'loan_features' => $request->loan_features,
        'official_address' => $request->official_address,
    ];

    // Handle file upload for 'site_logo'
    if ($request->hasFile('site_logo')) {
        // Store the uploaded file in the 'public/images' directory
        $filePath = $request->file('site_logo')->store('images', 'public');
        chmod(storage_path('app/public/' . $filePath), 0755);
        // Save the relative file path in settings
        $settingsData['site_logo'] = basename($filePath);
    }

    // Loop through each setting and update or insert it in the database
    foreach ($settingsData as $key => $value) {
        DB::table('settings')->updateOrInsert(
            ['settings_key' => $key], // Match by key
            ['settings_value' => $value] // Update value
        );
    }

    // Redirect back with success message
    return redirect()->route('admin.settings.index')->with('success', 'Settings updated successfully.');
}

}
