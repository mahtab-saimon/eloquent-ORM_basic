<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentOne extends Model
{
    protected $fillable = [
        'name', 'email', 'phone',
    ];
}
