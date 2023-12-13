@extends('layouts.master')

@section('content')
    @if(session('sukses'))
        <div class="alert alert-success" role="alert">
            {{session('sukses')}}
        </div>
    @endif
    <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel" style="background-color:#ff9999">
								<div class="panel-heading">
                                    <h1 class="display-2 text-success"><i class="fa fa-database"></i> Edit Data Barang</h1>
                                        
								</div>
								<div class="panel-body">
									<table class="table table-hover" style="color: #000000">
                                    <form  action="/barang/{{$barang->id}}/update"  method="POST">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <label for="exampleInpuTID1">ID</label>
                                            <input name="id" type="ID" class="form-control" id="exampleInputID1" aria-describedby="emailHelp" placeholder="ID barang" value="{{$barang->id}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputNama1">Nama Barang</label>
                                            <input name="nama_barang" type="text" class="form-control" id="exampleInputNama_barang1" placeholder="Nama Barang" value="{{$barang->nama_barang}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputNama1">Harga Beli</label>
                                            <input name="harga_beli" type="number" class="form-control" id="exampleInputHarga_beli1" placeholder="Harga Beli" value="{{$barang->harga_beli}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputNama1">Harga Jual</label>
                                            <input name="harga_jual" type="number" class="form-control" id="exampleInputHarga_jual1" placeholder="Harga Jual" value="{{$barang->harga_jual}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputNama1">Stok</label>
                                            <input name="stok_tersedia" type="number" class="form-control" id="exampleInputStok1" placeholder="Jumlah Stok" value="{{$barang->stok_tersedia}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputNama1">ID Supplier</label>
                                            <input name="id_supplier" type="id" class="form-control" id="exampleInputID_Supplier1" placeholder="ID Supplier" value="{{$barang->id_supplier}}">
                                        </div>
                                        <button type="submit" class="btn btn-warning">Edit</button>
                                    </form>
									</table>
								</div>
							
                        </div>
                    </div>
                </div>
            </div>
    </div>
@stop