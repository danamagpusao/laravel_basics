<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDramaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drama', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->longText('synopsis');
            $table->date('aired_date'); // mm-dd-yy
            $table->integer('released_episodes')->unsigned();
            $table->integer('total_no_episodes')->unsigned();
            $table->string('status'); //ongoing, completed
            $table->string('type'); //movie, drama, variety show
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
        Schema::drop('drama');
    }
}
