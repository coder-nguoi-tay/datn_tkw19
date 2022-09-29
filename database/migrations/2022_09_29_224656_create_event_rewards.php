<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventRewards extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_rewards', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('event_id');
            $table->text('chat_content')->nullable();
            $table->integer('order_num')->default(1);
            $table->text('achiever_reward_content')->nullable();
            $table->text('achiever_reward_memo')->nullable();
            $table->bigInteger('reward_amount')->default(0);
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
        Schema::dropIfExists('event_rewards');
    }
}
