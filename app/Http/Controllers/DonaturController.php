<?php

namespace App\Http\Controllers;

use App\Donatur;
use Illuminate\Http\Request;

class DonaturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donaturs = Donatur::All();

        return view('vendor.adminlte.admin.donatur.index', [
            'donaturs' => $donaturs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vendor.adminlte.admin.donatur.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $findDonatur = Donatur::where('email', $request->email)->get();
        if (sizeof($findDonatur)!=0) {
            return abort(400);
        }

        try {
            Donatur::create([
                'nama' => $request->nama,
                'email' => $request->email,
                'alamat' => $request->alamat,
                'status' => $request->status,
            ]);
        } catch (\Throwable $th) {
            return abort(500, $th);
        }

        return redirect()->route('donatur');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Donatur  $donatur
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Donatur  $donatur
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $findDonatur = Donatur::find($id);
        if ($findDonatur==null) {
            return abort(404);
        }

        return view('vendor.adminlte.admin.donatur.edit', [
            'donatur' => $findDonatur
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Donatur  $donatur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $findDonatur = Donatur::find($id);
        if ($findDonatur==null) {
            return abort(404);
        }

        try {
            $findDonatur->update([
                'nama' => $request->nama,
                'email' => $request->email,
                'alamat' => $request->alamat,
                'status' => $request->status,
            ]);
        } catch (\Throwable $th) {
            return abort(500, $th);
        }

        return redirect()->route('donatur');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Donatur  $donatur
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Donatur::destroy($id);
        } catch (\Throwable $th) {
            return abort(500, $th);
        }

        return redirect()->route('donatur');
    }
}
