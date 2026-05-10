@extends('frontend.layouts.app')

@section('title', 'Kontak - MA Ikhlas Beramal')

@section('content')

<style>
    .contact-hero {
        background: linear-gradient(135deg, #2d5016 0%, #5a8c2e 100%);
        padding: 120px 0 80px;
        margin-top: 85px;
        color: white;
        text-align: center;
    }
    
    .contact-hero h1 {
        font-size: 48px;
        font-weight: 800;
        margin-bottom: 20px;
    }
    
    .contact-hero p {
        font-size: 20px;
        opacity: 0.95;
        max-width: 700px;
        margin: 0 auto;
    }
    
    .contact-section {
        padding: 80px 0;
    }
    
    .contact-card {
        background: white;
        border-radius: 20px;
        padding: 50px;
        box-shadow: 0 10px 40px rgba(0,0,0,0.1);
        margin-top: -60px;
        position: relative;
        z-index: 10;
    }
    
    .contact-info-card {
        background: #f8f9fa;
        border-radius: 20px;
        padding: 40px;
        height: 100%;
        border-left: 5px solid #ffd700;
    }
    
    .contact-info-item {
        display: flex;
        align-items: flex-start;
        gap: 20px;
        margin-bottom: 30px;
    }
    
    .contact-info-item:last-child {
        margin-bottom: 0;
    }
    
    .contact-icon {
        width: 50px;
        height: 50px;
        background: linear-gradient(135deg, #2d5016, #5a8c2e);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 24px;
        flex-shrink: 0;
    }
    
    .contact-info-content h5 {
        font-size: 18px;
        font-weight: 700;
        color: #2d5016;
        margin-bottom: 8px;
    }
    
    .contact-info-content p {
        font-size: 16px;
        color: #666;
        margin: 0;
        line-height: 1.6;
    }
    
    .form-label {
        font-weight: 600;
        color: #333;
        margin-bottom: 10px;
        font-size: 15px;
    }
    
    .form-control {
        border: 2px solid #e0e0e0;
        border-radius: 12px;
        padding: 14px 18px;
        font-size: 15px;
        transition: all 0.3s ease;
    }
    
    .form-control:focus {
        border-color: #2d5016;
        box-shadow: 0 0 0 0.2rem rgba(45, 80, 22, 0.15);
    }
    
    .btn-submit {
        background: linear-gradient(135deg, #2d5016, #5a8c2e);
        color: white;
        padding: 16px 50px;
        border-radius: 50px;
        border: none;
        font-weight: 700;
        font-size: 16px;
        transition: all 0.3s ease;
        cursor: pointer;
    }
    
    .btn-submit:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 35px rgba(45, 80, 22, 0.3);
    }
    
    .section-title-contact {
        font-size: 32px;
        font-weight: 800;
        color: #2d5016;
        margin-bottom: 15px;
    }
    
    .section-subtitle-contact {
        font-size: 16px;
        color: #666;
        margin-bottom: 40px;
    }
    
    @media (max-width: 768px) {
        .contact-hero {
            padding: 100px 0 60px;
            margin-top: 70px;
        }
        
        .contact-hero h1 {
            font-size: 36px;
        }
        
        .contact-hero p {
            font-size: 18px;
        }
        
        .contact-card {
            padding: 30px 20px;
        }
        
        .contact-info-card {
            padding: 30px 20px;
            margin-bottom: 30px;
        }
    }
</style>

<!-- Hero Section -->
<section class="contact-hero">
    <div class="container">
        <h1>Hubungi Kami</h1>
        <p>Kami siap membantu Anda. Jangan ragu untuk menghubungi kami jika ada pertanyaan tentang pendaftaran, program, atau informasi lainnya.</p>
    </div>
</section>

<!-- Contact Section -->
<section class="contact-section">
    <div class="container">
        <div class="contact-card">
            <div class="row g-5">
                <!-- Contact Form -->
                <div class="col-lg-7">
                    <h2 class="section-title-contact">Kirim Pesan</h2>
                    <p class="section-subtitle-contact">Isi formulir di bawah ini dan kami akan segera menghubungi Anda</p>
                    
                    <form action="#" method="POST">
                        @csrf
                        <div class="row g-4">
                            <div class="col-md-6">
                                <label for="name" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama lengkap" required>
                            </div>
                            
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="nama@email.com" required>
                            </div>
                            
                            <div class="col-12">
                                <label for="phone" class="form-label">No. Telepon</label>
                                <input type="tel" class="form-control" id="phone" name="phone" placeholder="08xx xxxx xxxx" required>
                            </div>
                            
                            <div class="col-12">
                                <label for="subject" class="form-label">Subjek</label>
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Perihal pesan Anda" required>
                            </div>
                            
                            <div class="col-12">
                                <label for="message" class="form-label">Pesan</label>
                                <textarea class="form-control" id="message" name="message" rows="6" placeholder="Tulis pesan Anda di sini..." required></textarea>
                            </div>
                            
                            <div class="col-12">
                                <button type="submit" class="btn-submit">
                                    <i class="bi bi-send-fill me-2"></i>Kirim Pesan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                
                <!-- Contact Info -->
                <div class="col-lg-5">
                    <div class="contact-info-card">
                        <h3 class="section-title-contact mb-4">Informasi Kontak</h3>
                        
                        <div class="contact-info-item">
                            <div class="contact-icon">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <div class="contact-info-content">
                                <h5>Alamat</h5>
                                <p>Jl. Pendidikan No. 123<br>Kota, Provinsi 12345<br>Indonesia</p>
                            </div>
                        </div>
                        
                        <div class="contact-info-item">
                            <div class="contact-icon">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <div class="contact-info-content">
                                <h5>Telepon</h5>
                                <p>+62 812-3456-7890<br>+62 21-1234-5678</p>
                            </div>
                        </div>
                        
                        <div class="contact-info-item">
                            <div class="contact-icon">
                                <i class="bi bi-envelope-fill"></i>
                            </div>
                            <div class="contact-info-content">
                                <h5>Email</h5>
                                <p>info@maikhlasbera mal.sch.id<br>admin@maikhlasbera mal.sch.id</p>
                            </div>
                        </div>
                        
                        <div class="contact-info-item">
                            <div class="contact-icon">
                                <i class="bi bi-clock-fill"></i>
                            </div>
                            <div class="contact-info-content">
                                <h5>Jam Operasional</h5>
                                <p>Senin - Jumat: 07:00 - 16:00<br>Sabtu: 07:00 - 12:00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
