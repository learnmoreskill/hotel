<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventPage extends Model
{
    protected $table = 'event_pages';
    
    protected $fillable = ['content_title','content_subtitle', 'seo_title', 'seo_slug', 'focus_keyphrase', 'meta_description'];

}