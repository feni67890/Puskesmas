<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    // hubungan model ke table pasiens
    protected $table = 'pasiens';

    // menyebutkan field yan boleh di isi
    protected $fillable = ['nama', 'jk', 'tgl_lahir', 'alamat', 'telp'];
}
