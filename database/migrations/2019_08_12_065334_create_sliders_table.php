<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('caption')->nullable();
            $table->string('sub_caption')->nullable();
            $table->string('image');
            $table->boolean('status')->default('1');
            $table->timestamps();
        });
    }
     
    public function down()
    {
        Schema::dropIfExists('sliders');
    }
}