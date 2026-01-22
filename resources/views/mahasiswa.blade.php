@extends('layouts.main')

@section('title', 'Data Mahasiswa')

@section('content')
<div class="content-panel card p-5" style="border: 1px solid rgba(22,163,74,.15); border-radius: 16px;">
  <div class="mb-4 pb-3" style="border-bottom: 2px solid rgba(22,163,74,.1);">
    <h1 class="text-center mb-0" style="color: #15803d; font-weight: 800;">
      📚 Data Mahasiswa
    </h1>
  </div>
  
  <div class="d-flex justify-content-between align-items-center mb-4">
    <div>
      <p class="text-muted mb-0">Total Mahasiswa: <strong style="color: #16a34a;">{{ count($data) }}</strong></p>
    </div>
    <a href="/tambahmahasiswa" class="btn btn-primary" style="border-radius: 10px; padding: 10px 25px; font-weight: 600;">
      ➕ Tambah Data
    </a>
  </div>

  <div class="table-responsive">
    <table class="table table-hover mb-0">
      <thead>
        <tr style="background: linear-gradient(135deg, rgba(22,163,74,.08), rgba(74,222,128,.05));">
          <th scope="col" style="color: #16a34a; font-weight: 600;">No</th>
          <th scope="col" style="color: #16a34a; font-weight: 600;">Nama</th>
          <th scope="col" style="color: #16a34a; font-weight: 600;">NIM</th>
          <th scope="col" style="color: #16a34a; font-weight: 600;">Program Studi</th>
          <th scope="col" style="color: #16a34a; font-weight: 600;">Email</th>
          <th scope="col" style="color: #16a34a; font-weight: 600;">No. HP</th>
          <th scope="col" style="color: #16a34a; font-weight: 600;">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $i=1 ?>
        @foreach ($data as $mahasiswa)
        <tr style="border-bottom: 1px solid rgba(22,163,74,.08);">
            <th scope="row" style="color: #6b7280; font-weight: 500;"><?php echo $i?></th>
            <td style="color: #1f2937; font-weight: 500;">{{$mahasiswa["name"]}}</td>
            <td style="color: #6b7280;">{{$mahasiswa["nim"]}}</td>
            <td style="color: #6b7280;">{{$mahasiswa["prodi"]}}</td>
            <td style="color: #6b7280;">{{$mahasiswa["email"]}}</td>
            <td style="color: #6b7280;">{{$mahasiswa["nohp"]}}</td>
            <td>
                <a href="tampildata/{{ $mahasiswa['id'] }}" class="btn btn-sm btn-primary" style="border-radius: 8px; padding: 6px 12px; font-weight: 600; font-size: 0.85rem;">
                  ✏️ Edit
                </a>
                <a href="javascript:void(0)" class="btn btn-sm btn-danger btn-hapus" style="border-radius: 8px; padding: 6px 12px; font-weight: 600; font-size: 0.85rem; background: linear-gradient(135deg, #dc2626, #b91c1c); border: none; color: white;" data-id="{{ $mahasiswa['id'] }}">
                  🗑️ Hapus
                </a>
            </td>
       
        <?php $i++?>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  @if(count($data) == 0)
    <div class="text-center py-5">
      <p style="color: #9ca3af; font-size: 1.1rem;">📭 Belum ada data mahasiswa</p>
      <a href="/tambahmahasiswa" class="btn btn-primary mt-3">Tambah Data Sekarang</a>
    </div>
  @endif
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const btnHapus = document.querySelectorAll('.btn-hapus');
    
    btnHapus.forEach(function(btn) {
        btn.addEventListener('click', function() {
            const id = this.getAttribute('data-id');
            
            Swal.fire({
                title: "Yakin mau hapus data ini?",
                text: "Data yang dihapus tidak bisa dipulihkan!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: '#16a34a',
                cancelButtonColor: '#6b7280',
                confirmButtonText: '✓ Ya, Hapus!',
                cancelButtonText: '✕ Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '/delete/' + id;
                }
            });
        });
    });
});
</script>
@endsection