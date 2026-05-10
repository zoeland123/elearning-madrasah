@extends('frontend.layouts.app')
@section('title', 'Beranda - MA Ikhlas Beramal')
@section('content')

<style>
    /* Global Reset */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    
    body {
        font-family: 'Urbanist', sans-serif;
        overflow-x: hidden;
        line-height: 1.6;
    }
    
    /* Hero Section */
    .hero-madrasah {
        background: linear-gradient(135deg, #2d5016 0%, #5a8c2e 100%);
        min-height: 100vh;
        display: flex;
        align-items: center;
        padding: 100px 0 60px;
        position: relative;
        overflow: hidden;
    }
    
    .hero-madrasah::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><rect width="100" height="100" fill="none"/><circle cx="50" cy="50" r="2" fill="rgba(255,255,255,0.1)"/></svg>');
        opacity: 0.3;
    }
    
    .hero-content {
        position: relative;
        z-index: 2;
    }
    
    .hero-subtitle {
        color: #ffd700;
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 20px;
        letter-spacing: 1px;
    }
    
    .hero-title {
        font-size: 56px;
        font-weight: 800;
        color: white;
        margin-bottom: 25px;
        line-height: 1.2;
    }
    
    .hero-description {
        font-size: 20px;
        color: rgba(255,255,255,0.95);
        margin-bottom: 40px;
        line-height: 1.8;
    }
    
    .logo-hero {
        width: 400px;
        height: 400px;
        filter: drop-shadow(0 20px 40px rgba(0,0,0,0.3));
        animation: float 4s ease-in-out infinite;
    }
    
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-30px); }
    }
    
    /* Buttons */
    .btn-madrasah {
        display: inline-block;
        padding: 18px 45px;
        font-size: 18px;
        font-weight: 700;
        border-radius: 50px;
        text-decoration: none;
        transition: all 0.4s ease;
        border: none;
        cursor: pointer;
        text-align: center;
    }
    
    .btn-primary-madrasah {
        background: #ffd700;
        color: #2d5016;
        box-shadow: 0 10px 30px rgba(255, 215, 0, 0.4);
    }
    
    .btn-primary-madrasah:hover {
        background: #ffed4e;
        color: #1f3810;
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(255, 215, 0, 0.6);
    }
    
    /* Section Styling */
    .section-madrasah {
        padding: 100px 0;
    }
    
    .section-title {
        font-size: 42px;
        font-weight: 800;
        color: #2d5016;
        text-align: center;
        margin-bottom: 15px;
    }
    
    .section-divider {
        width: 100px;
        height: 5px;
        background: linear-gradient(90deg, #2d5016, #ffd700, #2d5016);
        margin: 0 auto 60px;
        border-radius: 10px;
    }
    
    /* About Section */
    .about-section {
        background: #ffffff;
    }
    
    .about-image {
        border-radius: 20px;
        box-shadow: 0 20px 60px rgba(0,0,0,0.15);
        width: 100%;
        height: auto;
    }
    
    .visi-misi-card {
        background: #f8f9fa;
        padding: 35px;
        border-radius: 20px;
        border-left: 6px solid #ffd700;
        margin-bottom: 25px;
        transition: all 0.3s ease;
    }
    
    .visi-misi-card:hover {
        transform: translateX(10px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }
    
    .visi-misi-title {
        font-size: 24px;
        font-weight: 700;
        color: #2d5016;
        margin-bottom: 15px;
    }
    
    .visi-misi-text {
        font-size: 17px;
        color: #555;
        line-height: 1.8;
    }
    
    .misi-list {
        list-style: none;
        padding: 0;
    }
    
    .misi-item {
        font-size: 17px;
        color: #555;
        margin-bottom: 15px;
        padding-left: 35px;
        position: relative;
        line-height: 1.8;
    }
    
    .misi-item::before {
        content: '✓';
        position: absolute;
        left: 0;
        color: #2d5016;
        font-weight: bold;
        font-size: 22px;
    }
    
    /* Program Section */
    .program-section {
        background: linear-gradient(180deg, #f8f9fa 0%, #ffffff 100%);
    }
    
    .program-card {
        background: white;
        border-radius: 25px;
        padding: 50px 35px;
        text-align: center;
        transition: all 0.4s ease;
        border: 2px solid transparent;
        height: 100%;
        box-shadow: 0 5px 20px rgba(0,0,0,0.08);
    }
    
    .program-card:hover {
        transform: translateY(-15px);
        border-color: #ffd700;
        box-shadow: 0 20px 50px rgba(45, 80, 22, 0.15);
    }
    
    .program-icon {
        font-size: 72px;
        color: #2d5016;
        margin-bottom: 25px;
        display: inline-block;
        transition: all 0.3s ease;
    }
    
    .program-card:hover .program-icon {
        transform: scale(1.1) rotate(5deg);
        color: #5a8c2e;
    }
    
    .program-title {
        font-size: 24px;
        font-weight: 700;
        color: #2d5016;
        margin-bottom: 20px;
    }
    
    .program-description {
        font-size: 16px;
        color: #666;
        line-height: 1.8;
    }
    
    /* Stats Section */
    .stats-section {
        background: linear-gradient(135deg, #2d5016 0%, #1f3810 100%);
        padding: 80px 0;
        position: relative;
    }
    
    .stats-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><rect width="100" height="100" fill="none"/><circle cx="50" cy="50" r="2" fill="rgba(255,255,255,0.1)"/></svg>');
        opacity: 0.2;
    }
    
    .stat-item {
        text-align: center;
        color: white;
        position: relative;
        z-index: 2;
    }
    
    .stat-icon {
        font-size: 64px;
        color: #ffd700;
        margin-bottom: 20px;
        display: inline-block;
        animation: pulse 2s ease-in-out infinite;
    }
    
    @keyframes pulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.1); }
    }
    
    .stat-number {
        font-size: 52px;
        font-weight: 800;
        color: white;
        margin-bottom: 10px;
        display: block;
    }
    
    .stat-label {
        font-size: 18px;
        color: rgba(255,255,255,0.9);
        font-weight: 500;
    }
    
    /* CTA Section */
    .cta-section {
        padding: 100px 0;
        background: #ffffff;
    }
    
    .cta-card {
        background: linear-gradient(135deg, #5a8c2e 0%, #2d5016 100%);
        border-radius: 30px;
        padding: 80px 50px;
        text-align: center;
        box-shadow: 0 30px 80px rgba(45, 80, 22, 0.3);
        position: relative;
        overflow: hidden;
    }
    
    .cta-card::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
        animation: rotate 20s linear infinite;
    }
    
    @keyframes rotate {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }
    
    .cta-content {
        position: relative;
        z-index: 2;
    }
    
    .cta-title {
        font-size: 48px;
        font-weight: 800;
        color: white;
        margin-bottom: 25px;
    }
    
    .cta-description {
        font-size: 22px;
        color: rgba(255,255,255,0.95);
        margin-bottom: 45px;
        line-height: 1.8;
    }
    
    .btn-outline-madrasah {
        background: transparent;
        color: white;
        border: 3px solid white;
        padding: 18px 45px;
        font-size: 18px;
        font-weight: 700;
        border-radius: 50px;
        text-decoration: none;
        display: inline-block;
        transition: all 0.4s ease;
    }
    
    .btn-outline-madrasah:hover {
        background: white;
        color: #2d5016;
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(255,255,255,0.3);
    }
    
    /* Responsive */
    @media (max-width: 992px) {
        .hero-title {
            font-size: 42px;
        }
        
        .logo-hero {
            width: 300px;
            height: 300px;
            margin-top: 40px;
        }
        
        .section-title {
            font-size: 36px;
        }
        
        .cta-title {
            font-size: 36px;
        }
    }
    
    @media (max-width: 768px) {
        .hero-madrasah {
            padding: 80px 0 40px;
            min-height: auto;
        }
        
        .hero-title {
            font-size: 36px;
        }
        
        .hero-description {
            font-size: 18px;
        }
        
        .logo-hero {
            width: 250px;
            height: 250px;
        }
        
        .section-madrasah {
            padding: 60px 0;
        }
        
        .section-title {
            font-size: 32px;
        }
        
        .btn-madrasah {
            padding: 15px 35px;
            font-size: 16px;
        }
        
        .stat-number {
            font-size: 42px;
        }
        
        .cta-card {
            padding: 50px 30px;
        }
        
        .cta-title {
            font-size: 32px;
        }
    }
