<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MahasiswaController extends Controller
{
    public function index()
    {
        return view('mahasiswa', [
            'mahasiswas' => Mahasiswa::all(),
        ]);
    }
}
