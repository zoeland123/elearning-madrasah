@extends('frontend.layouts.app')
@section('title','Kegiatan - MA Ikhlas Beramal')
@section('content')

<style>
    .event-hero {
        background: linear-gradient(135deg, #2d5016 0%, #5a8c2e 100%);
        padding: 120px 0 80px;
        margin-top: 85px;
        color: white;
        text-align: center;
    }
    
    .event-hero h1 {
        font-size: 48px;
        font-weight: 800;
        margin-bottom: 20px;
    }
    
    .event-hero p {
        font-size: 20px;
        opacity: 0.95;
        max-width: 700px;
        margin: 0 auto;
    }
    
    .event-section {
        padding: 80px 0;
        background: #f8f9fa;
    }
    
    .event-card {
        background: white;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        transition: all 0.4s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
    }
    
    .event-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 50px rgba(45, 80, 22, 0.15);
    }
    
    .event-image {
        position: relative;
        overflow: hidden;
        height: 250px;
    }
    
    .event-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.4s ease;
    }
    
    .event-card:hover .event-image img {
        transform: scale(1.1);
    }
    
    .event-badge {
        position: absolute;
        top: 20px;
        right: 20px;
        background: linear-gradient(135deg, #ffd700, #ffed4e);
        color: #2d5016;
        padding: 10px 20px;
        border-radius: 50px;
        font-weight: 700;
        font-size: 14px;
        box-shadow: 0 5px 15px rgba(255, 215, 0, 0.4);
    }
    
    .event-content {
        padding: 30px;
        flex: 1;
        display: flex;
        flex-direction: column;
    }
    
    .event-location {
        display: flex;
        align-items: center;
        gap: 10px;
        color: #666;
        font-size: 14px;
        margin-bottom: 15px;
    }
    
    .event-location ion-icon {
        font-size: 20px;
        color: #2d5016;
    }
    
    .event-title {
        font-size: 22px;
        font-weight: 700;
        color: #2d5016;
        margin-bottom: 15px;
        line-height: 1.4;
        flex: 1;
    }
    
    .event-title a {
        color: #2d5016;
        text-decoration: none;
        transition: color 0.3s ease;
    }
    
    .event-title a:hover {
        color: #5a8c2e;
    }
    
    .event-description {
        color: #666;
        font-size: 15px;
        line-height: 1.6;
        margin-bottom: 20px;
    }
    
    .event-btn {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 12px 25px;
        background: linear-gradient(135deg, #2d5016, #5a8c2e);
        color: white;
        text-decoration: none;
        border-radius: 50px;
        font-weight: 700;
        font-size: 14px;
        transition: all 0.3s ease;
        align-self: flex-start;
    }
    
    .event-btn:hover {
        transform: translateX(5px);
        box-shadow: 0 5px 15px rgba(45, 80, 22, 0.3);
        color: white;
    }
    
    .section-title-event {
        font-size: 42px;
        font-weight: 800;
        color: #2d5016;
        text-align: center;
        margin-bottom: 15px;
    }
    
    .section-divider-event {
        width: 100px;
        height: 5px;
        background: linear-gradient(90deg, #2d5016, #ffd700, #2d5016);
        margin: 0 auto 60px;
        border-radius: 10px;
    }
    
    @media (max-width: 768px) {
        .event-hero {
            padding: 100px 0 60px;
            margin-top: 70px;
        }
        
        .event-hero h1 {
            font-size: 36px;
        }
        
        .event-hero p {
            font-size: 18px;
        }
        
        .event-section {
            padding: 60px 0;
        }
        
        .section-title-event {
            font-size: 32px;
        }
    }
</style>

<!-- Hero Section -->
<section class="event-hero">
    <div class="container">
        <h1>Kegiatan Madrasah</h1>
        <p>Berbagai kegiatan dan acara yang diselenggarakan untuk mengembangkan potensi siswa dan mempererat ukhuwah islamiyah</p>
    </div>
</section>

<!-- Event Section -->
<section class="event-section">
    <div class="container">
        <h2 class="section-title-event">Kegiatan Mendatang</h2>
        <div class="section-divider-event"></div>
        
        <div class="row g-4">
            <!-- Event 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="event-card">
                    <div class="event-image">
                        <img src="{{ asset('frontend/assets/images/event-1.jpg') }}" alt="Pesantren Ramadhan">
                        <div class="event-badge">
                            <i class="bi bi-calendar-event me-1"></i>15 Mar 2024
                        </div>
                    </div>
                    <div class="event-content">
                        <div class="event-location">
                            <ion-icon name="location-outline"></ion-icon>
                            <span>Aula Madrasah</span>
                        </div>
                        <h3 class="event-title">
                            <a href="#">Pesantren Ramadhan 1445 H</a>
                        </h3>
                        <p class="event-description">
                            Kegiatan pesantren kilat selama bulan Ramadhan dengan berbagai kajian dan kegiatan ibadah bersama
                        </p>
                        <a href="#" class="event-btn">
                            <span>Lihat Detail</span>
                            <ion-icon name="arrow-forward-outline"></ion-icon>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Event 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="event-card">
                    <div class="event-image">
                        <img src="{{ asset('frontend/assets/images/event-2.jpg') }}" alt="Lomba Tahfidz">
                        <div class="event-badge">
                            <i class="bi bi-calendar-event me-1"></i>20 Apr 2024
                        </div>
                    </div>
                    <div class="event-content">
                        <div class="event-location">
                            <ion-icon name="location-outline"></ion-icon>
                            <span>Masjid Madrasah</span>
                        </div>
                        <h3 class="event-title">
                            <a href="#">Lomba Tahfidz Al-Qur'an</a>
                        </h3>
                        <p class="event-description">
                            Kompetisi menghafal Al-Qur'an tingkat madrasah untuk memotivasi siswa dalam menghafal Al-Qur'an
                        </p>
                        <a href="#" class="event-btn">
                            <span>Lihat Detail</span>
                            <ion-icon name="arrow-forward-outline"></ion-icon>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Event 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="event-card">
                    <div class="event-image">
                        <img src="{{ asset('frontend/assets/images/event-3.jpg') }}" alt="Study Tour">
                        <div class="event-badge">
                            <i class="bi bi-calendar-event me-1"></i>10 Mei 2024
                        </div>
                    </div>
                    <div class="event-content">
                        <div class="event-location">
                            <ion-icon name="location-outline"></ion-icon>
                            <span>Museum & Kampus</span>
                        </div>
                        <h3 class="event-title">
                            <a href="#">Study Tour Edukatif</a>
                        </h3>
                        <p class="event-description">
                            Kunjungan edukatif ke museum sejarah Islam dan kampus-kampus ternama untuk menambah wawasan siswa
                        </p>
                        <a href="#" class="event-btn">
                            <span>Lihat Detail</span>
                            <ion-icon name="arrow-forward-outline"></ion-icon>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Event 4 -->
            <div class="col-lg-4 col-md-6">
                <div class="event-card">
                    <div class="event-image">
                        <img src="{{ asset('frontend/assets/images/event-1.jpg') }}" alt="Seminar Parenting">
                        <div class="event-badge">
                            <i class="bi bi-calendar-event me-1"></i>25 Mei 2024
                        </div>
                    </div>
                    <div class="event-content">
                        <div class="event-location">
                            <ion-icon name="location-outline"></ion-icon>
                            <span>Aula Madrasah</span>
                        </div>
                        <h3 class="event-title">
                            <a href="#">Seminar Parenting Islami</a>
                        </h3>
                        <p class="event-description">
                            Seminar untuk orang tua tentang pola asuh anak dalam perspektif Islam dengan narasumber berpengalaman
                        </p>
                        <a href="#" class="event-btn">
                            <span>Lihat Detail</span>
                            <ion-icon name="arrow-forward-outline"></ion-icon>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Event 5 -->
            <div class="col-lg-4 col-md-6">
                <div class="event-card">
                    <div class="event-image">
                        <img src="{{ asset('frontend/assets/images/event-2.jpg') }}" alt="Pekan Olahraga">
                        <div class="event-badge">
                            <i class="bi bi-calendar-event me-1"></i>5 Jun 2024
                        </div>
                    </div>
                    <div class="event-content">
                        <div class="event-location">
                            <ion-icon name="location-outline"></ion-icon>
                            <span>Lapangan Madrasah</span>
                        </div>
                        <h3 class="event-title">
                            <a href="#">Pekan Olahraga & Seni</a>
                        </h3>
                        <p class="event-description">
                            Kompetisi olahraga dan seni antar kelas untuk mengembangkan bakat dan sportivitas siswa
                        </p>
                        <a href="#" class="event-btn">
                            <span>Lihat Detail</span>
                            <ion-icon name="arrow-forward-outline"></ion-icon>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Event 6 -->
            <div class="col-lg-4 col-md-6">
                <div class="event-card">
                    <div class="event-image">
                        <img src="{{ asset('frontend/assets/images/event-3.jpg') }}" alt="Wisuda">
                        <div class="event-badge">
                            <i class="bi bi-calendar-event me-1"></i>20 Jun 2024
                        </div>
                    </div>
                    <div class="event-content">
                        <div class="event-location">
                            <ion-icon name="location-outline"></ion-icon>
                            <span>Gedung Serbaguna</span>
                        </div>
                        <h3 class="event-title">
                            <a href="#">Wisuda & Pelepasan Siswa</a>
                        </h3>
                        <p class="event-description">
                            Acara wisuda dan pelepasan siswa kelas XII yang telah menyelesaikan pendidikan di madrasah
                        </p>
                        <a href="#" class="event-btn">
                            <span>Lihat Detail</span>
                            <ion-icon name="arrow-forward-outline"></ion-icon>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
