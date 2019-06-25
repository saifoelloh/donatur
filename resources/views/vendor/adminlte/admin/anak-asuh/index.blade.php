@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<div class="row">
    <div class="col-md-6">
        <h3>Anak Asuh<h3>
    </div>
    <div class="col-md-6 text-right">
        <h3>
            <a class="btn btn-info" href={{route('anak-asuh.create')}}>
                Tambah Anak Asuh
            </a>
        </h3>
    </div>
</div>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-body">
                <table class="data-table table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">Id</th>
                            <th class="text-center">NIK</th>
                            <th class="text-center">Nama</th>
                            <th class="text-center">No Telp</th>
                            <th class="text-center">Alamat</th>
                            <th class="text-center">Pendidikan</th>
                            <th class="text-center">Gender</th>
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
                data: {!! $data !!},
                columns: [
                    {
                        data: 'id',
                        render: function(data) {
                            return '<p class="text-center p-0 m-0">'+data+'</p>';
                        }
                    },
                    {
                        data: 'nik',
                        render: function(data) {
                            return '<p class="text-center p-0 m-0">'+data+'</p>';
                        }
                    },
                    {
                        data: 'nama',
                        render: function(data) {
                            return '<p class="text-center p-0 m-0">'+data+'</p>';
                        }
                    },
                    {
                        data: 'no_telp',
                        render: function(data) {
                            return '<p class="text-center p-0 m-0">'+data+'</p>';
                        }
                    },
                    {
                        data: 'alamat',
                        render: function(data) {
                            return '<p class="text-center p-0 m-0">'+data+'</p>';
                        }
                    },
                    {
                        data: 'pendidikan',
                        render: function(data) {
                            return '<p class="text-center p-0 m-0">'+data+'</p>';
                        }
                    },
                    {
                        data: 'gender',
                        render: function(data) {
                            return '<p class="text-center p-0 m-0">'+data+'</p>';
                        }
                    },
                    {
                        data: 'id',
                        render: function(data) {
                            const link = 'http://localhost:8000/admin/anak-asuh/'+data;
                            const edit = '<a class="btn btn-primary btn-xs" style="margin: 0 3px" href="'+link+'">edit</a>';
                            const hapus = '<form role="form" action="'+link+'" style="margin: 0 3px;display: inline" method="POST">@method("DELETE")@csrf<button class="btn btn-danger btn-xs">delete</button></form>';
                            return '<div class="text-center">'+edit+hapus+'</div>';
                        }
                    },
                ]
            });
        });
    </script>
@stop
