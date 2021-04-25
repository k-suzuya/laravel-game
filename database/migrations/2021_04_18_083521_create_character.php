<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharacter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('character', function (Blueprint $table) {
            $table->increments('icharacter_id');
            $table->integer('game_id')->unsigned();
            $table->string('character_name','100');
            $table->string('attribute','6');
            $table->string('rarity','6');
            $table->string('img_url','255');
            $table->timestamps();
            $table->string('last_update_user','20');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('character');
    }
}
