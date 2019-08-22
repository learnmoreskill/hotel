<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = ['page_title', 'page_subtitle', 'image', 'cover_image', 'content_title','content', 'video_link', 'seo_title', 'seo_slug', 'focus_keyphrase', 'meta_description'];
}