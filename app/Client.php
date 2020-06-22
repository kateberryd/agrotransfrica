<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //

    

    protected $fillable = [
    'date_birth',  'lga',  'mi', 'in', 'bvn', 'size',
     'challenge', 'full_name', 'relationship', 'kin_address', 'kin_phone', 'kin_email','institution_name', 'year_obtained',
    'institution_obtained', 'po', 'co', 'cname', 'cnature', 'caddress', 'rnumber', 'remail', 'image'];


    public function user(){
        return $this->belongsTo('App\User');
    }
}
