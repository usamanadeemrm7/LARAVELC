<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\Cast as Authenticatable;

class Cast extends Authenticatable
{
    use Notifiable;

     protected $table = 'castvote';
    protected $fillable =  [
        'CNIC',
    ];

}