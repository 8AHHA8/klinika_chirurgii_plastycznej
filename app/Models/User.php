<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name',
        'surname',
        'phone_number',
        'pesel',
        'e-mail', 
        'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $attributes = [
        'role' => 2,
    ];

    public function doctor()
    {
        return $this->hasOne(Doctor::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}