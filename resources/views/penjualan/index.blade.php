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
                                    <h1 class="display-2 text-success"><i class="lnr lnr-cart"></i> Penjualan</h1>
                                    <div class="right">
                                        <button type="button" style="background-color: #32cd32" class="btn" data-toggle="modal" data-target="#exampleModal"> Tambah Data </i></button>
                                    </div>
                                        
								</div>
								<div class="panel-body">
									<table class="table table-hover" style="color: #000000">
										<thead>
                                        <tr class="table-warning">
                                            <th>ID</th>
                                            <th>ID BARANG</th>
                                            <th>NAMA BARANG</th>
                                            <th>JUMLAH TERJUAL</th>
                                            <th>TOTAL BAYAR</th>
                                            <th>KEUNTUNGAN</th>
                                            <th>NAMA PEMBELI</th>
                                            <th>TANGGAL BELI</th>
                                            <th>ALAMAT</th>
                                        </tr>
										</thead>
										<tbody>
                                        @foreach($data_penjualan as $penjualan)
                                        <tr>
                                            <td>{{$penjualan->id}}</td>
                                            <td>{{$penjualan->id_barang}}</td>
                                            <td>{{$penjualan->nama_barang}}</td>
                                            <td>{{$penjualan->jumlah_terjual}}</td>
                                            <td>{{$penjualan->total_bayar}}</td>
                                            <td>{{$penjualan->keuntungan}}</td>
                                            <td>{{$penjualan->nama_pembeli}}</td>
                                            <td>{{$penjualan->tgl_jual}}</td>
                                            <td>{{$penjualan->alamat}}</td>
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
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data penjualan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <form  action="/penjualan/create"  method="POST">
                                {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleInpuTID1">ID</label>
                                <input name="id" type="ID" class="form-control" id="exampleInputID1" aria-describedby="emailHelp" placeholder="ID penjualan">
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
                                <label for="exampleInputNama1">Jumlah Terjual</label>
                                <input name="jumlah_terjual" type="number" class="form-control" id="exampleInputJumlah_terjual1" placeholder="Jumlah Terjual">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputNama1">Total Bayar</label>
                                <input name="total_bayar" type="price" class="form-control" id="exampleInputTotal_bayar1" placeholder="Total Bayar">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputNama1">Keuntungan</label>
                                <input name="keuntungan" type="price" class="form-control" id="exampleInputKeuntungan1" placeholder="Keuntungan">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputNama1">Nama Pembeli</label>
                                <input name="nama_pembeli" type="price" class="form-control" id="exampleInputNama_pembeli1" placeholder="Nama Pembeli">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputTanggal1">Tanggal Jual</label>
                                <input name="tgl_jual" type="date" class="form-control" id="exampleInputTgl_jual1" placeholder="Tanggal Penjualan">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputTanggal1">Alamat</label>
                                <input name="alamat" type="text" class="form-control" id="exampleInputAlamat1" placeholder="Alamat Pembeli">
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


