<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - E-Learning MA Ikhlas Beramal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            background: linear-gradient(160deg, #0f2007 0%, #1a3a0a 40%, #2d5016 70%, #5a8c2e 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px 15px;
            position: relative;
            overflow: hidden;
        }

        /* Background decoration */
        body::before {
            content: '';
            position: fixed;
            width: 500px; height: 500px;
            background: radial-gradient(circle, rgba(255,215,0,0.06) 0%, transparent 70%);
            top: -150px; right: -150px;
            pointer-events: none;
        }

        body::after {
            content: '';
            position: fixed;
            width: 400px; height: 400px;
            background: radial-gradient(circle, rgba(90,140,46,0.12) 0%, transparent 70%);
            bottom: -100px; left: -100px;
            pointer-events: none;
        }

        /* Main card container */
        .login-container {
            width: 100%;
            max-width: 460px;
            position: relative;
            z-index: 10;
        }

        /* Top section - branding */
        .brand-section {
            text-align: center;
            margin-bottom: 30px;
        }

        .brand-logo {
            width: 90px; height: 90px;
            filter: drop-shadow(0 8px 20px rgba(255,215,0,0.3));
            animation: float 4s ease-in-out infinite;
            margin-bottom: 16px;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-8px); }
        }

        .brand-name {
            font-size: 22px;
            font-weight: 800;
            color: #ffffff;
            margin-bottom: 4px;
        }

        .brand-name span { color: #ffd700; }

        .brand-sub {
            font-size: 12px;
            color: rgba(255,255,255,0.5);
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        /* Login card */
        .login-card {
            background: rgba(255,255,255,0.07);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255,255,255,0.12);
            border-radius: 24px;
            padding: 40px 35px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.4);
            margin-bottom: 20px;
        }

        .card-title {
            font-size: 20px;
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 4px;
        }

        .card-subtitle {
            font-size: 13px;
            color: rgba(255,255,255,0.45);
            margin-bottom: 28px;
        }

        /* Divider */
        .form-divider {
            height: 1px;
            background: rgba(255,255,255,0.08);
            margin: 20px 0;
        }

        /* Form label */
        .field-label {
            display: block;
            font-size: 11px;
            font-weight: 600;
            color: rgba(255,255,255,0.55);
            text-transform: uppercase;
            letter-spacing: 1.2px;
            margin-bottom: 8px;
        }

        /* Input wrapper */
        .input-wrap {
            position: relative;
            margin-bottom: 18px;
        }

        .input-wrap .icon {
            position: absolute;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: rgba(255,255,255,0.3);
            font-size: 16px;
            pointer-events: none;
        }

        .input-field {
            width: 100%;
            padding: 13px 14px 13px 44px;
            background: rgba(255,255,255,0.06);
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 12px;
            color: #ffffff;
            font-size: 14px;
            font-family: 'Poppins', sans-serif;
            outline: none;
            transition: all 0.3s ease;
        }

        .input-field::placeholder { color: rgba(255,255,255,0.2); }

        .input-field:focus {
            background: rgba(255,215,0,0.06);
            border-color: rgba(255,215,0,0.4);
            box-shadow: 0 0 0 3px rgba(255,215,0,0.08);
        }

        .input-field.error { border-color: rgba(255,100,100,0.6); }

        .error-msg {
            font-size: 11px;
            color: #ff8080;
            margin-top: 5px;
            display: block;
        }

        .eye-toggle {
            position: absolute;
            right: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: rgba(255,255,255,0.3);
            cursor: pointer;
            font-size: 16px;
            transition: color 0.3s;
        }

        .eye-toggle:hover { color: #ffd700; }

        /* Remember & forgot */
        .form-bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
        }

        .remember-label {
            display: flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
            font-size: 13px;
            color: rgba(255,255,255,0.55);
        }

        .remember-label input {
            width: 15px; height: 15px;
            accent-color: #ffd700;
            cursor: pointer;
        }

        .forgot-link {
            font-size: 13px;
            color: #ffd700;
            text-decoration: none;
            opacity: 0.85;
            transition: opacity 0.3s;
        }

        .forgot-link:hover { opacity: 1; color: #ffd700; }

        /* Submit button */
        .btn-submit {
            width: 100%;
            padding: 14px;
            background: linear-gradient(135deg, #ffd700 0%, #ffb300 100%);
            border: none;
            border-radius: 12px;
            color: #1a3a0a;
            font-size: 15px;
            font-weight: 700;
            font-family: 'Poppins', sans-serif;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(255,215,0,0.35);
        }

        .btn-submit:active { transform: translateY(0); }

        /* Features row - bottom */
        .features-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
        }

        .feature-chip {
            display: flex;
            align-items: center;
            gap: 10px;
            background: rgba(255,255,255,0.05);
            border: 1px solid rgba(255,255,255,0.08);
            border-radius: 12px;
            padding: 12px 14px;
            transition: all 0.3s ease;
        }

        .feature-chip:hover {
            background: rgba(255,215,0,0.07);
            border-color: rgba(255,215,0,0.2);
        }

        .chip-icon {
            width: 34px; height: 34px;
            background: linear-gradient(135deg, #2d5016, #5a8c2e);
            border-radius: 9px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 15px;
            color: #ffd700;
            flex-shrink: 0;
        }

        .chip-text {
            font-size: 11px;
            color: rgba(255,255,255,0.65);
            font-weight: 500;
            line-height: 1.4;
        }

        /* Footer */
        .login-footer {
            text-align: center;
            font-size: 12px;
            color: rgba(255,255,255,0.3);
            margin-top: 20px;
        }

        /* Alert */
        .alert-custom {
            background: rgba(40,167,69,0.12);
            border: 1px solid rgba(40,167,69,0.25);
            border-radius: 10px;
            padding: 10px 14px;
            font-size: 13px;
            color: #6fcf97;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <div class="login-container">

        {{-- Bagian Atas: Branding --}}
        <div class="brand-section">
            <img src="{{ asset('images/logo-madrasah.svg') }}" alt="Logo" class="brand-logo">
            <h1 class="brand-name">MA <span>Ikhlas Beramal</span></h1>
            <p class="brand-sub">Berilmu · Beramal · Berakhlak</p>
        </div>

        {{-- Bagian Tengah: Form Login --}}
        <div class="login-card">
            <h2 class="card-title">Selamat Datang 👋</h2>
            <p class="card-subtitle">Masuk ke akun E-Learning Anda</p>

            @if(session('status'))
                <div class="alert-custom">{{ session('status') }}</div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                {{-- Email --}}
                <label class="field-label">Email Address</label>
                <div class="input-wrap">
                    <i class="bi bi-envelope-fill icon"></i>
                    <input type="email" name="email" value="{{ old('email') }}"
                        class="input-field {{ $errors->has('email') ? 'error' : '' }}"
                        placeholder="nama@madrasah.com" required autofocus>
                </div>
                @error('email')
                    <span class="error-msg">{{ $message }}</span>
                @enderror

                {{-- Password --}}
                <label class="field-label">Password</label>
                <div class="input-wrap">
                    <i class="bi bi-lock-fill icon"></i>
                    <input type="password" name="password" id="pwdInput"
                        class="input-field {{ $errors->has('password') ? 'error' : '' }}"
                        placeholder="Masukkan password" required>
                    <i class="bi bi-eye-fill eye-toggle" id="eyeToggle"></i>
                </div>
                @error('password')
                    <span class="error-msg">{{ $message }}</span>
                @enderror

                <div class="form-divider"></div>

                {{-- Remember & Forgot --}}
                <div class="form-bottom">
                    <label class="remember-label">
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        Ingat saya
                    </label>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="forgot-link">Lupa password?</a>
                    @endif
                </div>

                <button type="submit" class="btn-submit">
                    <i class="bi bi-box-arrow-in-right me-2"></i>Masuk Sekarang
                </button>
            </form>
        </div>

        {{-- Bagian Bawah: Fitur --}}
        <div class="features-row">
            <div class="feature-chip">
                <div class="chip-icon"><i class="bi bi-book-fill"></i></div>
                <span class="chip-text">Materi digital lengkap</span>
            </div>
            <div class="feature-chip">
                <div class="chip-icon"><i class="bi bi-bar-chart-fill"></i></div>
                <span class="chip-text">Pantau nilai belajar</span>
            </div>
            <div class="feature-chip">
                <div class="chip-icon"><i class="bi bi-calendar-check-fill"></i></div>
                <span class="chip-text">Absensi terintegrasi</span>
            </div>
            <div class="feature-chip">
                <div class="chip-icon"><i class="bi bi-chat-dots-fill"></i></div>
                <span class="chip-text">Konsultasi dengan guru</span>
            </div>
        </div>

        <div class="login-footer">
            © {{ date('Y') }} MA Ikhlas Beramal · Sistem E-Learning
        </div>

    </div>

    <script>
        document.getElementById('eyeToggle').addEventListener('click', function() {
            const input = document.getElementById('pwdInput');
            if (input.type === 'password') {
                input.type = 'text';
                this.className = 'bi bi-eye-slash-fill eye-toggle';
            } else {
                input.type = 'password';
                this.className = 'bi bi-eye-fill eye-toggle';
            }
        });
    </script>
</body>
</html>
