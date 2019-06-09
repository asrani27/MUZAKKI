<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Peserta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peserta', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_peserta',100);
            $table->string('nama_pasangan',100);
            $table->date('tgl_lahir');
            $table->string('tempat_lahir',50);
            $table->integer('agama_id')->unsigned();
            $table->string('jkel',20);
            $table->string('umur',3);
            $table->text('alamat');
            $table->date('tgl_daftar');
            $table->timestamps();

            $table->foreign('agama_id')->references('id')->on('agama')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peserta');
    }
}
