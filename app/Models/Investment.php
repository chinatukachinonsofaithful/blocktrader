<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    use HasFactory;

    // Define the table name if it's not the plural form of the model name
    protected $table = 'investments';

    // Define the fillable fields for mass assignment
    protected $fillable = [
        'user_id',
        'plan_id',
        'amount',
        'total_return',
        'copy_expert_id',
        'duration',
        'roi',
        'reference_id',
        'status'
    ];

    // Define relationships (if any)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }

    public function paymentOption()
    {
        return $this->belongsTo(PaymentOption::class);
    }

    public function copyExpert()
    {
        return $this->belongsTo(CopyExpert::class);
    }
}
