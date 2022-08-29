<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventConditionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_conditions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('event_id');
            $table->tinyInteger('target_gender')->comment('"1: 男性 2: 女性 3:男女問わず"');
            $table->tinyInteger('target_age_type');
            $table->integer('target_age_from');
            $table->integer('target_age_to');
            $table->text('other_conditions');
            $table->tinyInteger('limit_number_of_participants_flag');
            $table->integer('limit_number_of_participants');
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
        Schema::dropIfExists('event_conditions');
    }
}
