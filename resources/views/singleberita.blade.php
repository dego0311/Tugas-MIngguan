@extends('layouts.main')

@section('content')
<div class="container mt-5">
    <article class="card content-panel border-0 p-5" style="border-radius: 16px; box-shadow: 0 4px 20px rgba(22,163,74,.08);">
        <h1 class="mb-3" style="color: #15803d; font-weight: 800; font-size: 2.2rem;">
            📰 {{ $new_berita["judul"] }}
        </h1>
        
        <div class="mb-4 pb-4" style="border-bottom: 2px solid rgba(22,163,74,.1);">
            <p class="text-muted mb-0">
                <span style="font-weight: 600; color: #16a34a;">✍️ Penulis:</span> {{ $new_berita["penulis"]}}
            </p>
        </div>

        <div class="content-text mb-5" style="line-height: 1.8; color: #1f2937; font-size: 1.05rem;">
            <p>{{ $new_berita["konten"]}}</p>
        </div>

        <div class="pt-4" style="border-top: 2px solid rgba(22,163,74,.1);">
            <a href="{{ url('/berita') }}" class="btn btn-primary btn-lg" style="border-radius: 10px; padding: 12px 30px; font-weight: 600;">
                ← Kembali ke Berita
            </a>
        </div>
    </article>
</div>
@endsection