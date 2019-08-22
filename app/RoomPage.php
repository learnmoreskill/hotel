<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomPage extends Model
{
    protected $table = 'room_pages';

    protected $fillable = ['room_title', 'room_subtitle', 'cover_image', 'seo_title', 'seo_slug', 'focus_keyphrase', 'meta_description'];
}