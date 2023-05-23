<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class pasienController extends Controller
{
    public function index()
    {
        $pasiens = Pasien::getAll();
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
        dd($request->all());
    }
}
