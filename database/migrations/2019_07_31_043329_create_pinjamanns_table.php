<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePinjamannsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pinjamanns', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_pinjaman');
            $table->integer('anggotas_id');
            $table->integer('besar_pinjaman');
            $table->date('tgl_pengajuan_pinjaman');
            $table->date('tgl_acc_pinjaman');
            $table->date('tgl_pinjaman');
            $table->date('tgl_pelunasan');
            $table->integer('angsurans_id');
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
        Schema::dropIfExists('pinjamanns');
    }
}
