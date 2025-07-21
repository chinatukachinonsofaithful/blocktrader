<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Investment;
use App\Models\CopyExpert;
use App\Models\Plan;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\InvestmentNotificationMail;

class WebHookController extends Controller
{


    public function createnewhooks()
    {
        $users = User::whereNotNull('copy_expert_id')
            ->inRandomOrder()
            ->limit(20)
            ->get();

        $responses = [];

        foreach ($users as $user) {
            $copyExpert = CopyExpert::find($user->copy_expert_id);

            if (!$copyExpert) {
                $responses[] = ['message' => "CopyExpert not found for user: {$user->email}"];
                continue; // Skip to the next user
            }

            $Plan = Plan::where('status', 'active')
                ->inRandomOrder()
                ->first();

            if (!$Plan) {
                $responses[] = ['message' => "No active plans available for user: {$user->email}"];
                continue;
            }

            // Generate a random investment amount
            $investmentAmount = random_int($Plan->min, $Plan->max);

            if ($investmentAmount > $user->balance) {
                $responses[] = ['message' => "Low balance for user: {$user->email}"];
                continue;
            }

            // Calculate return and profit
            $interest = floatval($Plan->roi);
            $totalReturn = $investmentAmount + ($investmentAmount * $interest) / 100;
            // $profit = ($copyExpert->win_count / 100) * $totalReturn;

            $winPercentage = $copyExpert->win_count;

            if ($winPercentage >= 80) {
                // Add bias to win more often when winPercentage is high
                $adjustedWinPercentage = min(100, $winPercentage + 10);
            } else {
                // No adjustment for lower win percentages
                $adjustedWinPercentage = $winPercentage;
            }

            $reference_id = uniqid();
            $investmentStatus = "active";

            // Determine win or loss
            if (rand(1, 100) <= $adjustedWinPercentage) {
                // User wins, calculate profit
                $profit = ($winPercentage / 100) * $totalReturn;

                // Create the investment record
                Investment::create([
                    'user_id' => $user->id,
                    'plan_id' => $Plan->id,
                    'amount' => $investmentAmount,
                    'copy_expert_id' => $user->copy_expert_id,
                    'total_return' => $profit,
                    'duration' => $Plan->duration,
                    'roi' => $Plan->roi,
                    'reference_id' => $reference_id,
                    'status' => $investmentStatus,
                ]);
            } else {
                // User loses, calculate loss
                $loss = $investmentAmount * ((100 - $winPercentage) / 100);

                // Create the investment record
                Investment::create([
                    'user_id' => $user->id,
                    'plan_id' => $Plan->id,
                    'amount' => $investmentAmount,
                    'copy_expert_id' => $user->copy_expert_id,
                    'total_return' => $loss,
                    'duration' => $Plan->duration,
                    'roi' => $Plan->roi,
                    'reference_id' => $reference_id,
                    'status' => "completed",
                ]);
            }


            // Update user balances
            $user->balance -= $investmentAmount;
            $user->pending_balance += $investmentAmount;
            $user->save();

            // Send investment notification email
            try {
                Mail::to($user->email)->send(new InvestmentNotificationMail($user, $investmentAmount, $reference_id, $investmentStatus));
                $responses[] = [
                    'message' => "Investment created and email sent for user: {$user->email}",
                    'investment_id' => $reference_id,
                ];
            } catch (\Exception $e) {
                $responses[] = [
                    'message' => "Investment created but email failed for user: {$user->email}",
                    'investment_id' => $reference_id,
                    'error' => $e->getMessage(),
                ];
            }
        }

        return response()->json(['results' => $responses]);
    }



    public function hooks()
    {
        $randomUserId = Investment::where('status', 'active')
            ->inRandomOrder()
            ->pluck('user_id')
            ->first();

        if (!$randomUserId) {
            return response()->json(['message' => 'No investments to process at this time.']);
        }

        // Fetch investments for the selected random user
        $investments = Investment::where('status', 'active')
            ->where('user_id', $randomUserId)
            ->get();

        if ($investments->isEmpty()) {
            return response()->json(['message' => 'No investments to process for the selected user.']);
        }

        foreach ($investments as $investment) {
            // Calculate the end date based on created_at and duration
            $endDate = Carbon::parse($investment->created_at)->addDays($investment->duration);
            $now = Carbon::now('UTC'); // Make sure to use the correct timezone

            // Check if the investment duration has been completed
            if ($now->greaterThanOrEqualTo($endDate)) {
                // Fetch the user associated with the investment
                $user = User::find($investment->user_id);

                if (!$user) {
                    return response()->json(['error' => 'User not found for this investment.'], 404);
                }

                // Ensure values are numeric
                $amount = floatval($investment->total_return);


                // Add interest amount to user's balance
                $user->balance += $amount;

                if ($investments->copy_expert_id != NULL) {
                    $amountinvested = floatval($investment->amount);
                    $user->pending_balance -= $amountinvested;
                }
                // Mark investment as completed
                $investment->status = "completed";

                // Save changes
                $investment->save();
                $user->save();

                $investmentAmount = $amount;
                $investmentId = $investments->reference_id;
                $investmentStatus = $investment->status;

                Mail::to($user->email)->send(new InvestmentNotificationMail($user, $investmentAmount, $investmentId, $investmentStatus));
            }
        }

        return response()->json(['message' => 'Investments processed successfully.']);
    }
}
