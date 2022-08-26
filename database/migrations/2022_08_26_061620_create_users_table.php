<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('phone_number', 50);
            $table->string('email', 50);
            $table->string('password', 255);
            $table->integer('type')->comment('"1: 個人 2: 法人"');
            $table->string('show_name', 255);
            $table->string('name', 255);
            $table->string('name_kana', 255);
            $table->string('representative_name', 255);
            $table->date('birth_date');
            $table->tinyInteger('gender')->comment('"1: 男性 2: 女性, 3:その他"');
            $table->string('address_prefecture', 255);
            $table->string('address_city', 255)->comment('"1: 即日 2: 一ヶ月以内 3: 2ヶ月以内  4: 3ヶ月以上 5: 検討中のため未確定"');
            $table->string('address_street', 255);
            $table->string('address_building', 255);
            $table->integer('job_type');
            $table->text('job_descriptions');
            $table->string('reset_password_token', 255);
            $table->dateTime('reset_password_token_expire');
            $table->dateTime('registed_datetime');
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
