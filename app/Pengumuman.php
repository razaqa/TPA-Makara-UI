<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{

    protected $table = 'pengumuman';

    protected $fillable = [
        'judul','deskripsi','kelas','tanggal','jenis'
    ];
}
