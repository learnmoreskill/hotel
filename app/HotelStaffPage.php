<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HotelStaffPage extends Model
{

    protected $table = 'hotel_staff_pages';
    
    protected $fillable = ['content_title','content_subtitle', 'seo_title', 'seo_slug', 'focus_keyphrase', 'meta_description'];

   
}