<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobMiddles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_middles', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('job_broad_id');
            $table->string('code', 5);
            $table->string('name');
            $table->timestamps();
            $table->softDeletes();
            $table->index('job_broad_id');
            $table->index('code');
            $table->index('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_middles');
    }
}
