<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('item_name');
            $table->string('weight');
            $table->string('date_of_deposit');
            $table->string('time_of_deposit');
            $table->string('date_of_withdrawal')->default('unknown');
            $table->string('depositor_name');
            $table->string('beneficiary_name');
            $table->string('amount');
            $table->string('vault_number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assets');
    }
}
