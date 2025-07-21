<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\PaymentOption;
use App\Models\Withdraw;
use App\Mail\WithdrawNotificationMail;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;

class WithdrawController extends Controller
{
    //
    public function index()
    {
        $title = "Withdraw";
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

        return view('user.withdraw.index', compact('title', 'user', 'paymentOptions'));
    }


    public function store(Request $request)
    {
        // Validate the input
        $request->validate([
            'amount' => 'required|numeric|min:400',
            'remarks' => 'nullable|string',
            'description' => 'required',
        ]);

        $user = Auth::user();

        // Ensure the user has sufficient balance (you would need a `balance` field or related logic)
        if ($user->balance < $request->amount) {
            return back()->with(['amount' => 'Insufficient funds.']);
        }

        // Process the withdrawal
        // You could subtract the amount from the user's balance and record the transaction here
        // Example:
        $user->balance -= $request->amount;
        $user->save();

    
         // Generate a unique reference ID for the transaction
         $reference_id = uniqid();
         $withdrawStatus = "pending";

         $withdrawAmount = $request->amount;

         // Create the deposit record in the database
         Withdraw::create([
             'user_id' => $user->id,
             'amount' => $withdrawAmount,
             'reference_id' => $reference_id,
             'remarks' => $request->remarks,
             'description' =>$request->description,
             'status' => $withdrawStatus, // Default status
         ]);
         $withdrawId = $reference_id;


        Mail::to($user->email)->send(new WithdrawNotificationMail($user, $withdrawAmount, $withdrawId, $withdrawStatus));

        return redirect()->route('dashboard.index')->with('success', 'Withdrawal successful!');
    }
}
