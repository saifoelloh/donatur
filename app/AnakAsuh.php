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
        'tanggal_lahir',
        'pendidikan',
        'status',
        'tanggal_masuk',
    ];

    public function pendidikan() {
        return [
            'tk',
            'sd',
            'smp',
            'sma',
            'pti',
        ];
    }

    public function gender() {
        return [
            'laki-laki',
            'perempuan'
        ];
    }
}
