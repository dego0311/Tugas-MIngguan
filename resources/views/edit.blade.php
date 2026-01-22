@extends('layouts.main')

@section('content')
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card content-panel border-0" style="border-radius: 16px; box-shadow: 0 4px 20px rgba(22,163,74,.08);">
        <div class="card-body p-5">
          <h1 class="text-center mb-4 pb-3" style="color: #15803d; font-weight: 800; border-bottom: 2px solid rgba(22,163,74,.1);">
            ✏️ Edit Data Mahasiswa
          </h1>

          <form action="/editdata/{{ $data['id'] }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
              <label for="name" class="form-label fw-bold" style="color: #16a34a;">Nama Lengkap</label>
              <input type="text" name="name" id="name" value="{{ $data['name'] }}" placeholder="Nama Lengkap" class="form-control form-control-lg" required style="border-radius: 10px;">
            </div>

            <div class="mb-4">
              <label for="nim" class="form-label fw-bold" style="color: #16a34a;">NIM</label>
              <input type="number" name="nim" id="nim" value="{{ $data['nim'] }}" placeholder="Nomor induk mahasiswa" class="form-control form-control-lg" required style="border-radius: 10px;">
            </div>

            <div class="mb-4">
              <label for="prodi" class="form-label fw-bold" style="color: #16a34a;">Program Studi</label>
              <input type="text" name="prodi" id="prodi" value="{{ $data['prodi'] }}" placeholder="Program Studi" class="form-control form-control-lg" required style="border-radius: 10px;">
            </div>

            <div class="mb-4">
              <label for="email" class="form-label fw-bold" style="color: #16a34a;">Email</label>
              <input type="email" name="email" id="email" value="{{ $data['email'] }}" placeholder="Email" class="form-control form-control-lg" required style="border-radius: 10px;">
            </div>

            <div class="mb-5">
              <label for="nohp" class="form-label fw-bold" style="color: #16a34a;">No. HP</label>
              <input type="number" name="nohp" id="nohp" value="{{ $data['nohp'] }}" placeholder="No. HP" class="form-control form-control-lg" required style="border-radius: 10px;">
            </div>

            <div class="d-grid gap-2">
              <button type="submit" class="btn btn-primary btn-lg fw-bold" style="border-radius: 10px; padding: 12px 20px;">
                ✓ Update Data
              </button>
              <a href="/datamahasiswa" class="btn btn-outline-light btn-lg fw-bold" style="border-radius: 10px; padding: 12px 20px;">
                ← Kembali
              </a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection