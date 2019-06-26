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
        //
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
    public function show(Donasi $donasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Donasi  $donasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Donasi $donasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Donasi  $donasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Donasi $donasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Donasi  $donasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donasi $donasi)
    {
        //
    }
}
