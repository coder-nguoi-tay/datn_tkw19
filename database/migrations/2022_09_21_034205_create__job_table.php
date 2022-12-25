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
            $table->integer('quatity');
            $table->string('sex');
            $table->string('describe', 1024);
            $table->integer('level_id');
            $table->integer('experience_id');
            $table->integer('wage_id');
            $table->string('benefit', 1024);
            $table->integer('profession_id');
            $table->string('address');
            $table->integer('time_work_id');
            $table->integer('employer_id');
            $table->string('candidate_requirements', 1024);
            $table->integer('wk_form_id');
            $table->integer('location_id');
            $table->date('job_time');
            $table->date('end_job_time');
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