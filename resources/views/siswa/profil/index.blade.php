@extends('siswa.layouts.app')
@section('title', 'Profil Saya')
@section('content')

<style>
.profil-hero-siswa {
    background: linear-gradient(135deg, #14532d 0%, #15803d 100%);
    border-radius: 20px;
    padding: 35px;
    position: relative;
    overflow: hidden;
    margin-bottom: 24px;
}
.profil-hero-siswa::before {
    content: '';
    position: absolute;
    top: -60px; right: -60px;
    width: 200px; height: 200px;
    background: rgba(255,255,255,0.05);
    border-radius: 50%;
}
.avatar-wrap-s { position: relative; display: inline-block; }
.avatar-img-s {
    width: 110px; height: 110px;
    border-radius: 50%;
    object-fit: cover;
    border: 4px solid rgba(255,255,255,0.3);
    box-shadow: 0 8px 25px rgba(0,0,0,0.3);
}
.avatar-initials-s {
    width: 110px; height: 110px;
    border-radius: 50%;
    background: linear-gradient(135deg, #fde047, #facc15);
    display: flex; align-items: center; justify-content: center;
    font-size: 42px; font-weight: 800; color: #14532d;
    border: 4px solid rgba(255,255,255,0.3);
    box-shadow: 0 8px 25px rgba(0,0,0,0.3);
}
.avatar-upload-s {
    position: absolute;
    bottom: 4px; right: 4px;
    width: 30px; height: 30px;
    background: #fde047;
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    cursor: pointer;
    border: 2px solid white;
    transition: all 0.3s;
}
.avatar-upload-s:hover { background: #facc15; transform: scale(1.1); }
.avatar-upload-s i { color: #14532d; font-size: 13px; }
.info-card-s {
    background: white;
    border-radius: 16px;
    padding: 24px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.06);
    margin-bottom: 20px;
}
.info-card-title-s {
    font-size: 15px;
    font-weight: 700;
    color: #14532d;
    margin-bottom: 20px;
    padding-bottom: 12px;
    border-bottom: 2px solid #f0fdf4;
    display: flex;
    align-items: center;
    gap: 8px;
}
.info-row-s {
    display: flex;
    align-items: center;
    padding: 12px 0;
    border-bottom: 1px solid #f8fffe;
}
.info-row-s:last-child { border-bottom: none; }
.info-label-s {
    width: 140px;
    font-size: 12px;
    font-weight: 600;
    color: #94a3b8;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    flex-shrink: 0;
}
.info-value-s {
    font-size: 14px;
    font-weight: 500;
    color: #1e293b;
    flex: 1;
}
.stat-box-s {
    background: #f0fdf4;
    border-radius: 12px;
    padding: 16px;
    text-align: center;
}
.stat-box-s .num { font-size: 24px; font-weight: 800; color: #14532d; }
.stat-box-s .lbl { font-size: 11px; color: #64748b; font-weight: 600; margin-top: 2px; }
.form-ctrl-s {
    border: 1px solid #e2e8f0;
    border-radius: 10px;
    padding: 10px 14px;
    font-size: 14px;
    transition: all 0.3s;
    width: 100%;
    background: #f8fff8 !important;
    color: #1e293b !important;
}
.form-ctrl-s:focus {
    border-color: #14532d;
    box-shadow: 0 0 0 3px rgba(20,83,45,0.1);
    outline: none;
    background: #ffffff !important;
}
.form-ctrl-s:read-only {
    background: #f1f5f9 !important;
    color: #64748b !important;
    cursor: not-allowed;
}
select.form-ctrl-s, textarea.form-ctrl-s {
    background: #f8fff8 !important;
    color: #1e293b !important;
}
textarea.form-ctrl-s { resize: vertical; }
.btn-save-s {
    background: linear-gradient(135deg, #14532d, #15803d);
    color: white;
    border: none;
    border-radius: 10px;
    padding: 10px 24px;
    font-weight: 600;
    font-size: 14px;
    cursor: pointer;
    transition: all 0.3s;
}
.btn-save-s:hover { transform: translateY(-2px); box-shadow: 0 6px 20px rgba(20,83,45,0.4); }
</style>

<div class="page-heading">
    <h3>Profil Saya</h3>
    <p class="text-subtitle text-muted">Kelola informasi pribadi Anda</p>
</div>

<section class="section">

    @if(session('success'))
    <div class="alert alert-dismissible fade show" role="alert" style="border-radius:12px;border:none;background:#f0fdf4;color:#14532d;">
        <i class="bi bi-check-circle-fill me-2"></i>{{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    @endif

    {{-- Hero Banner --}}
    <div class="profil-hero-siswa">
        <div class="d-flex align-items-center gap-4" style="position:relative;z-index:2;">
            {{-- Avatar --}}
            <form action="{{ route('siswa.profil.avatar') }}" method="POST" enctype="multipart/form-data" id="avatarFormSiswa">
                @csrf
                <div class="avatar-wrap-s">
                    @if(Auth::user()->avatar)
                        <img src="{{ asset('storage/' . Auth::user()->avatar) }}" alt="Avatar" class="avatar-img-s">
                    @else
                        <div class="avatar-initials-s">{{ strtoupper(substr(Auth::user()->name, 0, 1)) }}</div>
                    @endif
                    <label for="avatarInputSiswa" class="avatar-upload-s" title="Ganti foto">
                        <i class="bi bi-camera-fill"></i>
                    </label>
                    <input type="file" id="avatarInputSiswa" name="avatar" accept="image/*" style="display:none;" onchange="document.getElementById('avatarFormSiswa').submit()">
                </div>
            </form>

            {{-- Info --}}
            <div>
                <h3 style="color:white;font-weight:800;margin-bottom:4px;">{{ Auth::user()->name }}</h3>
                <p style="color:rgba(255,255,255,0.7);margin-bottom:12px;font-size:14px;">
                    <i class="bi bi-mortarboard-fill me-1"></i>Siswa · MA Ikhlas Beramal
                </p>
                <div class="d-flex gap-2 flex-wrap">
                    <span style="background:rgba(255,255,255,0.15);color:white;border-radius:8px;padding:4px 12px;font-size:12px;font-weight:600;">
                        <i class="bi bi-envelope-fill me-1"></i>{{ Auth::user()->email }}
                    </span>
                    <span style="background:rgba(253,224,71,0.2);color:#fde047;border-radius:8px;padding:4px 12px;font-size:12px;font-weight:600;">
                        <i class="bi bi-shield-check-fill me-1"></i>Aktif
                    </span>
                </div>
            </div>

            {{-- Stats --}}
            <div class="d-none d-lg-flex gap-3 ms-auto">
                <div class="stat-box-s">
                    <div class="num">0</div>
                    <div class="lbl">Nilai</div>
                </div>
                <div class="stat-box-s">
                    <div class="num">0%</div>
                    <div class="lbl">Kehadiran</div>
                </div>
                <div class="stat-box-s">
                    <div class="num">0</div>
                    <div class="lbl">Tugas</div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        {{-- Data Pribadi --}}
        <div class="col-lg-8">
            <div class="info-card-s">
                <div class="info-card-title-s">
                    <i class="bi bi-person-fill" style="color:#14532d;"></i>Data Pribadi
                </div>
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label style="font-size:12px;font-weight:600;color:#64748b;text-transform:uppercase;letter-spacing:0.5px;margin-bottom:6px;display:block;">Nama Lengkap</label>
                            <input type="text" class="form-ctrl-s" value="{{ Auth::user()->name }}" readonly>
                        </div>
                        <div class="col-md-6">
                            <label style="font-size:12px;font-weight:600;color:#64748b;text-transform:uppercase;letter-spacing:0.5px;margin-bottom:6px;display:block;">Email</label>
                            <input type="email" class="form-ctrl-s" value="{{ Auth::user()->email }}" readonly>
                        </div>
                        <div class="col-md-6">
                            <label style="font-size:12px;font-weight:600;color:#64748b;text-transform:uppercase;letter-spacing:0.5px;margin-bottom:6px;display:block;">Username</label>
                            <input type="text" class="form-ctrl-s" value="{{ Auth::user()->username ?? '-' }}" readonly>
                        </div>
                        <div class="col-md-6">
                            <label style="font-size:12px;font-weight:600;color:#64748b;text-transform:uppercase;letter-spacing:0.5px;margin-bottom:6px;display:block;">NISN</label>
                            <input type="text" class="form-ctrl-s" value="1234567890" readonly>
                        </div>
                        <div class="col-md-6">
                            <label style="font-size:12px;font-weight:600;color:#64748b;text-transform:uppercase;letter-spacing:0.5px;margin-bottom:6px;display:block;">Kelas</label>
                            <input type="text" class="form-ctrl-s" value="XII IPA 1" readonly>
                        </div>
                        <div class="col-md-6">
                            <label style="font-size:12px;font-weight:600;color:#64748b;text-transform:uppercase;letter-spacing:0.5px;margin-bottom:6px;display:block;">Jenis Kelamin</label>
                            <select class="form-ctrl-s">
                                <option>Laki-laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label style="font-size:12px;font-weight:600;color:#64748b;text-transform:uppercase;letter-spacing:0.5px;margin-bottom:6px;display:block;">No. Telepon</label>
                            <input type="text" class="form-ctrl-s" placeholder="Masukkan no. telepon">
                        </div>
                        <div class="col-md-6">
                            <label style="font-size:12px;font-weight:600;color:#64748b;text-transform:uppercase;letter-spacing:0.5px;margin-bottom:6px;display:block;">Tanggal Lahir</label>
                            <input type="date" class="form-ctrl-s">
                        </div>
                        <div class="col-12">
                            <label style="font-size:12px;font-weight:600;color:#64748b;text-transform:uppercase;letter-spacing:0.5px;margin-bottom:6px;display:block;">Alamat</label>
                            <textarea class="form-ctrl-s" rows="3" placeholder="Masukkan alamat lengkap"></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn-save-s">
                                <i class="bi bi-check-circle-fill me-2"></i>Simpan Perubahan
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        {{-- Sidebar --}}
        <div class="col-lg-4">
            {{-- Info Akun --}}
            <div class="info-card-s">
                <div class="info-card-title-s">
                    <i class="bi bi-shield-lock-fill" style="color:#14532d;"></i>Info Akun
                </div>
                <div class="info-row-s">
                    <span class="info-label-s">Status</span>
                    <span class="info-value-s"><span style="background:#dcfce7;color:#15803d;border-radius:6px;padding:3px 10px;font-size:12px;font-weight:600;">Aktif</span></span>
                </div>
                <div class="info-row-s">
                    <span class="info-label-s">Role</span>
                    <span class="info-value-s"><span style="background:#f0fdf4;color:#14532d;border-radius:6px;padding:3px 10px;font-size:12px;font-weight:600;">Siswa</span></span>
                </div>
                <div class="info-row-s">
                    <span class="info-label-s">Bergabung</span>
                    <span class="info-value-s">{{ Auth::user()->created_at->format('d M Y') }}</span>
                </div>
                <div class="mt-3">
                    <button class="btn-save-s w-100" style="background:linear-gradient(135deg,#dc2626,#ef4444);">
                        <i class="bi bi-key-fill me-2"></i>Ubah Password
                    </button>
                </div>
            </div>

            {{-- Foto Profil --}}
            <div class="info-card-s">
                <div class="info-card-title-s">
                    <i class="bi bi-image-fill" style="color:#14532d;"></i>Foto Profil
                </div>
                <p style="font-size:13px;color:#64748b;margin-bottom:16px;">Klik ikon kamera pada foto untuk mengganti foto profil Anda.</p>
                <div class="text-center">
                    @if(Auth::user()->avatar)
                        <img src="{{ asset('storage/' . Auth::user()->avatar) }}" alt="Avatar" style="width:80px;height:80px;border-radius:50%;object-fit:cover;border:3px solid #dcfce7;">
                    @else
                        <div style="width:80px;height:80px;border-radius:50%;background:linear-gradient(135deg,#fde047,#facc15);display:flex;align-items:center;justify-content:center;font-size:30px;font-weight:800;color:#14532d;margin:0 auto;border:3px solid #dcfce7;">
                            {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                        </div>
                    @endif
                    <p style="font-size:11px;color:#94a3b8;margin-top:10px;">Format: JPG, PNG · Max 2MB</p>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection
