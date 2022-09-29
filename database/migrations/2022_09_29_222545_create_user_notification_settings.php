<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserNotificationSettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_notification_settings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('notcie_email');
            $table->tinyInteger('deals_notification_flag')->default(1);
            $table->tinyInteger('publish_chat_notification_flag')->default(1);
            $table->tinyInteger('participant_chat_notification_flag')->default(1);
            $table->tinyInteger('event_join_notification_flag')->default(1);
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
        Schema::dropIfExists('user_notification_settings');
    }
}
