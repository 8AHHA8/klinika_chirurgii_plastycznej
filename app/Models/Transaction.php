<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Booking;
use App\Models\Service;

class Transaction extends Model
{
    use HasFactory;
    
    public function surgery()
    {
        return $this->belongsTo(Surgery::class);
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    

    protected $fillable = [
        'id',
        'user',
        'transactions',
        'surgeries',
        'date',
    ];

    
}
