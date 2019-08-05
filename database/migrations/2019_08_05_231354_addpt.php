<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Addpt extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('alat', function (Blueprint $table) {
            $table->unsignedInteger('jenis_id')->nullable();
            $table->string('satuan')->nullable();
            $table->string('pt')->nullable();

            $table->foreign('jenis_id')->references('id')->on('jenis')->onUpdate('cascade')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('alat', function (Blueprint $table) {
            $table->dropForeign(['jenis_id']);
            $table->dropColumn('pt');
            $table->dropColumn('satuan');
            $table->dropColumn('jenis_id');
        });
    }
}
