<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    protected $table = 'barang';
    protected $fillable = ['id','nama_barang','harga_beli','harga_jual','stok_tersedia','id_supplier','updated_at','created_at'];
}
