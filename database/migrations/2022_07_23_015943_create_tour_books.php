<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTourBooks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_books', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->default('0');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('tour_id')->default('0');
            $table->foreign('tour_id')->references('id')->on('tour_tables')->onDelete('cascade');
            $table->string('name');
            $table->integer('phone');
            $table->string('Adress');
            $table->string('sight');
            $table->integer('How_many');
            $table->dateTime('Date_tour', $precision = 0);
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
        Schema::dropIfExists('tour_books');
    }
}
