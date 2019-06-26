@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">
            Tambah Donasi
        </h3>
        <h3 class="box-title pull-right">
            <a href="{{route('donasi')}}" class="btn btn-info">
                Kembali
            </a>
        </h3>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="col-md-6">
                <form action={{route('donasi.store')}} method="post">
                    @csrf
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control" id="tanggal" required>
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah</label>
                        <input class="form-control" type="number" name="jumlah" id="jumlah" min="0" required>
                    </div>
                    <div class="form-group">
                        <label for="donatur">Donatur</label>
                        <select class="form-control" name="donatur" id="donatur">
                            @foreach ($donatur as $item)
                                <option value="{{$item->id}}">
                                    {{$item->nama}}
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
