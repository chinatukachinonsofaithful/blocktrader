<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Controller;
use App\Models\Deposit;
use App\Models\User;
use App\Models\Investment;
use App\Models\Plan;
use App\Models\Withdraw;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class AdminDashboardController extends Controller
{
    //
    public function dashboard()
    {
        $check = $this->admincheck();
        if ($check) {
            return $check; // Return the redirection if the user is not an admin
        }


        
        if (Auth::user()->role_id >= 2) {
        } else {
            return redirect()->intended('user/dashboard');
        }


        // Gather statistics for the dashboard
        $page_title = "Dashboard";

        $userCount = User::count(); // Total number of users

        // $user = Auth::user();

        $transactionCount = Investment::count(); // Total number of transactions
        $totalTransactionValue = Investment::sum('amount'); // Total value of all transactions
        $activePlanCount = Plan::where('status', 'active')->count(); // Total active Plans
        $totalPlanValue = Investment::where('status', '1')->sum('amount'); // Total value of active Plans


        // Assuming 'deposit' and 'withdrawal' are types in the 'type' column of the transactions table
        $totalDeposits = Deposit::sum('amount'); // Total deposits
        $totalWithdrawals = Withdraw::sum('amount'); // Total withdrawals



        // Gather stats for the last 30 days (optional)
        $recentTransactions = Investment::where('created_at', '>=', Carbon::now()->subDays(30))->count();
        $recentUsers = User::where('created_at', '>=', Carbon::now()->subDays(30))->count();

        return view('admin.dashboard', compact(
            'userCount',
            'transactionCount',
            'totalTransactionValue',
            'activePlanCount',
            'totalPlanValue',
            'totalDeposits',
            'totalWithdrawals',
            'page_title',
            'recentTransactions',
            'recentUsers'
        ));
    }
}
