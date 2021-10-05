<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLigaCalendarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('liga_calendars', function (Blueprint $table) {
            $table->id();
            $table->string('species')->nullable();
            $table->date('date')->nullable();
            $table->string('team_name')->nullable();
            $table->integer('team_result')->nullable();
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
        Schema::dropIfExists('liga_calendars');
    }
}
