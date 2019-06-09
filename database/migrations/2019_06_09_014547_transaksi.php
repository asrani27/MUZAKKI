<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Transaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_kw');
            $table->date('tgl');
            $table->integer('peserta_id')->unsigned();
            $table->integer('pegawai_id')->unsigned();
            $table->integer('jenis_id')->unsigned();
            $table->integer('alat_id')->unsigned();
            $table->timestamps();     
            
            $table->foreign('peserta_id')->references('id')->on('peserta')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('pegawai_id')->references('id')->on('pegawai')->onUpdate('cascade')->onDelete('restrict');
    
            $table->foreign('jenis_id')->references('id')->on('jenis')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('alat_id')->references('id')->on('alat')->onUpdate('cascade')->onDelete('restrict');
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
