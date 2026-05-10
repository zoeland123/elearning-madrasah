@extends('frontend.layouts.app')

@section('title', 'Tentang - MA Ikhlas Beramal')

@section('content')

<style>
    .about-hero {
        background: linear-gradient(135deg, #2d5016 0%, #5a8c2e 100%);
        padding: 120px 0 80px;
        margin-top: 85px;
        color: white;
        text-align: center;
    }
    
    .about-hero h1 {
        font-size: 48px;
        font-weight: 800;
        margin-bottom: 20px;
    }
    
    .about-hero p {
        font-size: 20px;
        opacity: 0.95;
        max-width: 700px;
        margin: 0 auto;
    }
    
    .about-section {
        padding: 80px 0;
    }
    
    .about-image {
        border-radius: 20px;
        box-shadow: 0 20px 60px rgba(0,0,0,0.15);
        width: 100%;
        height: auto;
    }
    
    .about-content h2 {
        font-size: 36px;
        font-weight: 800;
        color: #2d5016;
        margin-bottom: 20px;
    }
    
    .about-text {
        font-size: 17px;
        color: #666;
        line-height: 1.8;
        margin-bottom: 30px;
    }
    
    .feature-card {
        background: #f8f9fa;
        border-radius: 20px;
        padding: 35px;
        margin-bottom: 25px;
        border-left: 5px solid #ffd700;
        transition: all 0.3s ease;
    }
    
    .feature-card:hover {
        transform: translateX(10px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }
    
    .feature-icon {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #2d5016, #5a8c2e);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 28px;
        margin-bottom: 20px;
    }
    
    .feature-title {
        font-size: 22px;
        font-weight: 700;
        color: #2d5016;
        margin-bottom: 12px;
    }
    
    .feature-text {
        font-size: 16px;
        color: #666;
        line-height: 1.7;
        margin: 0;
    }
    
    .stats-section {
        background: linear-gradient(135deg, #2d5016 0%, #1f3810 100%);
        padding: 80px 0;
        color: white;
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
        position: relative;
        z-index: 2;
    }
    
    .stat-number {
        font-size: 52px;
        font-weight: 800;
        color: #ffd700;
        margin-bottom: 10px;
        display: block;
    }
    
    .stat-label {
        font-size: 18px;
        color: rgba(255,255,255,0.9);
    }
    
    .values-section {
        padding: 80px 0;
        background: #f8f9fa;
    }
    
    .value-card {
        background: white;
        border-radius: 20px;
        padding: 40px 30px;
        text-align: center;
        height: 100%;
        box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        transition: all 0.3s ease;
    }
    
    .value-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 50px rgba(45, 80, 22, 0.15);
    }
    
    .value-icon {
        font-size: 64px;
        color: #2d5016;
        margin-bottom: 20px;
    }
    
    .value-title {
        font-size: 24px;
        font-weight: 700;
        color: #2d5016;
        margin-bottom: 15px;
    }
    
    .value-text {
        font-size: 16px;
        color: #666;
        line-height: 1.7;
    }
    
    .section-title-about {
        font-size: 42px;
        font-weight: 800;
        color: #2d5016;
        text-align: center;
        margin-bottom: 15px;
    }
    
    .section-divider-about {
        width: 100px;
        height: 5px;
        background: linear-gradient(90deg, #2d5016, #ffd700, #2d5016);
        margin: 0 auto 60px;
        border-radius: 10px;
    }
    
    @media (max-width: 768px) {
        .about-hero {
            padding: 100px 0 60px;
            margin-top: 70px;
        }
        
        .about-hero h1 {
            font-size: 36px;
        }
        
        .about-hero p {
            font-size: 18px;
        }
        
        .about-section, .values-section {
            padding: 60px 0;
        }
        
        .section-title-about {
            font-size: 32px;
        }
        
        .stat-number {
            font-size: 42px;
        }
    }
</style>

<!-- Hero Section -->
<section class="about-hero">
    <div class="container">
        <h1>Tentang Madrasah</h1>
        <p>Mengenal lebih dekat Madrasah Aliyah Ikhlas Beramal, sejarah, visi misi, dan komitmen kami dalam membentuk generasi Qur'ani</p>
    </div>
</section>

<!-- About Section -->
<section class="about-section">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <img src="{{ asset('frontend/assets/images/about-banner.jpg') }}" alt="Tentang Madrasah" class="about-image">
            </div>
            <div class="col-lg-6 about-content">
                <h2>Madrasah Aliyah Ikhlas Beramal</h2>
                <p class="about-text">
                    Madrasah Aliyah Ikhlas Beramal adalah lembaga pendidikan Islam yang berdiri sejak tahun 2010. Kami berkomitmen untuk membentuk generasi muslim yang berilmu, beramal, dan berakhlakul karimah.
                </p>
                <p class="about-text">
                    Dengan menggabungkan kurikulum nasional dan kurikulum khas madrasah, kami memastikan siswa tidak hanya unggul dalam akademik, tetapi juga kuat dalam pemahaman agama dan praktik ibadah sehari-hari.
                </p>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-book-fill"></i>
                    </div>
                    <h3 class="feature-title">Kurikulum Terintegrasi</h3>
                    <p class="feature-text">
                        Menggabungkan kurikulum nasional dengan kurikulum khas madrasah untuk menghasilkan lulusan yang unggul dalam akademik dan agama
                    </p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <h3 class="feature-title">Tenaga Pendidik Profesional</h3>
                    <p class="feature-text">
                        Didukung oleh guru-guru yang berkompeten, berpengalaman, dan memiliki dedikasi tinggi dalam mendidik generasi Qur'ani
                    </p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-laptop-fill"></i>
                    </div>
                    <h3 class="feature-title">Fasilitas Modern</h3>
                    <p class="feature-text">
                        Dilengkapi dengan fasilitas pembelajaran modern termasuk e-learning, laboratorium, dan perpustakaan digital
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="stats-section">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <div class="stat-item">
                    <span class="stat-number">{{ \App\Models\Siswa::count() }}+</span>
                    <p class="stat-label">Siswa Aktif</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="stat-item">
                    <span class="stat-number">{{ \App\Models\Guru::count() }}+</span>
                    <p class="stat-label">Guru Profesional</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="stat-item">
                    <span class="stat-number">{{ \App\Models\Kelas::count() }}+</span>
                    <p class="stat-label">Ruang Kelas</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="stat-item">
                    <span class="stat-number">14+</span>
                    <p class="stat-label">Tahun Berpengalaman</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="values-section">
    <div class="container">
        <h2 class="section-title-about">Nilai-Nilai Kami</h2>
        <div class="section-divider-about"></div>
        
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="bi bi-heart-fill"></i>
                    </div>
                    <h3 class="value-title">Ikhlas</h3>
                    <p class="value-text">
                        Melakukan segala sesuatu dengan niat yang tulus karena Allah SWT, tanpa mengharap pujian atau imbalan duniawi
                    </p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="bi bi-hand-thumbs-up-fill"></i>
                    </div>
                    <h3 class="value-title">Beramal</h3>
                    <p class="value-text">
                        Mengamalkan ilmu yang diperoleh untuk kebaikan diri sendiri, keluarga, masyarakat, dan agama
                    </p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <h3 class="value-title">Akhlakul Karimah</h3>
                    <p class="value-text">
                        Memiliki akhlak yang mulia, sopan santun, dan menjadi teladan bagi lingkungan sekitar
                    </p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="bi bi-lightbulb-fill"></i>
                    </div>
                    <h3 class="value-title">Berilmu</h3>
                    <p class="value-text">
                        Menuntut ilmu secara terus menerus, baik ilmu agama maupun ilmu umum untuk bekal kehidupan
                    </p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="bi bi-shield-fill-check"></i>
                    </div>
                    <h3 class="value-title">Amanah</h3>
                    <p class="value-text">
                        Menjaga kepercayaan yang diberikan dengan penuh tanggung jawab dan kejujuran
                    </p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <h3 class="value-title">Ukhuwah</h3>
                    <p class="value-text">
                        Membangun persaudaraan yang kuat sesama muslim dan menjalin hubungan baik dengan semua orang
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
