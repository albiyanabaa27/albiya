<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetugasKoprasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petugas_koprasis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('alamat');
            $table->integer('no_tlpn');
            $table->date('tgl_lahir');
            $table->string('tmp_lahir');
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
        Schema::dropIfExists('petugas_koprasis');
    }
}
