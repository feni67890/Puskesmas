<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    // method untuk menampilkan 
    public function index()
    {
        $dokters = Dokter::all();
        return view('Admin.dokter.index', [
            'dokters' => $dokters
        ]);
    }

    public function create()
    {
        return view('Admin.dokter.create');
    }
    public function store(Request $request)
    {
        // insert data ke table dokters 
        Dokter::create([
            // field di table => nilai yang ingin di isi
            'nama' => $request->nama,
            'spesialis' => $request->spesialis,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'telp' => $request->telp
        ]);
        return redirect('/dokter');
    }
}
