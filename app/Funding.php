<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funding extends Model
{
    //
    protected $fillable = [
        'firstName', 'lastName', 'otherName', 'email', 'phone', 'birth',
        'gender', 'registerName', 'ar',  'address', 'state', 'country'
    ];
}