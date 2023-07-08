<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('jalur');
            $table->date('tanggal_pendakian');
            $table->string('nama_ketua');
            $table->string('nik_ketua');
            $table->string('no_1');
            $table->string('no_2');
            $table->string('alamat');
            $table->string('peserta');

            $table->unsignedBigInteger('users_id');
            $table->unsignedBigInteger('gunungs_id');

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
        Schema::dropIfExists('pemesanan');
    }
}
