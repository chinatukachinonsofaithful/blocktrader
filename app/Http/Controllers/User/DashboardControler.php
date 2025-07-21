<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Deposit;
use Illuminate\Support\Facades\Auth;
use App\Models\Investment;
use App\Models\Withdraw;
use Carbon\Carbon;

use Illuminate\Http\Request;
use App\Mail\SurveyNotificationMail;
use Illuminate\Support\Facades\Mail;

class DashboardControler extends Controller
{
    //

    public function survey()
    {
        $title = "Financial Profile";
        $user = Auth::user();
        return view('auth.survey', compact('title', 'user'));
    }



    public function surveysubmit(Request $request)
    {
        // Validate the request inputs with refined rules
        $validated = $request->validate([
            'networth' => 'required',
            'stocktrading' => 'required',
            'monthlytrading' => 'required',
            'purpose' => 'required',
            'source' => 'required',
            'annual' => 'required',
            'liquid' => 'required',
        ]);

        // Get the authenticated user
        $user = Auth::user();

        $networth = $validated['networth'];
        $stocktrading = $validated['stocktrading'];
        $monthlytrading = $validated['monthlytrading'];
        $purpose = $validated['purpose'];
        $source = $validated['source'];
        $annual = $validated['annual'];
        $liquid = $validated['liquid'];

        // Mark the survey as completed
        $user->survey = '1';
        $user->save();

        // Redirect to the dashboard with a success message
        return redirect()->route('dashboard.index')->with('success', 'Survey successfully submitted.');
    }

    public function skipsurvey(Request $request){
        $user = Auth::user();
        $user->survey = '1';
        $user->save();
        
        return redirect()->route('dashboard.index')->with('success', 'Survey successfully skipped.');
    }



    public function index()
    {
        $title = "Dashboard";
        $user = Auth::user();

        if (Auth::user()->survey == 0) {
            return redirect()->intended('user/survey');
        } else {
        }

        // Retrieve user's investments
        $investments = Investment::where('user_id', $user->id)->get();
        $TotalDeposit = Deposit::where('user_id', $user->id)->where('status', 'approved')->get();
        $TotalDepositMon = Deposit::where('user_id', $user->id)
            ->where('status', 'approved')
            ->whereMonth('created_at', Carbon::now()->month)  // Filter by current month
            ->whereYear('created_at', Carbon::now()->year)    // Filter by current year
            ->sum('amount');
        $TotalWithdraw = Withdraw::where('user_id', $user->id)->where('status', 'approved')->get();
        $TotalWithdrawMon = Withdraw::where('user_id', $user->id)
            ->where('status', 'approved')
            ->whereMonth('created_at', Carbon::now()->month)  // Filter by current month
            ->whereYear('created_at', Carbon::now()->year)    // Filter by current year
            ->sum('amount');

        $totalInvested = $investments->sum('amount');



        // Calculate Profit
        $totalProfit = $investments->sum(function ($investment) {
            return $investment->total_return + ($investment->amount / 100);
        });

        return view('user.index', compact('title', 'user', 'totalProfit', 'TotalDeposit', 'TotalWithdraw', 'TotalWithdrawMon', 'TotalDepositMon'));
    }
}
