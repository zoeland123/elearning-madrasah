@extends('guru.layouts.app')
@section('title', 'Profil Saya')
@section('content')

<style>
.profil-hero {
    background: linear-gradient(135deg, #1e3a8a 0%, #1d4ed8 100%);
    border-radius: 20px;
    padding: 35px;
    position: relative;
    overflow: hidden;
    margin-bottom: 24px;
}
.profil-hero::before {
    content: '';
    position: absolute;
    top: -60px; right: -60px;
    width: 200px; height: 200px;
    background: rgba(255,255,255,0.05);
    border-radius: 50%;
}
.profil-hero::after {
    content: '';
    position: absolute;
    bottom: -40px; left: 200px;
    width: 150px; height: 150px;
    background: rgba(255,255,255,0.03);
    border-radius: 50%;
}
.avatar-wrap {
    position: relative;
    display: inline-block;
}
.avatar-img {
    width: 110px; height: 110px;
    border-radius: 50%;
    object-fit: cover;
    border: 4px solid rgba(255,255,255,0.3);
    box-shadow: 0 8px 25px rgba(0,0,0,0.3);
}
.avatar-initials {
    width: 110px; height: 110px;
    border-radius: 50%;
    background: linear-gradient(135deg, #fbbf24, #f59e0b);
    display: flex; align-items: center; justify-content: center;
    font-size: 42px; font-weight: 800; color: #1e3a8a;
    border: 4px solid rgba(255,255,255,0.3);
    box-shadow: 0 8px 25px rgba(0,0,0,0.3);
}
.avatar-upload-btn {
    position: absolute;
    bottom: 4px; right: 4px;
    width: 30px; height: 30px;
    background: #fbbf24;
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    cursor: pointer;
    border: 2px solid white;
    transition: all 0.3s;
}
.avatar-upload-btn:hover { background: #f59e0b; transform: scale(1.1); }
.avatar-upload-btn i { color: #1e3a8a; font-size: 13px; }
.info-card {
    background: #ffffff !important;
    border-radius: 16px;
    padding: 24px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.06);
    margin-bottom: 20px;
}
.info-card-title {
    font-size: 15px;
    font-weight: 700;
    color: #1e3a8a;
    margin-bottom: 20px;
    padding-bottom: 12px;
    border-bottom: 2px solid #f0f4ff;
    display: flex;
    align-items: center;
    gap: 8px;
}
.info-row {
    display: flex;
    align-items: center;
    padding: 12px 0;
    border-bottom: 1px solid #f8faff;
}
.info-row:last-child { border-bottom: none; }
.info-label {
    width: 140px;
    font-size: 12px;
    font-weight: 600;
    color: #94a3b8;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    flex-shrink: 0;
}
.info-value {
    font-size: 14px;
    font-weight: 500;
    color: #1e293b !important;
    flex: 1;
}
.stat-box {
    background: rgba(255,255,255,0.15);
    border-radius: 12px;
    padding: 16px 20px;
    text-align: center;
    min-width: 70px;
}
.stat-box .num { font-size: 24px; font-weight: 800; color: #ffffff; }
.stat-box .lbl { font-size: 11px; color: rgba(255,255,255,0.7); font-weight: 600; margin-top: 2px; }
.form-control-custom {
    border: 1px solid #e2e8f0;
    border-radius: 10px;
    padding: 10px 14px;
    font-size: 14px;
    transition: all 0.3s;
    width: 100%;
    background: #f8faff !important;
    color: #1e293b !important;
}
.form-control-custom:focus {
    border-color: #1e3a8a;
    box-shadow: 0 0 0 3px rgba(30,58,138,0.1);
    outline: none;
    background: #ffffff !important;
}
.form-control-custom:read-only {
    background: #f1f5f9 !important;
    color: #64748b !important;
    cursor: not-allowed;
}
select.form-control-custom {
    background: #f8faff !important;
    color: #1e293b !important;
}
textarea.form-control-custom {
    background: #f8faff !important;
    color: #1e293b !important;
    resize: vertical;
}
.btn-save {
    background: linear-gradient(135deg, #1e3a8a, #1d4ed8);
    color: white;
    border: none;
    border-radius: 10px;
    padding: 10px 24px;
    font-weight: 600;
    font-size: 14px;
    cursor: pointer;
    transition: all 0.3s;
}
.btn-save:hover { transform: translateY(-2px); box-shadow: 0 6px 20px rgba(30,58,138,0.4); }
</style>

<div class="page-heading">
    <h3>Profil Saya</h3>
    <p class="text-subtitle text-muted">Kelola informasi pribadi Anda</p>
</div>

<section class="section">

    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert" style="border-radius:12px;border:none;background:#f0fdf4;color:#14532d;">
        <i class="bi bi-check-circle-fill me-2"></i>{{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    @endif

    {{-- Hero Banner --}}
    <div class="profil-hero">
        <div class="d-flex align-items-center gap-4" style="position:relative;z-index:2;">
            {{-- Avatar --}}
            <form action="{{ route('guru.profil.avatar') }}" method="POST" enctype="multipart/form-data" id="avatarForm">
                @csrf
                <div class="avatar-wrap">
                    @if(Auth::user()->avatar)
                        <img src="{{ asset('storage/' . Auth::user()->avatar) }}" alt="Avatar" class="avatar-img">
                    @else
                        <div class="avatar-initials">{{ strtoupper(substr(Auth::user()->name, 0, 1)) }}</div>
                    @endif
                    <label for="avatarInput" class="avatar-upload-btn" title="Ganti foto">
                        <i class="bi bi-camera-fill"></i>
                    </label>
                    <input type="file" id="avatarInput" name="avatar" accept="image/*" style="display:none;" onchange="document.getElementById('avatarForm').submit()">
                </div>
            </form>

            {{-- Info --}}
            <div>
                <h3 style="color:white;font-weight:800;margin-bottom:4px;">{{ Auth::user()->name }}</h3>
                <p style="color:rgba(255,255,255,0.7);margin-bottom:12px;font-size:14px;">
                    <i class="bi bi-person-badge-fill me-1"></i>Guru · MA Ikhlas Beramal
                </p>
                <div class="d-flex gap-2 flex-wrap">
                    <span style="background:rgba(255,255,255,0.15);color:white;border-radius:8px;padding:4px 12px;font-size:12px;font-weight:600;">
                        <i class="bi bi-envelope-fill me-1"></i>{{ Auth::user()->email }}
                    </span>
                    <span style="background:rgba(251,191,36,0.2);color:#fbbf24;border-radius:8px;padding:4px 12px;font-size:12px;font-weight:600;">
                        <i class="bi bi-shield-check-fill me-1"></i>Aktif
                    </span>
                </div>
            </div>

            {{-- Stats --}}
            <div class="d-none d-lg-flex gap-3 ms-auto">
                <div class="stat-box">
                    <div class="num">0</div>
                    <div class="lbl">Kelas</div>
                </div>
                <div class="stat-box">
                    <div class="num">0</div>
                    <div class="lbl">Materi</div>
                </div>
                <div class="stat-box">
                    <div class="num">0</div>
                    <div class="lbl">Soal</div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        {{-- Data Pribadi --}}
        <div class="col-lg-8">
            <div class="info-card">
                <div class="info-card-title">
                    <i class="bi bi-person-fill" style="color:#1e3a8a;"></i>Data Pribadi
                </div>
                <form action="{{ route('guru.profil.update') }}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label style="font-size:12px;font-weight:600;color:#64748b;text-transform:uppercase;letter-spacing:0.5px;margin-bottom:6px;display:block;">Nama Lengkap</label>
                            <input type="text" name="name" class="form-control-custom" value="{{ $user->name }}" required>
                        </div>
                        <div class="col-md-6">
                            <label style="font-size:12px;font-weight:600;color:#64748b;text-transform:uppercase;letter-spacing:0.5px;margin-bottom:6px;display:block;">Email</label>
                            <input type="email" class="form-control-custom" value="{{ $user->email }}" readonly>
                        </div>
                        <div class="col-md-6">
                            <label style="font-size:12px;font-weight:600;color:#64748b;text-transform:uppercase;letter-spacing:0.5px;margin-bottom:6px;display:block;">NIP</label>
                            <input type="text" name="nip" class="form-control-custom" value="{{ $user->nip }}" placeholder="Masukkan NIP">
                        </div>
                        <div class="col-md-6">
                            <label style="font-size:12px;font-weight:600;color:#64748b;text-transform:uppercase;letter-spacing:0.5px;margin-bottom:6px;display:block;">Mata Pelajaran</label>
                            <input type="text" name="mata_pelajaran" class="form-control-custom" value="{{ $user->mata_pelajaran }}" placeholder="Contoh: Matematika">
                        </div>
                        <div class="col-md-6">
                            <label style="font-size:12px;font-weight:600;color:#64748b;text-transform:uppercase;letter-spacing:0.5px;margin-bottom:6px;display:block;">No. Telepon</label>
                            <input type="text" name="phone" class="form-control-custom" value="{{ $user->phone }}" placeholder="Masukkan no. telepon" style="background:#f8faff!important;color:#1e293b!important;">
                        </div>
                        <div class="col-md-6">
                            <label style="font-size:12px;font-weight:600;color:#64748b;text-transform:uppercase;letter-spacing:0.5px;margin-bottom:6px;display:block;">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-control-custom" style="background:#f8faff!important;color:#1e293b!important;">
                                <option value="">-- Pilih --</option>
                                <option value="Laki-laki" {{ $user->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="Perempuan" {{ $user->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label style="font-size:12px;font-weight:600;color:#64748b;text-transform:uppercase;letter-spacing:0.5px;margin-bottom:6px;display:block;">Alamat</label>
                            <textarea name="alamat" class="form-control-custom" rows="3" placeholder="Masukkan alamat lengkap" style="background:#f8faff!important;color:#1e293b!important;">{{ $user->alamat }}</textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn-save">
                                <i class="bi bi-check-circle-fill me-2"></i>Simpan Perubahan
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        {{-- Sidebar Info --}}
        <div class="col-lg-4">
            {{-- Info Akun --}}
            <div class="info-card">
                <div class="info-card-title">
                    <i class="bi bi-shield-lock-fill" style="color:#1e3a8a;"></i>Keamanan Akun
                </div>
                <div class="info-row">
                    <span class="info-label">Status</span>
                    <span class="info-value"><span style="background:#dcfce7;color:#15803d;border-radius:6px;padding:3px 10px;font-size:12px;font-weight:600;">Aktif</span></span>
                </div>
                <div class="info-row">
                    <span class="info-label">Role</span>
                    <span class="info-value"><span style="background:#dbeafe;color:#1d4ed8;border-radius:6px;padding:3px 10px;font-size:12px;font-weight:600;">Guru</span></span>
                </div>
                <div class="info-row">
                    <span class="info-label">Bergabung</span>
                    <span class="info-value">{{ Auth::user()->created_at->format('d M Y') }}</span>
                </div>
                <div class="mt-3">
                    <button class="btn-save w-100" style="background:linear-gradient(135deg,#dc2626,#ef4444);" data-bs-toggle="modal" data-bs-target="#modalPassword">
                        <i class="bi bi-key-fill me-2"></i>Ubah Password
                    </button>
                </div>
            </div>

            {{-- Upload Foto --}}
            <div class="info-card">
                <div class="info-card-title">
                    <i class="bi bi-image-fill" style="color:#1e3a8a;"></i>Foto Profil
                </div>
                <p style="font-size:13px;color:#64748b;margin-bottom:16px;">Klik ikon kamera pada foto untuk mengganti foto profil Anda.</p>
                <div class="text-center">
                    @if(Auth::user()->avatar)
                        <img src="{{ asset('storage/' . Auth::user()->avatar) }}" alt="Avatar" style="width:80px;height:80px;border-radius:50%;object-fit:cover;border:3px solid #dbeafe;">
                    @else
                        <div style="width:80px;height:80px;border-radius:50%;background:linear-gradient(135deg,#fbbf24,#f59e0b);display:flex;align-items:center;justify-content:center;font-size:30px;font-weight:800;color:#1e3a8a;margin:0 auto;border:3px solid #dbeafe;">
                            {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                        </div>
                    @endif
                    <p style="font-size:11px;color:#94a3b8;margin-top:10px;">Format: JPG, PNG · Max 2MB</p>
                </div>
            </div>
        </div>
    </div>

</section>

{{-- Modal Ubah Password --}}
<div class="modal fade" id="modalPassword" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius:16px;border:none;">
            <div class="modal-header" style="background:linear-gradient(135deg,#1e3a8a,#1d4ed8);border-radius:16px 16px 0 0;border:none;">
                <h5 class="modal-title" style="color:white;font-weight:700;"><i class="bi bi-key-fill me-2"></i>Ubah Password</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <form action="{{ route('guru.profil.password') }}" method="POST">
                @csrf
                <div class="modal-body p-4">
                    @if($errors->has('current_password'))
                        <div class="alert alert-danger" style="border-radius:10px;font-size:13px;">{{ $errors->first('current_password') }}</div>
                    @endif
                    <div class="mb-3">
                        <label style="font-size:12px;font-weight:600;color:#64748b;text-transform:uppercase;letter-spacing:0.5px;margin-bottom:6px;display:block;">Password Lama</label>
                        <input type="password" name="current_password" class="form-control-custom" placeholder="Masukkan password lama" required>
                    </div>
                    <div class="mb-3">
                        <label style="font-size:12px;font-weight:600;color:#64748b;text-transform:uppercase;letter-spacing:0.5px;margin-bottom:6px;display:block;">Password Baru</label>
                        <input type="password" name="password" class="form-control-custom" placeholder="Min. 8 karakter" required>
                    </div>
                    <div class="mb-3">
                        <label style="font-size:12px;font-weight:600;color:#64748b;text-transform:uppercase;letter-spacing:0.5px;margin-bottom:6px;display:block;">Konfirmasi Password Baru</label>
                        <input type="password" name="password_confirmation" class="form-control-custom" placeholder="Ulangi password baru" required>
                    </div>
                </div>
                <div class="modal-footer" style="border:none;padding:16px 24px;">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="border-radius:10px;">Batal</button>
                    <button type="submit" class="btn-save">
                        <i class="bi bi-check-circle-fill me-2"></i>Simpan Password
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
