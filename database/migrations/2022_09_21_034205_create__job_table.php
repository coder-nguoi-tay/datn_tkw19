<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('Quatity');
            $table->string('sex');
            $table->string('describe');
            $table->integer('level_id');
            $table->integer('experience_id');
            $table->integer('Wage_id');
            $table->integer('skill_id');
            $table->string('benefit');
            $table->integer('profession_id');
            $table->string('Address');
            $table->string('time_job');
            $table->integer('time_work_id');
            $table->integer('employer_id');
            $table->string('Candidate_requirements');
      
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
        Schema::dropIfExists('_job');
    }
};
