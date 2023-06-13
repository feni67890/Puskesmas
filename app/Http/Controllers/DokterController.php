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
    public function edit($id)
    {
        // mendapatkan dokter berdasarkan id
        $dokter =  Dokter::find($id);


        return view('Admin.dokter.edit', [
            'dokter' => $dokter

        ]);
    }
    // method untuk update dokter
    public function update($id, Request $request)
    {
        // Melakukan validasi data form
        $validatedData = $request->validate([
            'nama' => 'required | min:3',
            'spesialis' => 'required ',
            'tgl_lahir' => 'required | date',
            'alamat' => 'required|max:500',
            'telp' => 'required|numeric|digits_between:10,14',
        ]);

        // cari dokter yang akan di update
        $dokter = Dokter::find($id);

        // update dokter
        $dokter->update($validatedData);

        //kembalikan ke halaman daftar dokter 
        return redirect('/dokter')->with('success', 'Data  dokter berhasil di ubah');
    }

    // method untuk hapus dokter
    public function destroy(Request $request)
    {
        Dokter::destroy($request->id);

        // kembalikan kehalaman daftar pasien
        return redirect('/dokter')->with('success', 'Data dokter berhasil dihapus');
    }
}
