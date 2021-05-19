<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetil extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detil', function (Blueprint $table) {
            $table->increments('id_detail');
            $table->string ('kapasitas');
            $table->string ('linkTes');
            $table->string ('status');
            $table->string ('id_jadwal');
            $table->string ('id_tes');
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
        Schema::dropIfExists('detil');
    }
}
