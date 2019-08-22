<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('slug');
            $table->date('event_date');
            $table->string('author');
            $table->longText('description');
            $table->string('image');
            $table->boolean('status')->default('1');
            $table->timestamps();
        });
    }
     
    public function down()
    {
        Schema::dropIfExists('events');
    }
}