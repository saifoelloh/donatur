@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<div class="row">
    <div class="col-md-6">
        <h3>Anak Asuh<h3>
    </div>
    <div class="col-md-6 text-right">
        <h3>
            <a class="btn btn-info" href={{route('anak-asuh')}}>
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
                <form action={{route('anak-asuh.create')}} method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nikAnak">NIK</label>
                        <input type="text" name="nama" class="form-control" id="nikAnak" placeholder="NIK">
                    </div>
                    <div class="form-group">
                        <label for="namaAnak">Nama</label>
                        <input type="text" name="nama" class="form-control" id="namaAnak" placeholder="Nama Terang Anak">
                    </div>
                    <div class="form-group">
                        <label for="alamatAnak">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="alamatAnak" placeholder="Alamat Anak">
                    </div>
                    <div class="form-group">
                        <label for="noTelpAnak">No Telp</label>
                        <input type="text" name="no_telp" class="form-control" id="noTelpAnak" placeholder="Nama Terang Anak">
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select class="form-control" name="gender" id="gender">
                            <option value="laki-laki">Laki-laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir">
                    </div>
                    <div class="form-group">
                        <label for="pendidikan">Pendidikan</label>
                        <select class="form-control" name="gender" id="gender">
                            <option value="tk">TK</option>
                            <option value="sd">SD</option>
                            <option value="smp">SMP</option>
                            <option value="sma">SMA</option>
                            <option value="pti">PTI</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <input type="text" class="form-control" name="status" id="status">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_masuk">Tanggal Masuk</label>
                        <input type="date" class="form-control" name="tanggal_masuk" id="tanggal_masuk">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-warning">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
