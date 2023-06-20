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

    // menghubungkan ke model pasien 
    // 1 dokter dapat menangani banyak pasien 

    public function pasien()
    {
        // karena dokter menitipkan id ke pasien,
        // maka dokter menghubungkan menggunakan has + kardinalitas 
        // kardinalitas 1 to M dari model ini ke model lain: hasmany
        // 1 to 1 model lain: hasone 
        return $this->hasMany(pasien::class);
    }
}
