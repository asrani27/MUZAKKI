<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBapakPekerjaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ibuhamil', function (Blueprint $table) {
            $table->string('nama_ayah')->nullable()->default('-');
            $table->string('pekerjaan_ayah')->nullable()->default('-');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {  Schema::table('ibuhamil', function (Blueprint $table) {
        $table->dropColumn('pekerjaan_ayah');
        $table->dropColumn('nama_ayah');
    });
    }
}
