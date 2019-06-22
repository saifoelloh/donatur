<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnakAsuh extends Model
{
    protected $fillable = [
        'nik',
        'nama',
        'alamat',
        'no_telp',
        'gender',
        'tempat_lahir',
        'tangal_lahir',
        'pendidikan',
        'status',
        'tanggal_masuk',
    ];
}
