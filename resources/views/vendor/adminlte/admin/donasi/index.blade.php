@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">
                    Daftar Donasi
                </h3>
                <h3 class="box-title pull-right">
                    <a class="btn btn-info" href="{{route('donasi.create')}}">
                        Tambah Donasi
                    </a>
                </h3>
            </div>
            <div class="box-body">
                <table class="data-table table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">Id</th>
                            <th class="text-center">Tanggal</th>
                            <th class="text-center">Jumlah</th>
                            <th class="text-center">Donatur</th>
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
                data: {!! $donasi !!},
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
                            return '<p class="text-center p-0 m-0">'+data+'</p>';
                        }
                    },
                    {
                        data: 'donatur',
                        render: function(data) {
                            const link = '<a href="http://localhost:8000/admin/donatur/'+data.id+'">'+data.nama+'</a>';
                            return '<p class="text-center p-0 m-0">'+link+'</p>';
                        }
                    },
                    {
                        data: 'id',
                        render: function(data) {
                            const link = 'http://localhost:8000/admin/donasi/'+data;
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
