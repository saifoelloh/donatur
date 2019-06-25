<?php

namespace App\Http\Controllers;

use App\AnakAsuh;
use Illuminate\Http\Request;

class AnakAsuhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = AnakAsuh::All();

        return view('vendor.adminlte.admin.anak-asuh.index', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vendor.adminlte.admin.anak-asuh.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $findAnak = AnakAsuh::where('nik', $request->nik)->get();
        if (sizeof($findAnak)!=0) {
            return abort(400);
        }

        try {
            AnakAsuh::create([
                'nik' => $request->nik,
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'no_telp' => $request->no_telp,
                'gender' => $request->gender,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'pendidikan' => $request->pendidikan,
                'status' => $request->status,
                'tanggal_masuk' => $request->tanggal_masuk,
            ]);
        } catch (\Throwable $th) {
            return $th;
        }

        return redirect()->route('anak-asuh');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AnakAsuh  $anakAsuh
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AnakAsuh  $anakAsuh
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $findAnak = AnakAsuh::find($id);

        return view('vendor.adminlte.admin.anak-asuh.edit', [
            'anak' => $findAnak,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AnakAsuh  $anakAsuh
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $findAnak = AnakAsuh::find($id);
        if ($findAnak==null) {
            return abort(404);
        }

        try {
            $findAnak->update([
                'nik' => $request->nik,
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'no_telp' => $request->no_telp,
                'gender' => $request->gender,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'pendidikan' => $request->pendidikan,
                'status' => $request->status,
                'tanggal_masuk' => $request->tanggal_masuk,
            ]);
        } catch (\Throwable $th) {
            return abort(500,$th);
        }

        return redirect()->route('anak-asuh');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AnakAsuh  $anakAsuh
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            AnakAsuh::destroy($id);
        } catch (\Throwable $th) {
            return abort(500, $th);
        }

        return redirect()->route('anak-asuh');
    }
}
