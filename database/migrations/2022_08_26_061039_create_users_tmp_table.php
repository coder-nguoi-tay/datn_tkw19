<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTmpTable extends Migration
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
            $table->integer('sms_not_confirm_count')->default(0);
            $table->integer('sms_send_failed_count')->default(0);
            $table->dateTime('block_expried_time');
            $table->dateTime('datetime');
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
