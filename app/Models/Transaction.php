<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Booking;
use App\Models\Service;
use App\Models\Doctors;

class Transaction extends Model
{
    use HasFactory;
    
    public function surgery()
    {
        return $this->belongsTo(Surgery::class);
    }

    public function doctor()
    {
        return $this->belongsTo(Doctors::class);
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
        'doctor_id',
    ];

    
}
