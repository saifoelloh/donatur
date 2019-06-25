@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<div class="row">
    <div class="col-md-6">
        <h3>Donatur<h3>
    </div>
    <div class="col-md-6 text-right">
        <h3>
            <a class="btn btn-info" href={{route('donatur.create')}}>
                Tambah Donatur
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
                            <th class="text-center">Nama</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Alamat</th>
                            <th class="text-center">Status</th>
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
                data: {!! $donaturs !!},
                columns: [
                    {
                        data: 'id',
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
                        data: 'email',
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
                        data: 'status',
                        render: function(data) {
                            return '<p class="text-center p-0 m-0">'+data+'</p>';
                        }
                    },
                    {
                        data: 'id',
                        render: function(data) {
                            const link = 'http://localhost:8000/admin/donatur/'+data;
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
