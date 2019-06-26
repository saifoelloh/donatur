@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">
                    Edit Donasi
                </h3>
                <h3 class="box-title pull-right">
                    <a href="{{route('donasi')}}" class="btn btn-info">
                        Kembali
                    </a>
                </h3>
            </div>
            <div class="box-body">
                <form action={{route('donasi.update', $donasi->id)}} method="post">
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control" id="tanggal" value="{{$donasi->tanggal}}" required>
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah</label>
                        <input class="form-control" type="number" name="jumlah" id="jumlah" min="0" value="{{$donasi->jumlah}}" required>
                    </div>
                    <div class="form-group">
                        <label for="donatur">Donatur</label>
                        <select class="form-control" name="donatur" id="donatur" disabled>
                            <option value="{{$donatur->id}}">
                                {{$donatur->nama}}
                            </option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-warning">Cancel</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="box box-info">
            <div class="box-header">
                <h3 class="box-title">
                    Detail Pembayaran
                </h3>
            </div>
            <div class="box-body">
                <form>
                    <div class="form-group">
                        <label for="pendidikan">Pendidikan</label>
                        <input class="form-control" type="text" name="pendidikan" value="{{$biaya->pendidikan}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="pangan">Pangan</label>
                        <input class="form-control" type="text" name="pangan" value="{{$biaya->pangan}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="sandang">Sandang</label>
                        <input class="form-control" type="text" name="sandang" value="{{$biaya->sandang}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="perlengkapan">Perlengkapan</label>
                        <input class="form-control" type="text" name="perlengkapan" value="{{$biaya->perlengkapan}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="administrasi">Administrasi</label>
                        <input class="form-control" type="text" name="administrasi" value="{{$biaya->administrasi}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="listrik">Listrik</label>
                        <input class="form-control" type="text" name="listrik" value="{{$biaya->listrik}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="kesehatan">Kesehatan</label>
                        <input class="form-control" type="text" name="kesehatan" value="{{$biaya->kesehatan}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="transportasi">Transportasi</label>
                        <input class="form-control" type="text" name="transportasi" value="{{$biaya->transportasi}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="bisyarohUstadz">Bisyaroh Ustadz</label>
                        <input class="form-control" type="text" name="bisyarohUstadz" value="{{$biaya->bisyarohUstadz}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="uangSaku">Uang Saku</label>
                        <input class="form-control" type="text" name="uangSaku" value="{{$biaya->uangSaku}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="hariRaya">Hari Raya</label>
                        <input class="form-control" type="text" name="hariRaya" value="{{$biaya->hariRaya}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="thr">THR</label>
                        <input class="form-control" type="text" name="thr" value="{{$biaya->thr}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="lainLain">Lain-lain</label>
                        <input class="form-control" type="text" name="lainLain" value="{{$biaya->lainLain}}" disabled>
                    </div>
                    <button class="btn btn-primary">
                        edit
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
