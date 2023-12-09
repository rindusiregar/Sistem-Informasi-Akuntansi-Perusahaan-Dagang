<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pembelian extends Model
{
    protected $table = 'pembelian';
    protected $fillable = ['id','id_supplier','nama_supplier','id_barang','nama_barang','jumlah_beli','harga_beli','tgl_beli','updated_at','created_at'];
}
