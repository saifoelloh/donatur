<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biaya extends Model
{
    protected $fillable = [
        'pendidikan',
        'pangang',
        'sandang',
        'perlengkapan',
        'administrasi',
        'listrik',
        'kesehatan',
        'transportasi',
        'bisyarohUstadz',
        'uangSaku',
        'hariRaya',
        'thr',
        'lainLain',
    ];

    public function donasi() {
        return $this->belongsTo(Donasi::class);
    }
}
