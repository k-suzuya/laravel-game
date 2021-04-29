<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillTypeMst extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skill_type_mst', function (Blueprint $table) {
          $table->increments('skill_type_id');
            $table->string('skill_type_name','20');
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
        Schema::dropIfExists('skill_type_mst');
    }
}
