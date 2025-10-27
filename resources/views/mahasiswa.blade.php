@extends('layouts.main')

@section('content')
    <h1 class="text-centre">Data Mahasiswa</h1><br>
    <div class="row">

    <button type="button" class="btn btn-success">Tambah</button>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Nim</th>
      <th scope="col">Prodi</th>
      <th scope="col">Email</th>
      <th scope="col">No. HP</th>
        <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1 ?>
    @foreach ($data as $mahasiswa)
    
    <tr>
      <th scope="row"><?php echo $i ?></th>
      <td>{($mahasiswa["name"])} </td>
      <td>{($mahasiswa["nim"])} </td>
      <td>{($mahasiswa["prodi"])} </td>
      <td>{($mahasiswa["email"])} </td>
      <td>{($mahasiswa["nohp"])} </td>
        <td>
      <button type="button" class="btn btn-primary">Edit</button>
      <button type="button" class="btn btn-danger">Hapus</button>
</td>
    <?php $i++; ?>
</tr>
    @endforeach
  </tbody>
</table>
@endsection