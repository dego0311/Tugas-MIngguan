<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
       private static $data_berita = [
        [
        "judul" => "Prodi Teknologi Informasi Lolos PPK Ormawa 2026",
        "slug" => "Prodi-Teknologi-Informasi-Lolos-PPK-Ormawa-2026",
        "penulis" => "Dempo",
        "konten" => "Teknologi Informasi Adalah Prodi Baru Yang Sudah Bisa Lolos PPK Ormawa 2026."
        ],
        
        [
        "judul" => "Unimus Bagi-Bagi Takjil Gratis",
        "slug" => "Unimus-Bagi-Bagi-Takjil-Gratis",
        "penulis" => "Naurah",
        "konten" => "Unimus Berbagi Takjil Gratis Selama Bulan Ramadhan."
        ]
    ];

    public static function ambildata()
    {
        return Self:: $data_berita;
    }

    public static function caridata ($slug)
    {
        $data_beritas = Self:: $data_berita;

            $new_berita = [];
    foreach($data_beritas as $berita)
    {
        if ($berita["slug"] === $slug)
        {
            $new_berita = $berita;
        }
    }

    return $new_berita;

    }
}