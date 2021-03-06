<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    public function course(){
        return $this->hasMany('App\Course');
    }
    
    public function student() {
        return $this->hasMany('App\Student');
    }
}
