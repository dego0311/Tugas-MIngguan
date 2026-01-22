@extends('layouts.main')

@section('content')
<section class="hero position-relative">
    <div class="container">
        <div class="hero-inner text-center">

            <!-- Badge -->
            <span class="hero-badge mb-3 d-inline-block">
                ✨ Sistem Informasi Akademik Modern
            </span>

            <!-- Title -->
            <h1 class="hero-title fw-bold">
                Welcome to <span class="text-primary">DEGO KEREN</span>
            </h1>

            <!-- Subtitle -->
            <p class="hero-sub mt-4">
                Platform manajemen data mahasiswa berbasis Laravel dengan arsitektur modern, aman, dan profesional. 
                Kelola data akademik Anda dengan mudah dan efisien.
            </p>

            <!-- CTA Buttons -->
            <div class="mt-5">
                @auth
                    <a href="/datamahasiswa" class="btn btn-primary btn-lg mr-3" style="border-radius: 10px; padding: 12px 30px; font-weight: 600;">
                        📚 Lihat Data Mahasiswa
                    </a>
                    <a href="/berita" class="btn btn-outline-light btn-lg" style="border-radius: 10px; padding: 12px 30px; font-weight: 600;">
                        📰 Baca Berita
                    </a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-primary btn-lg mr-3" style="border-radius: 10px; padding: 12px 30px; font-weight: 600;">
                        🔐 Login Sekarang
                    </a>
                    <a href="{{ route('register') }}" class="btn btn-outline-light btn-lg" style="border-radius: 10px; padding: 12px 30px; font-weight: 600;">
                        📝 Daftar Akun
                    </a>
                @endauth
            </div>

        </div>

        <!-- Features -->
        <div class="row mt-5 pt-5">
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-sm h-100" style="transition: all .3s ease;">
                    <div class="card-body text-center">
                        <div style="font-size: 3rem; margin-bottom: 15px;">📊</div>
                        <h5 class="card-title" style="color: #16a34a; font-weight: 600;">Dashboard Modern</h5>
                        <p class="card-text text-muted">Interface yang intuitif dan mudah digunakan untuk semua user.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-sm h-100" style="transition: all .3s ease;">
                    <div class="card-body text-center">
                        <div style="font-size: 3rem; margin-bottom: 15px;">🔒</div>
                        <h5 class="card-title" style="color: #16a34a; font-weight: 600;">Keamanan Tinggi</h5>
                        <p class="card-text text-muted">Data Anda dilindungi dengan sistem keamanan terdepan.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-sm h-100" style="transition: all .3s ease;">
                    <div class="card-body text-center">
                        <div style="font-size: 3rem; margin-bottom: 15px;">⚡</div>
                        <h5 class="card-title" style="color: #16a34a; font-weight: 600;">Performa Optimal</h5>
                        <p class="card-text text-muted">Sistem yang cepat dan responsif di semua perangkat.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection
