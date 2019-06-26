<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donasi extends Model
{
    protected $fillable = [
        'tanggal',
        'jumlah',
    ];

    public function donatur() {
        return $this->belongsTo(Donatur::class);
    }

    public function biaya() {
        return $this->hasOne(Biaya::class);
    }
}
