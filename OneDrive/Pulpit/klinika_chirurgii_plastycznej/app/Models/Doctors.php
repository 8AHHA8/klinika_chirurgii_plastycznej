<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Doctors extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name',
        'surname',
        'password',
        'e-mail', 
        'speciality',
        'advancement_level',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $attributes = [
        'role' => 1,
    ];
}
