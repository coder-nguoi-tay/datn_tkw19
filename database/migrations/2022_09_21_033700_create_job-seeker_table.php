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
        Schema::create('job-seeker', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->string('phone');
            $table->string('images');
            $table->integer('user_role');
            $table->integer('experience_id');
            $table->integer('lever_id');
            $table->integer('wage_id');
            $table->integer('profession_id');
            $table->integer('time_work_id');
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
        //
    }
};