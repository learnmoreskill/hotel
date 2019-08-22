<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GalleryPage extends Model
{
    protected $table = 'gallery_pages';
    
    protected $fillable = ['page_title','page_subtitle', 'cover_image','seo_title', 'seo_slug', 'focus_keyphrase', 'meta_description'];

}