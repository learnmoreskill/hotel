<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('room_title');
            $table->string('room_subtitle')->nullable();
            $table->string('cover_image');
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
        Schema::dropIfExists('room_pages');
    }
}