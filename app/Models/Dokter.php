<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

    // hubungkan model ke table dokter
    protected $table = '_dokters';

    // menyebutkan field yang boleh di isi
    protected $fillable = ['nama', 'spesialis', 'tgl_lahir', 'alamat', 'telp'];
}
