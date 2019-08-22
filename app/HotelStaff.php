<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HotelStaff extends Model
{
    protected $table = 'hotel_staffs';
    
    protected $fillable = ['name','slug','email','role_id','image','designation','sort_order','short_description','facebook','twitter','instagram','linkedin','status'];

    public function role(){
        return $this->belongsTo('App\Role','role_id');
    }


}