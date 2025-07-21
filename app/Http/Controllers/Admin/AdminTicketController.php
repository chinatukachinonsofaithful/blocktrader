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

class AdminTicketController extends Controller
{
    public function index()
    {

        if (Auth::user()->role_id >= 2) {
        } else {
            return redirect()->intended('user/dashboard');
        }
        // Fetch transactions with pagination
        $page_title = "All Investment";
        $transactions = Investment::with('user')->paginate(10);

        return view('admin.transactions.index', compact('transactions', 'page_title'));
    }

    public function show($id)
    {
        // Fetch a specific transaction
        $transaction = Investment::with('user')->findOrFail($id);
        $plan = Plan::find($transaction->plan_id);
        
        $page_title = "Investment";
        return view('admin.transactions.show', compact('transaction', 'page_title','plan'));
    }

    public function updateStatus(Request $request, $id)
    {
        $transaction = Investment::findOrFail($id);

        // Validate the status field
        $request->validate([
            'status' => 'required|string',
        ]);


        // Update the status of the transaction
        $transaction->status = $request->input('status');
        $transaction->save();

        // // Send email to the user about the transaction status update
        // Mail::to($transaction->user->email)->send(new TransactionStatusUpdated($transaction));


        return redirect()->back()->with('success', 'Transaction status updated successfully.');
    }

}