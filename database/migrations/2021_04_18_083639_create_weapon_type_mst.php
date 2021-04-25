<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeaponTypeMst extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weapon_type_mst', function (Blueprint $table) {
            $table->increments('weapon_type_id');
            $table->string('weapon_type_name','20');
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
        Schema::dropIfExists('weapon_type_mst');
    }
}
