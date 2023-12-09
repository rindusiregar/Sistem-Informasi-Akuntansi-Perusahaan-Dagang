@extends('layouts.master')

@section('content')
<div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel" style="background-color:#ff9999">
								<div class="panel-heading">
                                    <h1 class="display-2 text-success"><i class="lnr lnr-users"></i> Supplier</h1>
                                    <div class="right">
                                        <button type="button" style="background-color: #32cd32" class="btn" data-toggle="modal" data-target="#exampleModal"> Tambah Data </i></button>
                                    </div>
                                        
								</div>
								<div class="panel-body">
									<table class="table table-hover" style="color: #000000">
										<thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>NAMA SUPPLIER</th>
                                                <th>ALAMAT</th>
                                                <th>TELEPON</th>
                                                <th>EMAIL</th>
                                            </tr>
										</thead>
										<tbody>
                                        @foreach($data_supplier as $supplier)
                                            <tr>
                                                <td>{{$supplier->id}}</td>
                                                <td>{{$supplier->nama_supplier}}</td>
                                                <td>{{$supplier->alamat}}</td>
                                                <td>{{$supplier->telepon}}</td>
                                                <td>{{$supplier->email}}</td>
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

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Supplier</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <form  action="/supplier/create"  method="POST">
                                {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleInpuTID1">ID</label>
                                <input name="id" type="ID" class="form-control" id="exampleInputID1" aria-describedby="emailHelp" placeholder="ID supplier">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputNama1">Nama Supplier</label>
                                <input name="nama_supplier" type="name" class="form-control" id="exampleInputNama_supplier1" placeholder="Nama supplier">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputNama1">Alamat</label>
                                <input name="alamat" type="address" class="form-control" id="exampleInputAlamat1" placeholder="Alamat supplier">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputNama1">Telepon</label>
                                <input name="telepon" type="phone" class="form-control" id="exampleInputTelepon1" placeholder="Telepon supplier">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputNama1">Email</label>
                                <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Email supplier">
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