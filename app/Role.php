<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['name','slug','permissions'];

    public function users(){

        return $this->hasMany('App\User','role_id');
    }

    public function hotelstaff(){

        return $this->hasMany('App\HotelStaff');
    }

}   