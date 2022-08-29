<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('hira_name', 255);
            $table->string('kata_name', 255);
            $table->string('phone_number', 255);
            $table->string('email', 255);
            $table->text('content');
            $table->string('agent', 255);
            $table->string('ip', 255);
            $table->tinyInteger('type')->comment('"1: 新規 ( 未対応） 2: 対応中3: 対応済 4: 対応必要無し"');
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
        Schema::dropIfExists('contacts');
    }
}
