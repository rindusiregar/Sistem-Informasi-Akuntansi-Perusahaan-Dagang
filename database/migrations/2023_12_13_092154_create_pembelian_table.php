<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembelianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembelian', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_supplier')->unsigned()->constrained('supplier');
            $table->string('nama_supplier', 50);
            $table->integer('id_barang')->unsigned()->constrained('barang');
            $table->string('nama_barang', 20);
            $table->string('jumlah_beli', 20);
            $table->double('harga_beli');
            $table->date('tgl_beli');
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
        Schema::dropIfExists('pembelian');
    }
}
