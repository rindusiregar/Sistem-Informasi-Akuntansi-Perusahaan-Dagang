<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    protected $table = 'supplier';
    protected $fillable = ['id','nama_supplier','alamat','telepon','email','updated_at','created_at'];
}
