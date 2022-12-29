<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileUserCvTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_user_cv', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('address');
            $table->string('phone');
            $table->string('skill');
            $table->string('certificate');
            $table->string('target');
            $table->string('work');
            $table->string('work_detail');
            $table->string('project');
            $table->string('project_detail');

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
        Schema::dropIfExists('profile_user_cv');
    }
}
