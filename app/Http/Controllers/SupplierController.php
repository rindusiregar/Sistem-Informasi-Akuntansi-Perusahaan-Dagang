<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $data_supplier = \App\supplier::all();
        return view('supplier.index',['data_supplier' => $data_supplier]);
    }

    public function create(Request $request)
    {
        \App\supplier::create($request->all());
        return redirect('/supplier')->with('sukses', 'Data Berhasil Dibuat');
    }
}
