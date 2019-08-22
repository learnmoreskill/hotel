<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table= 'events';

    protected $fillable=['title','event_date','author','description','status','image'];
}