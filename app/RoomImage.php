<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomImage extends Model
{
    protected $table= 'room_images';

    protected $fillable=['room_id','image','status'];
}