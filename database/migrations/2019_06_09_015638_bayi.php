<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bayi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bayi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hari');
            $table->date('tanggal');
            $table->time('waktu');
            $table->string('tempat');
            $table->string('jkel',20);
            $table->integer('anak_ke');
            $table->string('jenis_lahir');
            $table->string('kewarganegaraan');
            $table->string('nik_ibu');
            $table->string('nama_ibu');
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
        Schema::dropIfExists('bayi');
    }
}
