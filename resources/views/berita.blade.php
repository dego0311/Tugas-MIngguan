@extends('layouts.main')

@section('content')
<div class="container mt-5">

    <div class="mb-5 text-center pb-4" style="border-bottom: 2px solid rgba(22,163,74,.15);">
        <h1 class="fw-bold" style="color: #15803d; font-size: 2.5rem;">📰 Berita Terbaru</h1>
        <p class="text-muted mt-2">Informasi dan update terbaru dari sistem akademik</p>
    </div>

    <div class="row g-4 justify-content-center">
        @foreach($beritas as $berita)
        <div class="col-md-6 col-lg-4">

            <a href="/berita/{{ $berita['slug'] }}" class="text-decoration-none">
                <div class="card h-100 content-panel border-0" style="transition: all .3s ease; border-radius: 14px; overflow: hidden;">

                    <div class="card-body p-4">
                        <div style="font-size: 2rem; margin-bottom: 12px;">📄</div>
                        <h5 class="mb-3 fw-bold" style="color: #16a34a; min-height: 50px;">
                            {{ $berita['judul'] }}
                        </h5>

                        <div style="display: flex; align-items: center; justify-content: space-between; padding-top: 15px; border-top: 1px solid rgba(22,163,74,.1);">
                            <span class="small text-muted">
                                ✍️ {{ $berita['penulis'] }}
                            </span>
                            <span class="small" style="color: #16a34a;">→</span>
                        </div>
                    </div>

                </div>
            </a>

        </div>
        @endforeach
    </div>

    @if(count($beritas) == 0)
        <div class="text-center py-5">
            <p style="color: #9ca3af; font-size: 1.1rem;">📭 Belum ada berita</p>
        </div>
    @endif

</div>
@endsection
