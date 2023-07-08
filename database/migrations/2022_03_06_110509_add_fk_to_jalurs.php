<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkToJalurs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jalurs', function (Blueprint $table) {
            $table->foreign('gunungs_id')->references('id')->on('gunungs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jalurs', function (Blueprint $table) {
            $table->dropForeign('gunungs_id');
        });
    }
}
