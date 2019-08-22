<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'rooms';

    protected $fillable = ['name', 'image', 'price', 'description', 'status', 'slug', 'sort_order', 'no_of_rooms'];
}