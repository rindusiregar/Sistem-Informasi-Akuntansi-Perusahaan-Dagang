<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembelianController extends Controller
{
    public function index()
    {
        $data_pembelian = \App\pembelian::all();
        return view('pembelian.index',['data_pembelian' => $data_pembelian]);
    }
    public function create(Request $request)
    {
        \App\pembelian::create($request->all());
        return redirect('/pembelian')->with('sukses', 'Data Berhasil Dibuat');
    }
}
