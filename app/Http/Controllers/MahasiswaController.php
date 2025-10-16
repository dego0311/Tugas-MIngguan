<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiwa;

class MahasiswaController extends Controller
{
    public function index(): Factory|View
    {
         return view('mahasiswa', data: [
            "title" => "Data Mahasiswa"
        ]);
    }
}
