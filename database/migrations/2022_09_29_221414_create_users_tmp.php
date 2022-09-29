<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTmp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_tmp', function (Blueprint $table) {
            $table->id();
            $table->string('phone_number', 50);
            $table->tinyInteger('sms_confirm_flag')->default(0);
            $table->string('sms_code');
            $table->dateTime('sms_expried_datetime')->nullable();
            $table->integer('sms_not_confirm_count')->default(0);
            $table->integer('sms_send_failed_count')->nullable()->default(0);
            $table->dateTime('block_expried_time')->nullable();
            $table->dateTime('last_register')->nullable();
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
        Schema::dropIfExists('users_tmp');
    }
}
