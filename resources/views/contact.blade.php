@extends('layouts.main')

@section('content')
<section class="contact-section py-5">
    <div class="container">
        
        <!-- HEADER -->
        <div class="text-center mb-5">
            <h1 class="fw-bold text-white">Contact Us</h1>
            <p class="text-muted">
                Punya pertanyaan atau masukan? Silakan hubungi kami melalui form atau kontak di bawah.
            </p>
        </div>

        <div class="row g-4">
            
            <!-- FORM -->
            <div class="col-md-6">
                <div class="card contact-card p-4">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control" placeholder="Masukkan nama Anda">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder="Masukkan email Anda">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Pesan</label>
                            <textarea class="form-control" rows="4" placeholder="Tulis pesan Anda..."></textarea>
                        </div>

                        <button class="btn btn-primary w-100">
                            Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>

            <!-- INFO KONTAK -->
            <div class="col-md-6">
                <div class="card contact-card p-4 h-100">
                    <h5 class="fw-bold mb-3">Informasi Kontak</h5>

                    <p class="mb-2">
                        📍 <strong>Alamat:</strong><br>
                        jl sudirman palembang indonesia
                    </p>

                    <p class="mb-2">
                        📞 <strong>Telepon:</strong><br>
                        <a href="tel:085609644440" class="contact-link">085609644440</a>
                    </p>

                    <p class="mb-3">
                        💬 <strong>WhatsApp:</strong><br>
                        <a href="https://wa.me/6285609644440" target="_blank" class="contact-link">
                            Chat via WhatsApp
                        </a>
                    </p>

                    <!-- MAPS -->
                    <div class="map-box mt-3">
                        <iframe 
                            src="https://www.google.com/maps/place/Jl.+Jend.+Sudirman,+Kota+Palembang,+Sumatera+Selatan/@-2.9527799,104.7317875,17z/data=!3m1!4b1!4m6!3m5!1s0x2e3b760add4ceb7f:0x1a894a3de39ec2cf!8m2!3d-2.9527853!4d104.7343624!16s%2Fg%2F1hm3705t4?entry=ttu&g_ep=EgoyMDI2MDExOS4wIKXMDSoKLDEwMDc5MjA2N0gBUAM%3D"
                            width="100%" height="250"
                            style="border:0; border-radius:12px;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
