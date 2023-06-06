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
        // Melakukan validasi data form
        $request->validate([
            'nama' => 'required | min:3',
            'jk' => 'required ',
            'tgl_lahir' => 'required | date',
            'alamat' => 'required|max:500',
            'telp' => 'required|numeric|digits_between:10,14',
        ]);

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
    public function edit($id)
    {
        // mendapatkan pasien berdasarkan id
        $pasien = Pasien::find($id);


        return view('Admin.pasien.edit', [
            'pasien' => $pasien
        ]);
    }

    // method untuk update pasien 
    public function update($id, Request $request)
    {
        // Melakukan validasi data form
        $validatedData = $request->validate([
            'nama' => 'required | min:3',
            'jk' => 'required ',
            'tgl_lahir' => 'required | date',
            'alamat' => 'required|max:500',
            'telp' => 'required|numeric|digits_between:10,14',
        ]);

        // cari pasien yang akan di update
        $pasien = pasien::find($id);

        // update pasien
        $pasien->update($validatedData);

        //kembalikan ke halaman daftar pasien 
        return redirect('/pasien')->with('success', 'Data pasien berhasil di ubah');
    }

    // method untuk hapus pasien
    public function destroy(Request $request)
    {
        pasien::destroy($request->id);

        // kembalikan kehalaman daftar pasien
        return redirect('/pasien')->with('success', 'Data pasien berhasil dihapus');
    }
}
