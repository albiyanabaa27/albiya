<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAngsuransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('angsurans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('kategori_pinjamens_id');
            $table->unsignedBigInteger('anggotas_id');
            $table->date('tgl_pembayaran');
            $table->integer('angsuran_ke');
            $table->integer('besar_angsuran');
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
        Schema::dropIfExists('angsurans');
    }
}
