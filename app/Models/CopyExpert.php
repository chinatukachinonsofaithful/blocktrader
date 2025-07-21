<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CopyExpert extends Model
{
    use HasFactory;

    protected $fillable = [
        'profile_name',
        'bio',
        'specialty',
        'win_count',
        'loss_count',
    ];

    /**
     * Get the user associated with the copy expert profile.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function investments()
    {
        return $this->hasMany(Investment::class);
    }

    
}
