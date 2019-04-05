<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateMovementHistorysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('movement_historys', function (Blueprint $table) {
            $table->integer('asset_id')->unsigned();
            $table->foreign('asset_id')->references('id')->on('assets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('movement_historys', function (Blueprint $table) {
            $table->dropForeign('movement_historys_asset_id_foreign');
        });
    }
}
