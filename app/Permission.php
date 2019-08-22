<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable = ['module','create','view','update','delete','publish'];

    protected function users(){

        return $this->belongsToMany('App\User');
    }

    protected function role(){

        return $this->belongsToMany('App\Role');
    }
}