</style>

<main>
    <!-- HERO SECTION -->
    <section class="hero-madrasah">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 hero-content">
                    <p class="hero-subtitle">Assalamu'alaikum Warahmatullahi Wabarakatuh</p>
                    <h1 class="hero-title">Madrasah Aliyah<br>Ikhlas Beramal</h1>
                    <p class="hero-description">
                        Membentuk generasi yang berilmu, beramal, dan berakhlak mulia melalui pendidikan berbasis nilai-nilai Islam
                    </p>
                    <a href="/login" class="btn-madrasah btn-primary-madrasah">
                        <i class="bi bi-box-arrow-in-right me-2"></i>Login E-Learning
                    </a>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="{{ asset('images/logo-madrasah.svg') }}" alt="Logo Madrasah" class="logo-hero">
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT SECTION -->
    <section class="section-madrasah about-section">
        <div class="container">
            <h2 class="section-title">Tentang Madrasah</h2>
            <div class="section-divider"></div>
            
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <img src="{{ asset('frontend/assets/images/about-banner.jpg') }}" alt="Tentang Madrasah" class="about-image">
                </div>
                <div class="col-lg-6">
                    <div class="visi-misi-card">
                        <h3 class="visi-misi-title">
                            <i class="bi bi-star-fill me-2" style="color: #ffd700;"></i>Visi
                        </h3>
                        <p class="visi-misi-text">
                            Menjadi madrasah unggul yang menghasilkan generasi muslim yang berilmu, beramal, dan berakhlakul karimah.
                        </p>
                    </div>
                    
                    <div class="visi-misi-card" style="border-left-color: #2d5016;">
                        <h3 class="visi-misi-title">
                            <i class="bi bi-check-circle-fill me-2" style="color: #ffd700;"></i>Misi
                        </h3>
                        <ul class="misi-list">
                            <li class="misi-item">Menyelenggarakan pendidikan berkualitas berbasis nilai Islam</li>
                            <li class="misi-item">Membentuk karakter siswa yang berakhlak mulia</li>
                            <li class="misi-item">Mengembangkan potensi akademik dan non-akademik siswa</li>
                            <li class="misi-item">Menerapkan teknologi dalam pembelajaran</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PROGRAM SECTION -->
    <section class="section-madrasah program-section">
        <div class="container">
            <h2 class="section-title">Program Unggulan</h2>
            <div class="section-divider"></div>
            
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="program-card">
                        <div class="program-icon">
                            <i class="bi bi-book-fill"></i>
                        </div>
                        <h3 class="program-title">Tahfidz Al-Qur'an</h3>
                        <p class="program-description">
                            Program menghafal Al-Qur'an dengan metode yang mudah dan menyenangkan untuk membentuk generasi Qur'ani
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="program-card">
                        <div class="program-icon">
                            <i class="bi bi-laptop-fill"></i>
                        </div>
                        <h3 class="program-title">E-Learning</h3>
                        <p class="program-description">
                            Pembelajaran digital yang memudahkan akses materi kapan saja dan dimana saja dengan teknologi modern
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="program-card">
                        <div class="program-icon">
                            <i class="bi bi-trophy-fill"></i>
                        </div>
                        <h3 class="program-title">Ekstrakurikuler</h3>
                        <p class="program-description">
                            Berbagai kegiatan untuk mengembangkan bakat dan minat siswa di bidang akademik maupun non-akademik
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- STATS SECTION -->
    <section class="stats-section">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="stat-icon">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <span class="stat-number">{{ \App\Models\Siswa::count() }}+</span>
                        <p class="stat-label">Siswa Aktif</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="stat-icon">
                            <i class="bi bi-person-badge-fill"></i>
                        </div>
                        <span class="stat-number">{{ \App\Models\Guru::count() }}+</span>
                        <p class="stat-label">Guru Profesional</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="stat-icon">
                            <i class="bi bi-door-open-fill"></i>
                        </div>
                        <span class="stat-number">{{ \App\Models\Kelas::count() }}+</span>
                        <p class="stat-label">Ruang Kelas</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="stat-icon">
                            <i class="bi bi-journal-text"></i>
                        </div>
                        <span class="stat-number">{{ \App\Models\MataPelajaran::count() }}+</span>
                        <p class="stat-label">Mata Pelajaran</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-card">
                <div class="cta-content">
                    <h2 class="cta-title">Bergabunglah Bersama Kami</h2>
                    <p class="cta-description">
                        Daftarkan putra-putri Anda di Madrasah Aliyah Ikhlas Beramal<br>dan wujudkan masa depan gemilang
                    </p>
                    <div class="d-flex gap-3 justify-content-center flex-wrap">
                        <a href="/login" class="btn-madrasah btn-primary-madrasah">
                            <i class="bi bi-box-arrow-in-right me-2"></i>Login Sekarang
                        </a>
                        <a href="#about" class="btn-outline-madrasah">
                            <i class="bi bi-info-circle me-2"></i>Info Lebih Lanjut
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
