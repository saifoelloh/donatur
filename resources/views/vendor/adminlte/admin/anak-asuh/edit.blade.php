@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<div class="row">
    <div class="col-md-6">
        <h3>Edit Anak Asuh<h3>
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
                <form action={{route('anak-asuh.update', $anak->id)}} method="post">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="nikAnak">NIK</label>
                        <input type="text" value="{{$anak->nik}}" name="nik" class="form-control" id="nikAnak" required placeholder="NIK">
                    </div>
                    <div class="form-group">
                        <label for="namaAnak">Nama</label>
                        <input type="text" value="{{$anak->nama}}" name="nama" class="form-control" id="namaAnak" required placeholder="Nama Terang Anak">
                    </div>
                    <div class="form-group">
                        <label for="alamatAnak">Alamat</label>
                        <input type="text" value="{{$anak->alamat}}" name="alamat" class="form-control" id="alamatAnak" required placeholder="Alamat Anak">
                    </div>
                    <div class="form-group">
                        <label for="noTelpAnak">No Telp</label>
                        <input type="text" value="{{$anak->no_telp}}" name="no_telp" class="form-control" id="noTelpAnak" required placeholder="Nama Terang Anak">
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select class="form-control" name="gender" id="gender" required>
                            @foreach ($anak->gender() as $gender)
                                <option value="{{$gender}}" {{$anak->gender==$gender ? 'selected' : ''}}>
                                    {{ucwords($gender)}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" class="form-control" value={{$anak->tempat_lahir}} name="tempat_lahir" id="tempat_lahir" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" value={{$anak->tanggal_lahir}} name="tanggal_lahir" id="tanggal_lahir" required>
                    </div>
                    <div class="form-group">
                        <label for="pendidikan">Pendidikan</label>
                        <select class="form-control" name="pendidikan" id="pendidikan" required>
                            @foreach ($anak->pendidikan() as $pendidikan)
                                <option value="{{ $pendidikan}}" {{$anak->pendidikan==$pendidikan ? 'selected' : ''}}>
                                    {{strtoupper($pendidikan)}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <input type="text" class="form-control" value={{$anak->status}} name="status" id="status" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_masuk">Tanggal Masuk</label>
                        <input type="date" class="form-control" value={{$anak->tanggal_masuk}} name="tanggal_masuk" id="tanggal_masuk" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-warning">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
