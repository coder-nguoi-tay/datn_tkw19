<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvents extends Migration
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
            $table->string('name');
            $table->text('detail');
            $table->string('image_url');
            $table->integer('category_id');
            $table->json('events_area')->nullable();
            $table->text('detail_location')->nullable();
            $table->string('address');

            $table->text('achievement_conditions')->nullable();
            $table->bigInteger('reward_amount')->nullable();
            $table->tinyInteger('entry_type')->default(1);
            $table->bigInteger('entry_fee')->nullable();
            $table->tinyInteger('apply_method')->nullable();
            $table->string('event_organizer')->nullable();
            $table->dateTime('publish_start_datetime')->nullable();
            $table->dateTime('publish_end_datetime')->nullable();
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
