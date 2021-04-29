<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGameMst extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_mst', function (Blueprint $table) {
            $table->increments('game_id');
            $table->string('game_name','100');
            $table->date('start_service_date')->nullable();
            $table->date('end_service_date')->nullable();
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
        Schema::dropIfExists('game_mst');
    }
}
