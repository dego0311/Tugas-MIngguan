@extends('layouts.main')

@section('content')
<div class="container mt-5">

    <div class="row justify-content-center">
        <div class="col-md-5">

            <div class="card content-panel border-0" style="border-radius: 16px; box-shadow: 0 8px 25px rgba(22,163,74,.12); overflow: hidden;">

                <div class="card-body text-center p-5">

                    <!-- Foto Profil -->
                    <img 
                        src="{{ $foto }}" 
                        alt="Foto Profil"
                        class="rounded-circle mb-4"
                        style="width:160px; height:160px; object-fit:cover; border: 4px solid rgba(22,163,74,.2);"
                    >

                    <!-- Nama -->
                    <h2 class="mb-3 fw-bold" style="color: #15803d;">{{ $nama }}</h2>

                    <!-- Nomor HP -->
                    <div class="mb-4 pb-4" style="border-bottom: 1px solid rgba(22,163,74,.1);">
                        <p class="text-muted mb-0">
                            <span style="font-size: 1.2rem;">📞</span> {{ $nohp }}
                        </p>
                    </div>

                    <!-- Button -->
                    <a href="#" class="btn btn-primary btn-lg px-5 fw-bold" style="border-radius: 10px;">
                        ✏️ Edit Profil
                    </a>

                </div>

            </div>

        </div>
    </div>

</div>
@endsection
