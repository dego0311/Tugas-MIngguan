<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css/cyber.css">
  <title>Detail Berita</title>
</head>
<body style="background: linear-gradient(180deg, #ffffff, #f0fdf4); font-family: 'Poppins', sans-serif;">

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg" style="background: rgba(255,255,255,.95); border-bottom: 2px solid rgba(22,163,74,.15);">
    <a class="navbar-brand" href="/" style="color: #16a34a; font-weight: 700;">🌿 DEGO KEREN</a>
    <ul class="nav ml-auto">
      <li class="nav-item"><a class="nav-link" href="/" style="color: #6b7280; text-decoration: none;">🏠 Home</a></li>
      <li class="nav-item"><a class="nav-link active" href="/berita" style="color: #16a34a; font-weight: 600;">📰 Berita</a></li>
      <li class="nav-item"><a class="nav-link" href="/profile" style="color: #6b7280; text-decoration: none;">👤 Profil</a></li>
      <li class="nav-item"><a class="nav-link" href="/contact" style="color: #6b7280; text-decoration: none;">✉️ Kontak</a></li>
    </ul>
  </nav>

  <div class="container mt-5 mb-5">
    <article class="card content-panel border-0 p-5" style="border-radius: 16px; box-shadow: 0 4px 20px rgba(22,163,74,.08);">
      <h1 class="mb-3" style="color: #15803d; font-weight: 800;">📰 <?php echo $judul; ?></h1>
      <p class="text-muted mb-4 pb-3" style="border-bottom: 1px solid rgba(22,163,74,.1);">
        <span style="font-weight: 600; color: #16a34a;">📅</span> <?php echo $tanggal; ?>
      </p>

      <img src="<?php echo $gambar; ?>" class="img-fluid rounded mb-4" alt="Gambar Berita" style="max-height: 400px; object-fit: cover; border: 1px solid rgba(22,163,74,.1);">

      <div style="text-align: justify; font-size: 1.05rem; line-height: 1.8; color: #1f2937;">
        <?php echo $isi; ?>
      </div>

      <div class="mt-5 pt-4" style="border-top: 2px solid rgba(22,163,74,.1);">
        <a href="/berita" class="btn btn-primary" style="border-radius: 10px; padding: 12px 30px; font-weight: 600;">← Kembali ke Berita</a>
      </div>
    </article>
  </div>

  <footer class="text-center p-4 mt-5" style="background: linear-gradient(to right, rgba(22,163,74,.05), rgba(74,222,128,.05)); border-top: 2px solid rgba(22,163,74,.15); color: #6b7280;">
    &copy; <?php echo date("Y"); ?> DEGO KEREN - Sistem Informasi Akademik
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>