<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penjualan extends Model
{
    protected $table = 'penjualan';
    protected $fillable = ['id','id_barang','nama_barang','jumlah_terjual','total_bayar','keuntungan','nama_pembeli','tgl_jual','alamat','updated_at','created_at'];
}
