<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('event_name', 255);
            $table->text('event_detail');
            $table->text('achievement_conditions');
            $table->integer('first_achiever_reward');
            $table->integer('second_achiever_reward');
            $table->integer('third_achiever_reward');
            $table->integer('reward_amount');
            $table->integer('entry_fee');
            $table->text('apply_method');
            $table->string('event_organizer', 255);
            $table->dateTime('publish_start_datetime');
            $table->dateTime('publish_end_datetime');
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
        Schema::dropIfExists('events');
    }
}
