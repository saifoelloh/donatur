@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<div class="row">
    <div class="col-md-6">
        <h3>Edit Donatur<h3>
    </div>
    <div class="col-md-6 text-right">
        <h3>
            <a class="btn btn-info" href="{{route('donatur')}}">
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
<div class="box box-success">
    <div class="box-header">
        <h3 class="box-title">
            List Donasi
        </h3>
        <h3 class="box-title pull-right">
            <a class="btn btn-info" href="{{route('donasi.create')}}">
                Tambah Donasi
            </a>
        </h3>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="col-md-12">
                <table class="data-table table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">Id</th>
                            <th class="text-center">Tanggal</th>
                            <th class="text-center">Jumlah</th>
                            <th class="text-center">Tindakan</th>
                        </tr>
                    <thead>
                </table>
            </div>
        </div>
    </div>
</div>
@stop

@section('js')
    <script>
        $(document).ready(function () {
            $('.data-table').dataTable({
                data: {!! $donasis !!},
                columns: [
                    {
                        data: 'id',
                        render: function(data) {
                            return '<p class="text-center p-0 m-0">'+data+'</p>';
                        }
                    },
                    {
                        data: 'tanggal',
                        render: function(data) {
                            return '<p class="text-center p-0 m-0">'+data+'</p>';
                        }
                    },
                    {
                        data: 'jumlah',
                        render: function(data) {
                            const result = 'Rp. '+data;
                            return '<p class="text-center p-0 m-0">'+result+'</p>';
                        }
                    },
                    {
                        data: 'id',
                        render: function(data) {
                            const link = 'http://localhost:8000/admin/donasi/'+data;
                            const detail = '<a class="btn btn-primary btn-xs" style="margin: 0 3px" href="'+link+'">detail</a>';
                            const hapus = '<form role="form" action="'+link+'" style="margin: 0 3px;display: inline" method="POST">@method("DELETE")@csrf<button class="btn btn-danger btn-xs">delete</button></form>';
                            return '<div class="text-center">'+detail+hapus+'</div>';
                        }
                    },
                ]
            });
        });
    </script>
@stop
