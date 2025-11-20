@extends('layouts.main')

@section('content')
    <h1>Edit Data Mahasiswa</h1>
    <div class="card">
    <div class="card-body">
    <form action="/editdata/{{ $data['id'] }}" method="POST" enctype="multipart/form-data">
        @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input type="text" name="name" id="name" value="{{ $data['name'] }}" placeholder="Nama Lengkap" class="form-control">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nim</label>
    <input type="number" name="nim" id="nim" value="{{ $data['nim'] }}" placeholder="Nomor Induk Mahasiswa" class="form-control">
  </div>
  <div class="mb-3">
    <label for="prodi" class="form-label">Prodi</label>
    <input type="text" name="prodi" id="prodi" value="{{ $data['prodi'] }}" placeholder="Nama Lengkap" class="form-control">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" name="email" id="email" value="{{ $data['email'] }}" placeholder="Email" class="form-control">
  </div>
  <div class="mb-3">
    <label for="nohp" class="form-label">No.HP</label>
    <input type="number" name="nohp" id="nohp" value="{{ $data['nohp'] }}" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">Edit Data</button>
</form>
</div>
</div>
@endsection