<style>
.navbar-siswa {
    background: linear-gradient(135deg, #14532d 0%, #15803d 100%);
    box-shadow: 0 2px 15px rgba(20,83,45,0.4);
    padding: 0 20px;
    height: 64px;
    display: flex;
    align-items: center;
}

.navbar-siswa .nav-search input:focus {
    background: rgba(255,255,255,0.15);
    border-color: rgba(255,255,255,0.3);
    width: 240px;
}

.nav-badge-siswa {
    position: absolute;
    top: -4px;
    right: -4px;
    width: 17px;
    height: 17px;
    background: #ef4444;
    border-radius: 50%;
    font-size: 9px;
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    border: 2px solid #15803d;
}

.nav-avatar-siswa {
    width: 32px;
    height: 32px;
    border-radius: 8px;
    overflow: hidden;
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, #fde047, #facc15);
    font-weight: 700;
    color: #14532d;
    font-size: 13px;
}

.nav-avatar-siswa img { width: 100%; height: 100%; object-fit: cover; }
</style>

<header>
    <nav class="navbar-siswa">
        {{-- Burger --}}
        <a href="#" class="burger-btn d-block me-2">
            <i class="bi bi-justify fs-4" style="color:white;"></i>
        </a>

        {{-- Search --}}
        <div class="nav-search d-none d-md-block" style="position:relative;margin-left:16px;">
            <i class="bi bi-search" style="position:absolute;left:11px;top:50%;transform:translateY(-50%);color:rgba(255,255,255,0.4);font-size:13px;pointer-events:none;"></i>
            <input type="text" placeholder="Cari materi, pelajaran..."
                style="background:rgba(255,255,255,0.1);border:1px solid rgba(255,255,255,0.15);border-radius:8px;padding:7px 12px 7px 32px;color:white;font-size:13px;width:200px;outline:none;transition:all 0.3s;"
                onfocus="this.style.width='240px';this.style.background='rgba(255,255,255,0.15)'"
                onblur="this.style.width='200px';this.style.background='rgba(255,255,255,0.1)'">
        </div>

        {{-- Right side --}}
        <div style="display:flex;align-items:center;gap:8px;margin-left:auto;">

            {{-- Tanggal --}}
            <div class="d-none d-lg-flex align-items-center gap-1"
                style="background:rgba(255,255,255,0.08);border:1px solid rgba(255,255,255,0.12);border-radius:8px;padding:6px 12px;color:rgba(255,255,255,0.7);font-size:12px;white-space:nowrap;">
                <i class="bi bi-calendar3 me-1"></i>
                {{ \Carbon\Carbon::now()->locale('id')->isoFormat('ddd, D MMM Y') }}
            </div>

            {{-- Notifikasi --}}
            <div class="dropdown">
                <a href="#" style="position:relative;width:38px;height:38px;background:rgba(255,255,255,0.1);border:1px solid rgba(255,255,255,0.12);border-radius:10px;display:flex;align-items:center;justify-content:center;text-decoration:none;" data-bs-toggle="dropdown">
                    <i class="bi bi-bell-fill" style="color:white;font-size:16px;"></i>
                    <span class="nav-badge-siswa">3</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" style="border-radius:14px;border:none;box-shadow:0 8px 30px rgba(0,0,0,0.15);padding:8px;min-width:290px;">
                    <li class="px-3 py-2">
                        <h6 class="mb-0 fw-700" style="color:#14532d;">Notifikasi</h6>
                    </li>
                    <li>
                        <a href="{{ route('siswa.elearning') }}" style="display:flex;align-items:center;gap:10px;padding:10px 12px;border-radius:10px;text-decoration:none;transition:background 0.2s;" onmouseover="this.style.background='#f0fdf4'" onmouseout="this.style.background='transparent'">
                            <div style="width:36px;height:36px;border-radius:9px;background:#dcfce7;color:#15803d;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                                <i class="bi bi-book-fill"></i>
                            </div>
                            <div>
                                <p class="mb-0" style="font-size:13px;font-weight:600;color:#1e293b;">Materi Baru</p>
                                <small class="text-muted">Matematika - Trigonometri</small>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('siswa.nilai') }}" style="display:flex;align-items:center;gap:10px;padding:10px 12px;border-radius:10px;text-decoration:none;transition:background 0.2s;" onmouseover="this.style.background='#f0fdf4'" onmouseout="this.style.background='transparent'">
                            <div style="width:36px;height:36px;border-radius:9px;background:#fef3c7;color:#b45309;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <div>
                                <p class="mb-0" style="font-size:13px;font-weight:600;color:#1e293b;">Nilai UTS Tersedia</p>
                                <small class="text-muted">Cek nilai terbaru Anda</small>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('siswa.absensi') }}" style="display:flex;align-items:center;gap:10px;padding:10px 12px;border-radius:10px;text-decoration:none;transition:background 0.2s;" onmouseover="this.style.background='#f0fdf4'" onmouseout="this.style.background='transparent'">
                            <div style="width:36px;height:36px;border-radius:9px;background:#dbeafe;color:#1d4ed8;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                                <i class="bi bi-calendar-check-fill"></i>
                            </div>
                            <div>
                                <p class="mb-0" style="font-size:13px;font-weight:600;color:#1e293b;">Absensi Hari Ini</p>
                                <small class="text-muted">Sudah tercatat</small>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>

            {{-- User --}}
            <div class="dropdown">
                <a href="#" data-bs-toggle="dropdown"
                    style="display:flex;align-items:center;gap:8px;background:rgba(255,255,255,0.1);border:1px solid rgba(255,255,255,0.15);border-radius:10px;padding:5px 10px 5px 5px;text-decoration:none;">
                    <div class="nav-avatar-siswa">
                        @if(Auth::user()->avatar)
                            <img src="{{ asset('storage/' . Auth::user()->avatar) }}" alt="Avatar">
                        @else
                            {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                        @endif
                    </div>
                    <div class="d-none d-md-block">
                        <p class="mb-0" style="font-size:13px;font-weight:600;color:white;line-height:1.2;white-space:nowrap;">{{ Str::limit(Auth::user()->name, 15) }}</p>
                        <small style="color:rgba(255,255,255,0.5);font-size:11px;">Siswa</small>
                    </div>
                    <i class="bi bi-chevron-down" style="color:rgba(255,255,255,0.5);font-size:11px;"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" style="border-radius:14px;border:none;box-shadow:0 8px 30px rgba(0,0,0,0.15);padding:8px;min-width:220px;">
                    <li class="px-3 py-2 border-bottom mb-1">
                        <p class="mb-0 fw-600" style="font-size:14px;">{{ Auth::user()->name }}</p>
                        <small class="text-muted">{{ Auth::user()->email }}</small>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('siswa.profil') }}" style="border-radius:8px;padding:9px 12px;font-size:13px;">
                            <i class="bi bi-person-fill me-2" style="color:#14532d;"></i>Profil Saya
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('siswa.dashboard') }}" style="border-radius:8px;padding:9px 12px;font-size:13px;">
                            <i class="bi bi-grid-fill me-2" style="color:#14532d;"></i>Dashboard
                        </a>
                    </li>
                    <li><hr class="dropdown-divider my-1"></li>
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}" style="border-radius:8px;padding:9px 12px;font-size:13px;color:#ef4444;"
                           onclick="event.preventDefault(); document.getElementById('logout-form-header').submit();">
                            <i class="bi bi-box-arrow-left me-2"></i>Logout
                        </a>
                        <form id="logout-form-header" action="{{ route('logout') }}" method="POST" style="display:none;">@csrf</form>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
</header>
