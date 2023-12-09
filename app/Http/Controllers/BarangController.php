<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $data_barang = \App\barang::all();
        return view('barang.index',['data_barang' => $data_barang]);
    }

    public function create(Request $request)
    {
        \App\barang::create($request->all());
        return redirect('/barang')->with('sukses', 'Data Berhasil Dibuat');
    }

    public function edit($id)
    {
        $barang = \App\barang::find($id);
        return view('barang/edit',['barang' => $barang]);
    }

    public function update(Request $request,$id)
    {
        $barang = \App\barang::find($id);
        $barang->update($request->all());
        return redirect('/barang')->with('sukses','Data berhasil diedit');
    }
}
