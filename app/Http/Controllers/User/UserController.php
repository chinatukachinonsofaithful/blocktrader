<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Mail\PasswordChangeNotificationMail;
use App\Mail\KycNotificationMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\PaymentOption;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;



class UserController extends Controller
{
    public function profile()
    {
        $title = "Profile";
        $user = Auth::user();
        if (Auth::user()->kyc_status == 0) {
            return redirect()->intended('user/kyc');
        } else {
        }
        if (Auth::user()->survey == 0) {
            return redirect()->intended('user/survey');
        } else {
        }
        return view('user.profile.index', compact('title', 'user'));
    }

    public function accounts()
    {
        $title = "Payment Account";
        $user = Auth::user();
        if (Auth::user()->kyc_status == 0) {
            return redirect()->intended('user/kyc');
        } else {
        }
        if (Auth::user()->survey == 0) {
            return redirect()->intended('user/survey');
        } else {
        }

        $paymentOptions = PaymentOption::all(); // Fetch all payment options


        $paymentOption = PaymentOption::find($user->crypto_type);

        return view('user.profile.accounts', compact('title', 'user', 'paymentOptions', 'paymentOption'));
    }

    public function addAccount(Request $request)
    {
        // Validate the request
        $request->validate([
            'crypto_type' => 'required|string|max:255',
            'account_address' => 'required|string|max:255',
        ]);

        $user = auth()->user(); // Get the authenticated user

        // Update the user's account details
        $user->update([
            'crypto_type' => $request->crypto_type,
            'account_address' => $request->account_address,
            'account' => 1, // Mark account as added
        ]);

        // Redirect with a success message
        return redirect()->back()->with('success', 'Account added successfully.');
    }

    public function deleteAccount(Request $request)
    {
        $user = auth()->user();

        // Ensure user is authenticated
        if (!$user) {
            return redirect()->back()->with('error', 'User not authenticated.');
        }

        // Clear account details
        $user->update([
            'crypto_type' => null,
            'account_address' => null,
            'account' => 0, // Reset account status
        ]);

        return redirect()->back()->with('success', 'Account details deleted successfully.');
    }



    // Handle the profile update
    public function updateProfile(Request $request)
    {
        $user = auth()->user(); // Get the logged-in user

        // Validate the incoming request
        $validated = $request->validate([
            'name' => 'nullable|string|max:255',
            'email' => 'nullable|email|unique:users,email,' . $user->id,
            'phone' => 'nullable|string|max:15',
            'date_of_birth' => 'nullable|date',
            'country' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:3072',
        ]);

        // Update user fields only if provided
        if (isset($validated['name'])) {
            $user->name = $validated['name'];
        }

        if (isset($validated['email'])) {
            $user->email = $validated['email'];
        }

        if (isset($validated['phone'])) {
            $user->phone = $validated['phone'];
        }

        if (isset($validated['date_of_birth'])) {
            $user->date_of_birth = $validated['date_of_birth'];
        }

        if (isset($validated['country'])) {
            $user->country = $validated['country'];
        }

        if (isset($validated['address'])) {
            $user->address = $validated['address'];
        }

        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($user->image) {
                Storage::disk('public')->delete('images/' . $user->image);
            }

            // Store the new image in the 'images' directory
            $imagePath = $request->file('image')->store('images', 'public');

            chmod(storage_path('app/public/' . $imagePath), 0755);
            // Extract and save only the file name in the database
            $user->image = basename($imagePath);
        }

        // Save the updated user data
        $user->save();


        return redirect()->back()->with('success', 'Profile updated successfully.');
    }




    public function referrals(Request $request)
    {
        $title = "Referrals";
        $user = Auth::user();
        $refid = $user->refid;


        return view('user.profile.referrals', compact('title', 'user', 'refid'));
    }




    public function security()
    {
        $title = "Security";
        $user = Auth::user();


        return view('user.profile.security', compact('title', 'user'));
    }


    public function kyc()
    {
        $title = "KYC";
        $user = Auth::user();


        return view('user.profile.kyc.index', compact('title', 'user'));
    }


    public function kyccreate()
    {
        $title = "KYC";
        $user = Auth::user();
        if ($user->kyc_status == "1" or "") {
            return redirect()->route('add.kyc')->with('success', 'Kyc Pending Verification!');
        }
        return view('user.profile.kyc.create', compact('title', 'user'));
    }

    public function submitKYC(Request $request)
    {
        // Validate the uploaded files
        $request->validate([
            'idFront' => 'required|image|mimes:jpeg,png,jpg|max:3072',
            'idBack' => 'required|image|mimes:jpeg,png,jpg|max:3072',
        ]);

        $user = Auth::user();



        // Store the uploaded files
        if ($request->hasFile('idFront')) {
            $idFrontPath = $request->file('idFront')->store('images', 'public');
            chmod(storage_path('app/public/' . $idFrontPath), 0755);

            $user->idFront = basename($idFrontPath);
        }

        if ($request->hasFile('idBack')) {
            $idBackPath = $request->file('idBack')->store('images', 'public');
            chmod(storage_path('app/public/' . $idBackPath), 0755);

            $user->idBack = basename($idBackPath);
        }

        // if error is = chmod(); no such file or directory 
        // run = php artisan storage:link




        // Update the user's KYC status
        $user->kyc_status = '1'; // Mark as submitted
        $user->save();

        // Notify the user about their submission
        Mail::to($user->email)->send(new KycNotificationMail($user));

        return redirect()->back()->with('success', 'KYC documents submitted successfully.');
    }


    public function updatePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required|string',
            'password' => 'required|string|confirmed|min:8',  // Password confirmation check
        ]);

        $user = Auth::user();

        // Check if the old password matches the current password
        if (!Hash::check($request->old_password, $user->password)) {
            return back()->with(['old_password' => 'The provided password does not match our records.']);
        }

        // Update the password
        $user->password = Hash::make($request->password);
        $user->save();

        // Send a password change notification email (you may remove the reset URL if not necessary)
        Mail::to($user->email)->send(new PasswordChangeNotificationMail($user));

        return redirect()->route('user.profile')->with('success', 'Password updated successfully!');
    }
}
