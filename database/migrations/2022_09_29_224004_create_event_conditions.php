<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventConditions extends Migration
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
            $table->tinyInteger('target_gender')->default(1);
            $table->tinyInteger('target_age_type')->nullable();
            $table->integer('target_age_from')->nullable();
            $table->integer('target_age_to')->nullable();
            $table->text('other_conditions')->nullable();
            $table->tinyInteger('limit_number_of_participants_flag')->nullable();
            $table->bigInteger('limit_number_of_participants')->nullable();
            $table->tinyInteger('participation_terms_type')->nullable();
            $table->text('special_notes')->nullable();
            $table->string('address')->nullable();
            $table->string('company_name')->nullable();
            $table->text('meet_condition')->nullable();
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
