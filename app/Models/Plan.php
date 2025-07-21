<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    // Mass assignable attributes
    protected $fillable = [
        'name',
        'amount',
        'min',
        'max',
        'roi',
        'duration',
        'capital',
        'commission',
        'terms',
        'status',
    ];
}
