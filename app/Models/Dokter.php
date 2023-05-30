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
            ['nama' => 'erica', 'spesialis' => 'kecantikan',  'alamat' => 'Bogor', 'telp' => '081234567890'],
            ['nama' => 'juliet', 'spesialis' => 'kulit', 'alamat' => 'Depok', 'telp' => '081234567890'],
            ['nama' => 'bilqis', 'spesialis' => 'hati', 'alamat' => 'jakarta', 'telp' => '081234567890'],
        ];
    }
}
