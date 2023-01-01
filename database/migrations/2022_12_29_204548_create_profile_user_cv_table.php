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
            $table->longText('skill');
            $table->longText('certificate');
            $table->longText('target');
            $table->longText('work');
            $table->longText('work_detail');
            $table->longText('project');
            $table->longText('project_detail');
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