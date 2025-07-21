<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentOption extends Model
{
    use HasFactory;
   
    protected $fillable = ['name','short_name', 'icon', 'website_address']; // Adjust based on your table structure

    public function deposits()
    {
        return $this->hasMany(Deposit::class);
    }
}
