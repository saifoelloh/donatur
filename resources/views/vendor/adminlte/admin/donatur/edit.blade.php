@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<div class="row">
    <div class="col-md-6">
        <h3>Edit Donatur<h3>
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
                <form action={{route('donatur.update', $donatur->id)}} method="post">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" value="{{$donatur->nama}}" name="nama" class="form-control" id="nama" required placeholder="Nama terang">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" value="{{$donatur->alamat}}" name="alamat" class="form-control" id="alamat" required placeholder="Alamat lengkap">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" value="{{$donatur->email}}" name="email" class="form-control" id="email" required placeholder="Email aktif">
                    </div>
                    <div class="form-group">
                        <label for="status">Email</label>
                        <select class="form-control" name="status" id="status">
                            @foreach ($donatur->status() as $status)
                                <option value="{{$status}}" {{$donatur->status==$status ? 'selected' : '' }}>
                                    {{ucwords($status)}}
                                </option>
                            @endforeach
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
