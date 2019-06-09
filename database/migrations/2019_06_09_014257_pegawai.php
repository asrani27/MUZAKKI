<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pegawai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nik');
            $table->string('nama');
            $table->date('tgl_lahir');
            $table->string('tempat_lahir');
            $table->string('jkel',20);
            $table->integer('agama_id')->unsigned();
            $table->integer('jabatan_id')->unsigned();
            $table->text('alamat');
            $table->string('telp',20);
            $table->timestamps();

            $table->foreign('agama_id')->references('id')->on('agama')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('jabatan_id')->references('id')->on('jabatan')->onUpdate('cascade')->onDelete('restrict');
    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pegawai');
    }
}
