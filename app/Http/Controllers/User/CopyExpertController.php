<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\CopyExpert;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Investment;

use App\Models\Plan;
use Illuminate\Support\Facades\Auth;

class CopyExpertController extends Controller
{
    /**
     * Copy the investment plans of the assigned copy expert.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */




     public function index()
     {
         $title = "Copy Experts";
         $user = Auth::user();
     
         if (Auth::user()->survey == 0) {
            return redirect()->intended('user/survey');
        } else {
        }
         // Fetch all copy experts
         $copyexperts = CopyExpert::all();
     
         // Fetch user's investments
         // Retrieve user's investments
         $investments = Investment::where('user_id', $user->id)->get();


         // Calculate Invested
         $totalInvested = $investments->sum('amount');
 
         // Calculate Profit
         $totalProfit = $investments->sum(function ($investment) {
             return $investment->total_return + ($investment->amount / 100);
         });
 
 
         // Calculate Conversion Rate
         $totalPlans = Plan::count(); // Total available plans
         $conversionRate = $totalPlans > 0 ? ($investments->count() / $totalPlans) * 100 : 0;
 
         // Calculate Avg. Value
         $avgValue = $investments->count() > 0 ? $totalInvested / $investments->count() : 0;
 
         // Return the view
         return view('user.copyexpert.index', [
             'title' => $title,
             'user' => $user,
             'totalInvested' => $totalInvested,
             'totalProfit' => $totalProfit,
             'investments' => $investments,
             'conversionRate' => $conversionRate,
             'avgValue' => $avgValue,
             'copyexperts' => $copyexperts
         ]);
     }
     
     
    public function show($id)
    {
        $copyexperts = CopyExpert::findOrFail($id); // Fetch the plan by id

        $copying = User::where('copy_expert_id', $copyexperts->id)->count();

        
        $user = Auth::user();
        $title = "$copyexperts->profile_name";

        // $investments = Investment::where('user_id', $user->id)->where('copy_expert_id', $copyexperts->id)->get();
        $investments = Investment::where('copy_expert_id', $copyexperts->id)->get();
     
        // Initialize variables
        $totalInvested = 0;
        $totalProfit = 0;
        $conversionRate = 0;
        $avgValue = 0;
    
        // Check if the user has a copy expert assigned
        if ($user->copy_expert_id && $user->copy_expert_id != 0) {
            if ($investments->isNotEmpty()) {
                // Calculate Invested
                $totalInvested = $investments->sum('amount');
                
    
                // Calculate Profit
                $totalProfit = $investments->sum(function ($investment) {
                   return $investment->total_return + ($investment->amount / 100);
               });
    
                // Calculate Conversion Rate
                $totalPlans = Plan::count(); // Total available plans
                $conversionRate = $totalPlans > 0 ? ($investments->count() / $totalPlans) * 100 : 0;
    
                // Calculate Avg. Value
                $avgValue = $investments->count() > 0 ? $totalInvested / $investments->count() : 0;
            }
        }


       
        return view('user.copyexpert.show', [
            'title' => $title,
            'user' => $user,
            'totalInvested' => $totalInvested,
            'totalProfit' => $totalProfit,
            'investments' => $investments,
            'conversionRate' => $conversionRate,
            'avgValue' => $avgValue,
            'copyexperts' => $copyexperts,
            'copying' => $copying
        ]);
    }

    public function myshow($id)
    {
        $copyexperts = CopyExpert::findOrFail($id); // Fetch the plan by id

        $copying = User::where('copy_expert_id', $copyexperts->id)->count();

        
        $user = Auth::user();
        if (Auth::user()->survey == 0) {
            return redirect()->intended('user/survey');
        } else {
        }
        $title = "$copyexperts->profile_name";

        $investments = Investment::where('user_id', $user->id)->where('copy_expert_id', $copyexperts->id)->get();
     
        // Initialize variables
        $totalInvested = 0;
        $totalProfit = 0;
        $conversionRate = 0;
        $avgValue = 0;
    
        // Check if the user has a copy expert assigned
        if ($user->copy_expert_id && $user->copy_expert_id != 0) {
            if ($investments->isNotEmpty()) {
                // Calculate Invested
                $totalInvested = $investments->sum('amount');
                
    
                // Calculate Profit
                $totalProfit = $investments->sum(function ($investment) {
                   return $investment->total_return + ($investment->amount / 100);
               });
    
                // Calculate Conversion Rate
                $totalPlans = Plan::count(); // Total available plans
                $conversionRate = $totalPlans > 0 ? ($investments->count() / $totalPlans) * 100 : 0;
    
                // Calculate Avg. Value
                $avgValue = $investments->count() > 0 ? $totalInvested / $investments->count() : 0;
            }
        }


       
        return view('user.copyexpert.myshow', [
            'title' => $title,
            'user' => $user,
            'totalInvested' => $totalInvested,
            'totalProfit' => $totalProfit,
            'investments' => $investments,
            'conversionRate' => $conversionRate,
            'avgValue' => $avgValue,
            'copyexperts' => $copyexperts,
            'copying' => $copying
        ]);
    }




}
