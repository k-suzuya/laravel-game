<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeapon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weapon', function (Blueprint $table) {
            $table->increments('weapon_id');
            $table->string('weapon_name','6');
            $table->integer('weapon_type_id')->unsigned();
            $table->integer('game_id')->unsigned();
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
        Schema::dropIfExists('weapon');
    }
}
