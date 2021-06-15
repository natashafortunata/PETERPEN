<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->increments('id_trx');
            $table->string ('pengirim');
            $table->date ('tgl_kirim');
            $table->string ('bank');
            $table->string ('total');
            $table->string ('file_bayar');
            $table->string ('status');
            $table->string ('link_tes')->nullable();
            $table->string('id_daftar');
            $table->string('id_admin');
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
        Schema::dropIfExists('transaksi');
    }
}
