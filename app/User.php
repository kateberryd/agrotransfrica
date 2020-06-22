<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends \Cartalyst\Sentinel\Users\EloquentUser
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'first_name', 'last_name', 'email',  'phone_number', 'password', 'other_name', 'gender', 'marital',
       'country', 'state', 'depositors_name'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $loginNames = [
        'email',
    ];

    public function client(){
        return $this->hasOne('App\Client');
    }


    public function loan(){
        return $this->hasMany('App\Loan');
    }

}
