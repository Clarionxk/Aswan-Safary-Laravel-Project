<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTourTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_tables', function (Blueprint $table) {
            $table->id();
            $table->string('Sight');
            $table->text('description');
            $table->string('image');
            $table->string('duration');
            $table->string('date');
            $table->string('price');
            $table->string('url');


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
        Schema::dropIfExists('tour_tables');
    }
}
