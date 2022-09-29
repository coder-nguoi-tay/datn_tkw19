<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->text('content');
            $table->string('url', 255)->nullable();
            $table->string('file_url', 255)->nullable();
            $table->string('file_name', 255)->nullable();
            $table->dateTime('publish_start_datetime');
            $table->dateTime('publish_end_datetime');
            $table->tinyInteger('publish_status')->nullable()->comment('"0: 非公開 1: 公開"');
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
        Schema::dropIfExists('news');
    }
}
