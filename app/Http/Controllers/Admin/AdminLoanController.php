<?php

namespace App\Http\Controllers\Admin;
use App\Models\PaymentOption;
use App\Models\Investment;
use App\Models\Loan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Deposit;
use App\Models\Withdraw;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;


class AdminLoanController extends Controller
{
    public function index()
    {

        if (Auth::user()->role_id >= 2) {
        } else {
            return redirect()->intended('user/dashboard');
        }
        // Fetch transactions with pagination
        $page_title = "All Loan Request";
        $transactions = Loan::with('user')->orderBy('created_at', 'desc')->paginate(10);

        return view('admin.transactions.loan.index', compact('transactions', 'page_title'));
    }

    public function show($id)
    {
        // Fetch a specific transaction (Investment)
        $transaction = Loan::with('user')->findOrFail($id); // Eager load both user and copyExpert
    
        // Set the page title
        $page_title = "Loans";
    
        // Return the view with the necessary data
        return view('admin.transactions.loan.show', compact('transaction', 'page_title'));
    }
    

    public function updateStatus(Request $request, $id)
    {
        $transaction = Loan::with('user')->findOrFail($id);

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


        // Mail::to($user->email)->send(new InvestmentNotificationMail($user, $investmentAmount, $investmentId, $investmentStatus));


        return redirect()->back()->with('success', 'Loan status updated successfully.');
    }
}