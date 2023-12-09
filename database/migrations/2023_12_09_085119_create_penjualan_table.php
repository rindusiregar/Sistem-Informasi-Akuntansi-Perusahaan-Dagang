<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjualanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualan', function (Blueprint $table) {
            $table->id();
            $table->integer('id_barang')->unsigned();
            $table->string('nama_barang', 50);
            $table->integer('jumlah_terjual');
            $table->integer('total_bayar');
            $table->integer('keuntungan');
            $table->string('nama_pembeli');
            $table->date('tgl_jual');
            $table->string('alamat');
            $table->timestamps();

            $table->foreign('id_barang')->references('id')->on('barang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penjualan');
    }
}
