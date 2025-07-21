<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use App\Models\Deposit;
use App\Models\Withdraw;
use App\Models\Investment;
use Illuminate\Support\Facades\Auth;
use App\Models\PaymentOption;

class TransactionsController extends Controller
{
    public function index()
    {
        $title = "Deposit";
        $user = Auth::user();
        if (Auth::user()->survey == 0) {
            return redirect()->intended('user/survey');
        } else {
        }
        // Retrieve user's deposits with payment options eager loaded
        $transactions = Deposit::where('user_id', $user->id)->orderBy('created_at', 'desc')->get();

        // Get the count of deposits for the user
        $DepositCount = Deposit::where('user_id', $user->id)->count();
        $WithdrawCount = Withdraw::where('user_id', $user->id)->count();
        $InvestmentCount = Investment::where('user_id', $user->id)->count();

        return view('user.transactions.index', compact('title', 'user', 'transactions', 'DepositCount', 'WithdrawCount', 'InvestmentCount'));
    }



    public function withdraw()
    {
        $title = "Withdraw";
        $user = Auth::user();
         // Retrieve user's deposits with payment options eager loaded
         $transactions = Withdraw::where('user_id', $user->id)->orderBy('created_at', 'desc')->get();
        // Get the count of deposits for the user
        $DepositCount = Deposit::where('user_id', $user->id)->count();
        $WithdrawCount = Withdraw::where('user_id', $user->id)->count();
        $InvestmentCount = Investment::where('user_id', $user->id)->count();

        return view('user.transactions.withdraw', compact('transactions', 'title', 'user', 'DepositCount', 'WithdrawCount', 'InvestmentCount'));
    }

    // public function investments()
    // {

    //     $title = "Investment";
    //     $user = Auth::user();
    //      // Retrieve user's deposits with payment options eager loaded
    //      $transactions = Investment::where('user_id', $user->id)->get();
         
    //     // Get the count of deposits for the user
    //     $DepositCount = Deposit::where('user_id', $user->id)->count();
    //     $WithdrawCount = Withdraw::where('user_id', $user->id)->count();
    //     $InvestmentCount = Investment::where('user_id', $user->id)->count();

    //     return view('user.transactions.investments', compact('transactions', 'title', 'user', 'DepositCount', 'WithdrawCount', 'InvestmentCount'));
    // }
}
