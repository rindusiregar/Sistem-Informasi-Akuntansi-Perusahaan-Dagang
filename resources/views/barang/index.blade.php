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
                                    <h1 class="display-2 text-success"><i class="fa fa-database"></i> Barang</h1>
                                    <div class="right">
                                        <button type="button" style="background-color: #32cd32" class="btn" data-toggle="modal" data-target="#exampleModal"> Tambah Data </i></button>
                                    </div>
                                        
								</div>
								<div class="panel-body">
									<table class="table table-hover" style="color: #000000">
										<thead>
                                        <tr class="table-warning">
                                            <th>ID</th>
                                            <th>NAMA BARANG</th>
                                            <th>HARGA BELI</th>
                                            <th>HARGA JUAL</th>
                                            <th>STOK</th>
                                            <th>ID SUPPLIER</th>
                                            <th>AKSI</th>
                                        </tr>
										</thead>
										<tbody>
                                        @foreach($data_barang as $barang)
                                        <tr>
                                            <td>{{$barang->id}}</td>
                                            <td>{{$barang->nama_barang}}</td>
                                            <td>{{$barang->harga_beli}}</td>
                                            <td>{{$barang->harga_jual}}</td>
                                            <td>{{$barang->stok_tersedia}}</td>
                                            <td>{{$barang->id_supplier}}</td>
                                            <td><a href="/barang/{{$barang->id}}/edit" class="btn btn-warning btn-sm">Edit</a></td>
                                        </tr>
                                        @endforeach
										</tbody>
									</table>
								</div>
							
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data barang</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <form  action="/barang/create"  method="POST">
                                {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleInpuTID1">ID</label>
                                <input name="id" type="ID" class="form-control" id="exampleInputID1" aria-describedby="emailHelp" placeholder="ID barang">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputNama1">Nama Barang</label>
                                <input name="nama_barang" type="text" class="form-control" id="exampleInputNama1" placeholder="Nama Barang">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputNama1">Harga Beli</label>
                                <input name="alamat" type="number" class="form-control" id="exampleInpuAlamat1" placeholder="Harga Beli">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputNama1">Stok</label>
                                <input name="nama_barang" type="number" class="form-control" id="exampleInputBarang1" placeholder="Jumlah Stok">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputNama1">ID Supplier</label>
                                <input name="nama_barang" type="id" class="form-control" id="exampleInputJumlah1" placeholder="ID Supplier">
                            </div>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                            </form>
                        </div>
                        </div>
                    </div>
                    </div>
@stop


