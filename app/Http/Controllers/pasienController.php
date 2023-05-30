<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class pasienController extends Controller
{
    // method untuk menampilkan 
    public function index()
    {
        $pasiens = Pasien::all();
        return view('Admin.pasien.index', [
            'pasiens' => $pasiens
        ]);
    }

    public function create()
    {
        return view('Admin.pasien.create');
    }

    public function store(Request $request)
    {
        // insert data ke table pasiens 
        Pasien::create([
            // field di table => nilai yang ingin di isi
            'nama' => $request->nama,
            'jk' => $request->jk,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'telp' => $request->telp
        ]);
        return redirect('/pasien');
    }
}
