<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

    public static function getAll()
    {
        return [
            ['nama' => 'Udin', 'spesialis' => 'Jantung',  'alamat' => 'Bogor', 'telp' => '081234567890'],
            ['nama' => 'siti', 'spesialis' => 'Saraf', 'alamat' => 'Depok', 'telp' => '081234567890'],
            ['nama' => 'Budi', 'spesialis' => 'Anak', 'alamat' => 'jakarta', 'telp' => '081234567890'],
        ];
    }
}
