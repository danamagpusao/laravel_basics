<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableActorDrama extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actor_drama', function (Blueprint $table) {
            $table->increments('id');
            $table->foreign('drama_id') //references to drama
                  ->references('id')
                  ->on('drama')
                  ->onDelete('cascade'); 

            $table->foreign('user_id') //references to user
                  ->references('id')
                  ->on('user')
                  ->onDelete('cascade');
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
        Schema::drop('actor_drama');
    }
}
