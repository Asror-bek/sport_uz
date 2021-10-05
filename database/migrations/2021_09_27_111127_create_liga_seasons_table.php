<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLigaSeasonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('liga_seasons', function (Blueprint $table) {
            $table->id();
            $table->string('result')->nullable();
            $table->string('logo')->nullable();
            $table->string('team_name')->nullable();
            $table->integer('game')->nullable();
            $table->integer('win')->nullable();
            $table->integer('draw')->nullable();
            $table->integer('defeat')->nullable();
            $table->integer('team_goals')->nullable();
            $table->integer('score')->nullable();
            $table->string('footballer_name')->nullable();
            $table->integer('footballer_goals')->nullable();
            $table->integer('penalti')->nullable();
            $table->integer('pas')->nullable();
            $table->integer('golpas')->nullable();
            $table->integer('LigaCategoryId')->nullable();
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
        Schema::dropIfExists('liga_seasons');
    }
}
