<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    public static function getAll()
    {
        return [
            ['nama' => 'Udin', 'jk' => 'l', 'tgl_lahir' => '12/06/2022', 'alamat' => 'Bogor', 'telp' => '081234567890'],
            ['nama' => 'siti', 'jk' => 'p', 'tgl_lahir' => '01/07/2003', 'alamat' => 'Depok', 'telp' => '081234567890'],
            ['nama' => 'Budi', 'jk' => 'l', 'tgl_lahir' => '02/01/2000', 'alamat' => 'jakarta', 'telp' => '081234567890'],
        ];
    }
}
