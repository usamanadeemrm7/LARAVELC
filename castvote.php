<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class castvote extends Model
{
     protected $table = 'castvote';
    protected $fillable = [
        'Name', 'CNIC','Constituency 1','Constituency 2','Constituency 3','Constituency 4',
    ];
}
