<?php

namespace App\Http\Controllers;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index() 
    {
        $data = Mahasiswa::all();

          return view('mahasiswa', compact('data'), [
            "title" => "Data Mahasiswa",
        ]);
    }
}
