<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTransferInfos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_transfer_infos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('account_name_kana');
            $table->bigInteger('financial_institution_id');
            $table->bigInteger('branch_id');
            $table->string('account_number');
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
        Schema::dropIfExists('user_transfer_infos');
    }
}
