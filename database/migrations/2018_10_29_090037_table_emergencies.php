<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableEmergencies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('emergencies', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('hero_id')->nullable();
        $table->integer('user_id')->nullable();
        $table->string('subject')->nullable();
        $table->string('description')->nullable();
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('emergencies');
    }
}
