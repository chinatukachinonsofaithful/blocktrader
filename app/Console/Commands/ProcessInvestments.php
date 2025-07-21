<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Investment;
use Carbon\Carbon;

class ProcessInvestments extends Command
{
    protected $signature = 'investments:process';
    protected $description = 'Process and calculate returns for investments';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        // Get all active investments (you can adjust the query based on your logic)
        $investments = Investment::where('status', 'active')->get();

        foreach ($investments as $investment) {
            // Calculate total return (example calculation)
            $roi = $investment->plan->roi; // Assuming plan has ROI details
            $amount = $investment->amount;
            $totalReturn = $amount + ($amount * $roi / 100);

            // Update investment with total return (this can be modified to match your logic)
            $investment->total_return = $totalReturn;
            $investment->status = 'completed'; // Example: changing the status to 'completed'
            $investment->completed_at = Carbon::now();
            $investment->save();

            // Optionally, notify the user, etc.
            // Notification::send($investment->user, new InvestmentProcessed($investment));
        }

        $this->info('Investment processing completed.');
    }
}

