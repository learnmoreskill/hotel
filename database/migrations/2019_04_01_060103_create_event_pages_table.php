<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('page_title');
            $table->string('page_subtitle');
            $table->string('cover_image')->nullable();
            $table->string('seo_title')->nullable();
            $table->string('seo_slug')->nullable();
            $table->string('focus_keyphrase')->nullable();
            $table->text('meta_description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_pages');
    }
}