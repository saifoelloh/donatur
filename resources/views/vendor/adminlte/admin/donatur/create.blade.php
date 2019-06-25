@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<div class="row">
    <div class="col-md-6">
        <h3>Tambah Donatur<h3>
    </div>
    <div class="col-md-6 text-right">
        <h3>
            <a class="btn btn-info" href={{route('donatur')}}>
                Kembali
            </a>
        </h3>
    </div>
</div>
@stop
@section('content')
<div class="box box-primary">
    <div class="box-body">
        <div class="row">
            <div class="col-md-6">
                <form action={{route('donatur.store')}} method="post">
                    @csrf
                    <div class="form-group">
                        <label for="namaAnak">Nama</label>
                        <input type="text" name="nama" class="form-control" id="namaAnak" required placeholder="Nama Terang">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control" type="email" name="email" id="email" placeholder="Email aktif" required>
                    </div>
                    <div class="form-group">
                        <label for="alamatAnak">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="alamatAnak" required placeholder="Alamat Lengkap">
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control" name="status" id="status">
                            <option value="tetap">Tetap</option>
                            <option value="tidak tetap">Tidak Tetap</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-warning">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
