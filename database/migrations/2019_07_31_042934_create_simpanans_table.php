<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSimpanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('simpanans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_simpanan');
            $table->unsignedBigInteger('anggotas_id');
            $table->date('tgl_simpanan');
            $table->integer('besar_simpanan');
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
        Schema::dropIfExists('simpanans');
    }
}
