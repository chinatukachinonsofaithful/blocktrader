<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Mail\DepositNotificationMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\PaymentOption;
use App\Models\Deposit;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log; // Import the Log facade

class DepositController extends Controller
{
    //

    public function index()
    {
        $title = "Deposit";
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
        return view('user.deposit.index', compact('title', 'user', 'paymentOptions'));
    }


    public function store(Request $request)
    {
        $min = 100;
        $validated = $request->validate([
            'amount' => "required|numeric|min:$min",
            'payment_option' => 'required|exists:payment_options,id', // Ensure valid payment option ID
        ]);

        $user = Auth::user();
        $depositAmount = $validated['amount'];

        $depositId = Str::uuid()->toString();
        $paymentOptionId = $validated['payment_option'];

        $user = auth()->user();
        if (Deposit::where('reference_id', $depositId)->exists()) {
            return back()->with(['error' => 'This deposit ID already exists. Please try again.']);
        }

        $depositStatus = "pending";

        Deposit::create([
            'user_id' => $user->id,
            'amount' => $depositAmount,
            'payment_option' => $paymentOptionId,
            'reference_id' => $depositId,
            'status' => $depositStatus,
        ]);

        try {
            Mail::to($user->email)->send(new DepositNotificationMail($user, $depositAmount, $depositId, $depositStatus));
        } catch (\Exception $e) {
            Log::error('Failed to send deposit notification email: ' . $e->getMessage());
        }
        return redirect()->route('deposit.show', ['reference_id' => $depositId])
            ->with('success', 'Deposit successfully created!');
    }


    public function show($depositId)
    {
        $user = auth()->user();
        // Fetch the deposit record using the reference ID
        $deposit = Deposit::where('reference_id', $depositId)->first();
        if (!$deposit) {
            return redirect()->route('deposit.index')->with(['error' => 'Deposit not found.']);
        }
        $paymentOption = PaymentOption::find($deposit->payment_option);
        if (!$paymentOption || empty(trim($paymentOption->name))) {
            return back()->with(['error' => 'Invalid payment option.']);
        }
        $crypto = strtolower(trim($paymentOption->name));
        if (empty($crypto)) {
            return back()->with(['error' => 'Invalid cryptocurrency identifier.']);
        }

        $amount = $deposit->amount;
        $title = "#$depositId";

        // Pass the route for file uploads
        $uploadProofRoute = route('deposit.payment.proof', ['reference_id' => $depositId]);

        return view('user.deposit.show', compact('deposit', 'user', 'title', 'paymentOption', 'uploadProofRoute'));
    }


    public function uploadScreenshot(Request $request, $reference_id)
    {
        $request->validate([
            'image' => 'required|mimes:jpg,jpeg,png,pdf|max:2048', // Allow jpg, jpeg, png, pdf up to 2MB
        ]);

        $deposit = Deposit::where('reference_id', $reference_id)->first();
        if (!$deposit) {
            return redirect()->route('deposit.index')->with(['error' => 'Deposit not found.']);
        }

        // Handle file upload
        $filePath = $request->file('image')->store('images', 'public');
        chmod(storage_path('app/public/' . $filePath), 0755);


        $deposit->payment_proof = basename($filePath);
        $deposit->status = 'pending'; // Update status if necessary
        $deposit->save();

        return redirect()->route('transactions.index')->with(['success' => 'Payment proof uploaded successfully!']);
    }
}
