<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MahasiswaController extends Controller
{
    public function index()
    {
        return view('mahasiswa.mahasiswa', [
            'mahasiswas' => Mahasiswa::all(),
        ]);
    }

    public function create()
    {
        return view('mahasiswa.mahasiswaCreate', [
            'fakultas' => Fakultas::all(),
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'npm' => 'required|max:9',
            'alamat' => 'required',
            'fakultas_id' => 'required'
        ]);

        Mahasiswa::create([
            'name' => $request->name,
            'npm' => $request->npm,
            'alamat' => $request->alamat,
            'fakultas_id' => $request->fakultas_id
        ]);

        return redirect('/mahasiswa')->with('success', "TAMBAH DATA BERHASIL");
    }
}
