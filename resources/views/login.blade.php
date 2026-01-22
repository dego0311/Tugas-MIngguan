@extends('layouts.main')

@section('content')
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card content-panel border-0 p-5" style="border-radius: 16px; box-shadow: 0 8px 30px rgba(22,163,74,.12);">
                <div class="text-center mb-5">
                    <div style="font-size: 3rem; margin-bottom: 15px;">🔐</div>
                    <h2 class="fw-bold" style="color: #15803d;">{{ $title }}</h2>
                </div>

                @if($errors->any())
                    <div class="alert alert-danger border-0" style="background: #fee2e2; color: #991b1b; border-radius: 10px;">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('login.attempt') }}">
                    @csrf
                    <div class="mb-4">
                        <label for="email" class="form-label fw-bold" style="color: #16a34a;">Email</label>
                        <input type="email" class="form-control form-control-lg" id="email" name="email" value="{{ old('email') }}" required autofocus style="border-radius: 10px;">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label fw-bold" style="color: #16a34a;">Password</label>
                        <div class="input-group" style="border-radius: 10px;">
                            <input type="password" class="form-control form-control-lg" id="password" name="password" required style="border-radius: 10px 0 0 10px;">
                            <button class="btn" type="button" id="togglePassword" style="background: rgba(22,163,74,.1); border: 1.5px solid rgba(22,163,74,.15); border-radius: 0 10px 10px 0; color: #16a34a;">
                                👁️
                            </button>
                        </div>
                    </div>
                    <div class="mb-4 form-check">
                        <input type="checkbox" class="form-check-input" id="remember" name="remember">
                        <label class="form-check-label text-muted" for="remember">Ingat saya</label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg w-100 fw-bold" style="border-radius: 10px; padding: 12px 20px;">
                        🔓 Login
                    </button>
                </form>

                <hr style="border-color: rgba(22,163,74,.1); margin: 25px 0;">
                <div class="text-center">
                    <p class="text-muted small mb-2">Kredensial Test:</p>
                    <p class="text-muted small mb-0">
                        Email: <strong style="color: #16a34a;">admin@example.com</strong>
                    </p>
                    <p class="text-muted small">
                        Password: <strong style="color: #16a34a;">password123</strong>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.getElementById('togglePassword').addEventListener('click', function() {
    const passwordInput = document.getElementById('password');
    
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        this.textContent = '🙈';
    } else {
        passwordInput.type = 'password';
        this.textContent = '👁️';
    }
});
</script>
@endsection
