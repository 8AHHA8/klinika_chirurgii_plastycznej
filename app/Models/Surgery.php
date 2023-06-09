<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Service;

class Surgery extends Model
{
    use HasFactory;

    public function bookings()
    {
        return $this->hasMany(Transaction::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
