<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donatur extends Model
{
    protected $fillable = [
        'nama',
        'email',
        'alamat',
        'status',
    ];

    public function status() {
        return ['tetap', 'tidak tetap'];
    }
}
