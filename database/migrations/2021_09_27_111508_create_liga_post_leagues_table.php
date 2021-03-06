<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLigaPostLeaguesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('liga_post_leagues', function (Blueprint $table) {
            $table->id();
            $table->string('team_name')->nullable();
            $table->string('games')->nullable();
            $table->integer('score')->nullable();
            $table->integer('Liga_postId')->nullable();
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
        Schema::dropIfExists('liga_post_leagues');
    }
}
