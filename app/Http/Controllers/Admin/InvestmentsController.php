<?php

namespace App\Http\Controllers\Admin;
use App\Models\PaymentOption;
use App\Models\Investment;
use App\Models\Plan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\TransactionStatusUpdated;
use App\Models\Deposit;
use App\Models\Withdraw;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Models\CopyExpert;

use App\Mail\DepositNotificationMail;
use App\Mail\InvestmentNotificationMail;
use App\Mail\WithdrawNotificationMail;

class InvestmentsController extends Controller
{
    public function index()
    {

        if (Auth::user()->role_id >= 2) {
        } else {
            return redirect()->intended('user/dashboard');
        }
        // Fetch transactions with pagination
        $page_title = "All Investment";
        $transactions = Investment::with('user')->orderBy('created_at', 'desc')->paginate(10);

        return view('admin.transactions.index', compact('transactions', 'page_title'));
    }

    public function show($id)
    {
        // Fetch a specific transaction (Investment)
        $transaction = Investment::with('user', 'copyExpert')->findOrFail($id); // Eager load both user and copyExpert
    
        // Fetch the plan associated with the transaction (if needed)
        $plan = Plan::find($transaction->plan_id);
        
        // Set the page title
        $page_title = "Investment";
    
        // Check if the investment has an associated CopyExpert and fetch the name
        $currentCopyExpert = $transaction->copyExpert ? $transaction->copyExpert->profile_name : 'No Copy Expert Assigned';
    
        // Return the view with the necessary data
        return view('admin.transactions.show', compact('transaction', 'page_title', 'plan', 'currentCopyExpert'));
    }
    

    public function updateStatus(Request $request, $id)
    {
        $transaction = Investment::with('user')->findOrFail($id);

        // Validate the status field
        $request->validate([
            'status' => 'required|string',
        ]);


        // Update the status of the transaction
        $transaction->status = $request->input('status');
        $transaction->save();

        $user = $transaction->user; 

        $investmentAmount = $transaction->amount;
        $investmentId = $transaction->reference_id;
        $investmentStatus = $transaction->status;

        Mail::to($user->email)->send(new InvestmentNotificationMail($user, $investmentAmount, $investmentId, $investmentStatus));


        return redirect()->back()->with('success', 'Transaction status updated successfully.');
    }



    public function depositview()
    {
        // Fetch transactions with pagination
        $page_title = "Deposit Completed";
        $transactions = Deposit::whereIn('transaction_type', ['Deposit'])->whereIn('status', ['approved'])->with('user')->orderBy('created_at', 'desc')->paginate(10);

        return view('admin.transactions.deposit.deposit', compact('transactions', 'page_title'));
    }
    public function pendingdeposit()
    {
        // Fetch transactions with pagination
        $page_title = "Deposit Pending";
        $transactions = Deposit::whereIn('transaction_type', ['Deposit'])->whereIn('status', ['pending'])->with('user')->orderBy('created_at', 'desc')->paginate(10);

        return view('admin.transactions.deposit.pending', compact('transactions', 'page_title'));
    }

    public function depositshow($id)
    {
        // Fetch a specific transaction
        $transaction = Deposit::with('user')->findOrFail($id);
        $paymentOption = PaymentOption::find($transaction->payment_option);
        $page_title = "Deposit";
        return view('admin.transactions.deposit.show', compact('transaction', 'page_title','paymentOption'));
    }

    public function depositupdateStatus(Request $request, $id)
    {
        $transaction = Deposit::with('user')->findOrFail($id);

        // Validate the status field
        $request->validate([
            'status' => 'required|string',
        ]);


        if ($request->input('status') == 'approved') {
            // Return the value/amount to the user
            $user = $transaction->user; // Assuming there's a relationship between Transaction and User
            $user->balance += $transaction->amount; // Add the rejected amount back to the user's balance
            $user->save();

            $transaction->status = $request->input('status');
            $transaction->save();
        } else {


            // Update the status of the transaction
            $transaction->status = $request->input('status');
            $transaction->save();
        }

        $depositAmount = $transaction->amount;
        $depositId = $transaction->reference_id;
        $depositStatus = $transaction->status;

        Mail::to($user->email)->send(new DepositNotificationMail($user, $depositAmount, $depositId, $depositStatus));
        // Send email to the user about the transaction status update
        // Mail::to($transaction->user->email)->send(new TransactionStatusUpdated($transaction));


        return redirect()->back()->with('success', 'Deposit status updated successfully.');
    }

    public function withdrawview()
    {
        // Fetch transactions with pagination
        $page_title = "Withdrawal Completed";
        $transactions = Withdraw::whereIn('transaction_type', ['Withdraw'])->whereIn('status', ['completed'])->with('user')->orderBy('created_at', 'desc')->paginate(10);

        return view('admin.transactions.withdraw.withdrawal', compact('transactions', 'page_title'));
    }

    public function pendingwithdraw()
    {
        // Fetch transactions with pagination
        $page_title = "Withdrawal Pending";
        $transactions = Withdraw::whereIn('transaction_type', ['Withdraw'])->whereIn('status', ['pending'])->with('user')->orderBy('created_at', 'desc')->paginate(10);

        return view('admin.transactions.withdraw.pending', compact('transactions', 'page_title'));
    }

    public function withdrawshow($id)
    {
        // Fetch a specific transaction
        $transaction = Withdraw::with('user')->findOrFail($id);
        $page_title = "Withdraw";
        return view('admin.transactions.withdraw.show', compact('transaction', 'page_title'));
    }

    public function withdrawupdateStatus(Request $request, $id)
    {
        $transaction = Withdraw::with('user')->findOrFail($id);

        // Validate the status field
        $request->validate([
            'status' => 'required|string',
        ]);


        if ($request->input('status') == 'declined') {
            // Return the value/amount to the user
            $user = $transaction->user; // Assuming there's a relationship between Transaction and User
            $user->balance += $transaction->amount; // Add the rejected amount back to the user's balance
            $user->save();

            $transaction->status = $request->input('status');
            $transaction->save();
        } else {
            // Update the status of the transaction
            $transaction->status = $request->input('status');
            $transaction->save();
        }


        $withdrawAmount = $transaction->amount;
        $withdrawId = $transaction->reference_id;
        $withdrawStatus = $transaction->status;

        Mail::to($user->email)->send(new WithdrawNotificationMail($user, $withdrawAmount, $withdrawId, $withdrawStatus));


        return redirect()->back()->with('success', 'Withdrawal status updated successfully.');
    }
}
