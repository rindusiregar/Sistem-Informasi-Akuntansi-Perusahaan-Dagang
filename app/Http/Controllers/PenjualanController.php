<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function index()
    {
        $data_penjualan = \App\penjualan::all();
        return view('penjualan.index',['data_penjualan' => $data_penjualan]);
    }

    public function create(Request $request)
    {
        \App\penjualan::create($request->all());
        return redirect('/penjualan')->with('sukses', 'Data Berhasil Dibuat');
    }
}
