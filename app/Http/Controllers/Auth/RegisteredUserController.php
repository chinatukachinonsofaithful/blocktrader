<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;


use App\Mail\EmailVerificationMail;
use App\Mail\NewUserNotification;



class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(Request $request): View
    {
        $title = "Register";
        // Get the referral ID from the URL
        $referralId = $request->query('ref');

        // Find the user who has the referral ID (optional: validate if exists)
        $referralUser = $referralId ? User::where('refid', $referralId)->first() : null;

        return view('auth.register', compact('title', 'referralUser'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'phone' => ['required', 'digits_between:10,15'],
            'address' => ['required', 'string', 'max:255'],
            'country' => ['required'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'referral_id' => ['nullable', 'exists:users,referral_id'],
        ]);
    
        // Generate a unique referral ID (refid) before saving the user
        do {
            $refid = Str::random(8); // Generates a random 8-character string
        } while (User::where('refid', $refid)->exists()); // Ensure the refid is unique
    
        // Check if a referral ID is provided and valid
        $referralUser = null;
        if ($request->referral_id) {
            $referralUser = User::where('refid', $request->referral_id)->first();
        }
    

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'country' => $request->country,
            'password' => Hash::make($request->password),
            'refid' => $refid, // Store the unique refid
            'referral_id' => $referralUser ? $referralUser->refid : null, // Store the referrer refid if provided
        ]);

        $verificationUrl = URL::temporarySignedRoute(
            'verification.verify',
            now()->addMinutes(60),
            ['id' => $user->id, 'hash' => sha1($user->email)]
        );

        // Send the email
         Mail::to($user->email)->send(new EmailVerificationMail($user, $verificationUrl));
        
         $adminEmail = env('MAIL_FROM_ADDRESS');
         if ($adminEmail) {
             Mail::to($adminEmail)->send(new NewUserNotification($user));
         }

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME)->with('message', 'Registration successful! Please check your email for verification.');
    }
}
