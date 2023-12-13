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
                        <div class="panel" style="background-color: #ff9999">
								<div class="panel-heading">
                                    <h1 class="display-2 text-success"><i class="fa fa-credit-card"></i> Pembelian</h1>
                                    <div class="right">
                                        <button type="button" style="background-color: #32cd32" class="btn" data-toggle="modal" data-target="#exampleModal"> Tambah Data </button>
                                    </div>
                                        
								</div>
								<div class="panel-body">
									<table class="table table-hover" style="color: #000000">
										<thead>
                                        <tr class="table-warning">
                                            <th>ID</th>
                                            <th>ID SUPPLIER</th>
                                            <th>NAMA SUPPLIER</th>
                                            <th>ID BARANG</th>
                                            <th>NAMA BARANG</th>
                                            <th>JUMLAH BELI</th>
                                            <th>HARGA BELI</th>
                                            <th>TANGGAL BELI</th>
                                        </tr>
										</thead>
										<tbody>
                                        @foreach($data_pembelian as $pembelian)
                                        <tr>
                                            <td>{{$pembelian->id}}</td>
                                            <td>{{$pembelian->id_supplier}}</td>
                                            <td>{{$pembelian->nama_supplier}}</td>
                                            <td>{{$pembelian->id_barang}}</td>
                                            <td>{{$pembelian->nama_barang}}</td>
                                            <td>{{$pembelian->jumlah_beli}}</td>
                                            <td>{{$pembelian->harga_beli}}</td>
                                            <td>{{$pembelian->tgl_beli}}</td>
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
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data pembelian</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <form  action="/pembelian/create"  method="POST">
                                {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleInpuTID1">ID</label>
                                <input name="id" type="ID" class="form-control" id="exampleInputID1" aria-describedby="emailHelp" placeholder="ID Pembelian">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputNama1">ID Suppplier</label>
                                <input name="id_supplier" type="text" class="form-control" id="exampleInputID_Supplier1" placeholder="ID Supplier">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputNama1">Nama Supplier</label>
                                <input name="nama_supplier" type="text" class="form-control" id="exampleInputNama_supplier1" placeholder="Nama Supplier ">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputNama1">ID Barang</label>
                                <input name="id_barang" type="text" class="form-control" id="exampleInputID_Barang1" placeholder="ID Barang">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputNama1">Nama Barang</label>
                                <input name="nama_barang" type="text" class="form-control" id="exampleInputNama_barang1" placeholder="Nama Barang">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputNama1">Jumlah Beli</label>
                                <input name="jumlah_beli" type="number" class="form-control" id="exampleInputJumlah_beli1" placeholder="Jumlah Pembelian">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputNama1">Harga Beli</label>
                                <input name="harga_beli" type="price" class="form-control" id="exampleInputHarga_beli1" placeholder="Harga Pembelian">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputTanggal1">Tanggal Beli</label>
                                <input name="tgl_beli" type="date" class="form-control" id="exampleInputTanggal1" placeholder="Tanggal pembelian">
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


