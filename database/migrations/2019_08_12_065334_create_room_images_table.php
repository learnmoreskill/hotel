<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('room_id');
            $table->string('image');
            $table->boolean('status')->default('1');
            $table->timestamps();
        });
    }
     
    public function down()
    {
        Schema::dropIfExists('room_images');
    }
}