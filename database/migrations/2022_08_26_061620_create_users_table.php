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
            $table->string('email', 255)->nullable();
            $table->string('password', 255);
            $table->tinyInteger('type')->comment('"1: 個人 2: 法人"');
            $table->string('show_name', 255)->nullable();
            $table->string('name', 255)->nullable();
            $table->string('name_kana', 255)->nullable();
            $table->string('representative_name', 255)->nullable();
            $table->date('birthday')->nullable();
            $table->tinyInteger('gender')->comment('"1: 男性 2: 女性, 3:その他"')->nullable();
            $table->integer('prefecture_id')->nullable();
            $table->integer('city_id')->comment('"1: 即日 2: 一ヶ月以内 3: 2ヶ月以内  4: 3ヶ月以上 5: 検討中のため未確定"')->nullable();
            $table->string('address_street', 255)->nullable();
            $table->string('address_building', 255)->nullable();
            $table->tinyInteger('job_type')->nullable();
            $table->text('job_descriptions')->nullable();
            $table->string('reset_password_token')->nullable();
            $table->datetime('reset_password_token_expire')->nullable();
            $table->datetime('last_login_at')->nullable();
            $table->string('phone_number_change', 50)->nullable();
            $table->string('sms_code_change')->nullable();
            $table->string('sms_code_change')->nullable();
            $table->tinyInteger('display_info_flag')->default(0)->nullable();
            $table->text('memo')->nullable();
            $table->rememberToken();
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
