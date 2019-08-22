<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $table = "site_settings";

    protected $fillable = ['name','email','email2','phone','phone2','mobile','mobile2','address','map_url','logo1','logo2','facebook','twitter','instagram','youtube','seo_title','seo_slug','focus_keyphrase','meta_description'];
}