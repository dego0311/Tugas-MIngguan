<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEGO KEREN - Sistem Informasi Akademik</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Cyberpunk theme -->
    <link rel="stylesheet" href="/css/cyber.css">
    <style>
        body{
            font-family: 'Poppins', sans-serif;
        }
        .navbar-toggler{
            border-color: #16a34a;
        }
        .navbar-toggler-icon{
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='%2316a34a' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }
    </style>
</head>
<body>
    <!-- ✅ Navbar -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <a class="navbar-brand" href="/">
            <strong>🌿 DEGO KEREN</strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" 
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">🏠 Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/profile') }}">👤 Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/berita">📰 Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">✉️ Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/datamahasiswa">📚 Data Mahasiswa</a>
                </li>
                <li class="nav-item">
                    @auth
                        <span class="nav-link" style="cursor: pointer;">👋 {{ Auth::user()->name }}</span>
                    @endauth
                </li>
                <li class="nav-item">
                    @auth
                        <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit" class="btn btn-sm" style="background: linear-gradient(135deg, #16a34a, #15803d); color: white; border: none; margin-top: 5px;">🚪 Logout</button>
                        </form>
                    @else
                        <a class="btn btn-sm" style="background: linear-gradient(135deg, #16a34a, #15803d); color: white; text-decoration: none; margin-top: 5px;" href="{{ route('login') }}">🔐 Login</a>
                    @endauth
                </li>
            </ul>
        </div>
    </nav>

    <!-- Konten halaman -->
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-12">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="site-footer mt-5 pt-5" style="border-top: 2px solid rgba(22,163,74,.2); background: linear-gradient(to right, rgba(22,163,74,.05), rgba(74,222,128,.05));">
        <div class="container pb-3">
            <div class="row">
                <div class="col-md-6">
                    <h5 style="color: #16a34a; font-weight: 600;">DEGO KEREN</h5>
                    <p>Platform manajemen data mahasiswa berbasis Laravel dengan arsitektur modern.</p>
                </div>
                <div class="col-md-6 text-right">
                    <p style="color: #999;">© 2025 DEGO KEREN. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>