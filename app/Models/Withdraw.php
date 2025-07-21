<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdraw extends Model
{

    use HasFactory;
    
    // Define the table name if it's not the plural form of the model name
    protected $table = 'withdraw';

    protected $fillable = ['user_id', 'amount', 'remarks', 'status', 'reference_id', 'description'];

     // Define relationships (if any)
     public function user()
     {
         return $this->belongsTo(User::class);
     }


     public function paymentOption()
     {
         return $this->belongsTo(PaymentOption::class, 'payment_option');
     }

     
}


