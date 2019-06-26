<?php

namespace App\Http\Controllers;

use App\Donasi;
use App\Donatur;
use Illuminate\Http\Request;

class DonasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donasis = Donasi::All();
        $donasis->each(function($item) {
            return $item->donatur;
        });

        return view('vendor.adminlte.admin.donasi.index', [
            'donasi' => $donasis
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $donaturs = Donatur::All();

        return view('vendor.adminlte.admin.donasi.create', [
            'donatur' => $donaturs
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $findDonatur = Donatur::find($request->donatur);
        if ($findDonatur==null) {
            return abort(404);
        }

        try {
            $findDonatur->donasi()->create([
                'tanggal' => $request->tanggal,
                'jumlah' => $request->jumlah,
            ]);
        } catch (\Throwable $th) {
            dd($th);
            return abort(500,$th);
        }

        return redirect()->route('donatur.edit', $request->donatur);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Donasi  $donasi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Donasi  $donasi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $donasi = Donasi::find($id);

        return view('vendor.adminlte.admin.donasi.edit', [
            'donasi' => $donasi,
            'donatur' => $donasi->donatur
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Donasi  $donasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $findDonasi = Donasi::find($id);

        try {
            $findDonasi->update([
                'tanggal' => $request->tanggal,
                'jumlah' => $request->jumlah,
            ]);
        } catch (\Throwable $th) {
            return abort(500, $th);
        }

        return redirect()->route('donasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Donasi  $donasi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Donasi::destroy($id);
        } catch (\Throwable $th) {
            return abort(500, $th);
        }

        return redirect()->route('donatur');
    }
}
