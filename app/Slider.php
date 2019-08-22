<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table= 'sliders';

    protected $fillable=['caption','sub_caption','image','status'];
}