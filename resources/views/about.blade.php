@extends('layouts.main')

@section('title', 'Tentang Kami')

@section('content')
<div class="container mt-5 mb-5">
    <section class="hero text-center pb-5" style="border-bottom: 2px solid rgba(22,163,74,.15);">
        <div style="font-size: 4rem; margin-bottom: 20px;">ℹ️</div>
        <h1 class="fw-bold mb-3" style="color: #15803d; font-size: 2.5rem;">Tentang DEGO KEREN</h1>
        <p class="lead text-muted" style="font-size: 1.1rem;">
            Platform modern untuk manajemen data akademik yang efisien dan aman
        </p>
    </section>

    <div class="row mt-5 pt-5">
        <div class="col-md-6 mb-4">
            <div class="card content-panel border-0 p-4" style="border-radius: 14px; box-shadow: 0 4px 20px rgba(22,163,74,.08); height: 100%;">
                <h4 class="mb-3 fw-bold" style="color: #16a34a;">🎯 Visi Kami</h4>
                <p class="text-muted">
                    Menjadi platform terdepan dalam solusi manajemen data akademik yang menggabungkan teknologi modern dengan kemudahan penggunaan untuk semua institusi pendidikan.
                </p>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card content-panel border-0 p-4" style="border-radius: 14px; box-shadow: 0 4px 20px rgba(22,163,74,.08); height: 100%;">
                <h4 class="mb-3 fw-bold" style="color: #16a34a;">🚀 Misi Kami</h4>
                <p class="text-muted">
                    Menghadirkan inovasi teknologi yang bermanfaat untuk masyarakat pendidikan dengan fokus pada keamanan data, performa optimal, dan pengalaman pengguna yang luar biasa.
                </p>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-4 mb-4">
            <div class="card content-panel border-0 p-4 text-center" style="border-radius: 14px; box-shadow: 0 4px 20px rgba(22,163,74,.08);">
                <div style="font-size: 2.5rem; margin-bottom: 15px;">💻</div>
                <h5 class="fw-bold" style="color: #16a34a;">Teknologi Modern</h5>
                <p class="text-muted small">Dibangun dengan framework Laravel terkini dan arsitektur scalable</p>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card content-panel border-0 p-4 text-center" style="border-radius: 14px; box-shadow: 0 4px 20px rgba(22,163,74,.08);">
                <div style="font-size: 2.5rem; margin-bottom: 15px;">🔒</div>
                <h5 class="fw-bold" style="color: #16a34a;">Keamanan Tinggi</h5>
                <p class="text-muted small">Proteksi data dengan enkripsi dan autentikasi berlapis</p>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card content-panel border-0 p-4 text-center" style="border-radius: 14px; box-shadow: 0 4px 20px rgba(22,163,74,.08);">
                <div style="font-size: 2.5rem; margin-bottom: 15px;">⚡</div>
                <h5 class="fw-bold" style="color: #16a34a;">Performa Cepat</h5>
                <p class="text-muted small">Responsif di semua perangkat dengan loading time optimal</p>
            </div>
        </div>
    </div>

    <div class="row mt-5 pt-5" style="border-top: 2px solid rgba(22,163,74,.15);">
        <div class="col-12">
            <div class="card content-panel border-0 p-5" style="border-radius: 14px; box-shadow: 0 4px 20px rgba(22,163,74,.08);">
                <h3 class="fw-bold mb-4" style="color: #15803d;">📖 Tentang Proyek</h3>
                <p class="text-muted mb-3">
                    DEGO KEREN adalah sebuah platform sistem informasi akademik yang dirancang khusus untuk memudahkan manajemen data mahasiswa, berita akademik, dan informasi terkait dalam satu dashboard terpadu.
                </p>
                <p class="text-muted mb-3">
                    Kami berkomitmen untuk terus berinovasi dan memberikan fitur-fitur terbaru yang sesuai dengan kebutuhan institusi pendidikan modern. Tim kami bekerja keras untuk memastikan setiap aspek sistem dapat memberikan nilai tambah bagi pengguna.
                </p>
                <p class="text-muted">
                    Terima kasih telah memilih DEGO KEREN sebagai partner digital Anda.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
