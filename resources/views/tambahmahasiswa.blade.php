@extends('layouts.main')

@section('content')
    <h1>Tambah Data Mahasiswa</h1>
    <div class="card">
    <div class="card-body">
    <form action="/insertdata" method="POST" enctype="multipart/form-data">
        @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input type="text" name="name" id="name" class="form-control" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nim</label>
    <input type="number" name="nim" id="nim" class="form-control">
  </div>
  <div class="mb-3">
    <label for="prodi" class="form-label">Prodi</label>
    <input type="text" name="prodi" id="prodi" class="form-control">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" name="email" id="email" class="form-control">
  </div>
  <div class="mb-3">
    <label for="nohp" class="form-label">No.HP</label>
    <input type="number" name="nohp" id="nohp" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
@endsection