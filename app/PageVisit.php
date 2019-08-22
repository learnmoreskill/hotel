<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageVisit extends Model
{
    protected $table = 'page_visits';

    protected $fillable = ['page_count'];
}