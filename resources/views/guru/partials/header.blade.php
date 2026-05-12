<style>
.navbar-guru {
    background: linear-gradient(135deg, #1e3a8a 0%, #1d4ed8 100%) !important;
    box-shadow: 0 2px 15px rgba(30,58,138,0.4) !important;
    height: 60px !important;
    border-bottom: none !important;
    padding: 0 20px !important;
}
.nav-search-wrap { position: relative; margin-left: 12px; }
.nav-search-wrap i { position:absolute; left:10px; top:50%; transform:translateY(-50%); color:rgba(255,255,255,0.4); font-size:13px; pointer-events:none; }
.nav-search-wrap input { background:rgba(255,255,255,0.1); border:1px solid rgba(255,255,255,0.15); border-radius:8px; padding:7px 12px 7px 30px; color:white; font-size:13px; width:180px; outline:none; }
.nav-search-wrap input::placeholder { color:rgba(255,255,255,0.3); }
.nav-date-pill { background:rgba(255,255,255,0.08); border:1px solid rgba(255,255,255,0.12); border-radius:8px; padding:5px 10px; color:rgba(255,255,255,0.7); font-size:11px; white-space:nowrap; }
.nav-bell { position:relative; width:36px; height:36px; background:rgba(255,255,255,0.1); border:1px solid rgba(255,255,255,0.12); border-radius:9px; display:flex; align-items:center; justify-content:center; text-decoration:none; }
.nav-bell i { color:white; font-size:15px; }
.nav-bell-badge { position:absolute; top:-4px; right:-4px; width:16px; height:16px; background:#ef4444; border-radius:50%; font-size:9px; color:white; display:flex; align-items:center; justify-content:center; font-weight:700; border:2px solid #1d4ed8; }
.nav-user-btn { display:flex; align-items:center; gap:6px; background:rgba(255,255,255,0.1); border:1px solid rgba(255,255,255,0.15); border-radius:9px; padding:4px 8px 4px 4px; text-decoration:none; }
.nav-user-btn:hover { background:rgba(255,255,255,0.18); }
.nav-user-avatar { width:30px; height:30px; border-radius:7px; background:linear-gradient(135deg,#fbbf24,#f59e0b); display:flex; align-items:center; justify-content:center; font-weight:700; color:#1e3a8a; font-size:13px; overflow:hidden; flex-shrink:0; }
.nav-user-avatar img { width:100%; height:100%; object-fit:cover; }
.nav-user-btn i.bi-chevron-down { color:rgba(255,255,255,0.5); font-size:10px; }
.nav-dd { border-radius:14px !important; border:none !important; box-shadow:0 8px 30px rgba(0,0,0,0.15) !important; padding:8px !important; min-width:220px !important; }
.nav-dd .dropdown-item { border-radius:8px; padding:9px 12px; font-size:13px; }
.notif-dd { min-width:280px !important; }
.notif-row { display:flex; align-items:center; gap:10px; padding:9px 12px; border-radius:10px; text-decoration:none; }
.notif-row:hover { background:#f0f4ff; }
.notif-ic { width:34px; height:34px; border-radius:9px; display:flex; align-items:center; justify-content:center; flex-shrink:0; font-size:14px; }
</style>

<header>
    <nav class="navbar navbar-expand navbar-top navbar-guru">
        <div class="container-fluid px-0">

            {{-- Burger --}}
            <a href="javascript:void(0)" class="burger-btn me-1">
                <i class="bi bi-justify fs-4" style="color:white;"></i>
            </a>

            {{-- Search --}}
            <div class="nav-search-wrap d-none d-md-block">
                <i class="bi bi-search"></i>
                <input type="text" placeholder="Cari materi, siswa...">
            </div>

            {{-- Right --}}
            <div class="d-flex align-items-center gap-2 ms-auto">

                {{-- Tanggal --}}
                <div class="nav-date-pill d-none d-lg-flex align-items-center gap-1">
                    <i class="bi bi-calendar3 me-1"></i>{{ \Carbon\Carbon::now()->locale('id')->isoFormat('ddd, D MMM Y') }}
                </div>

                {{-- Notifikasi --}}
                <div class="dropdown">
                    <a href="javascript:void(0)" class="nav-bell" data-bs-toggle="dropdown">
                        <i class="bi bi-bell-fill"></i>
                        <span class="nav-bell-badge">3</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end nav-dd notif-dd">
                        <li class="px-3 py-2"><h6 class="mb-0" style="color:#1e3a8a;font-weight:700;">Notifikasi</h6></li>
                        <li>
                            <a href="{{ route('guru.absensi') }}" class="notif-row">
                                <div class="notif-ic" style="background:#dbeafe;color:#1d4ed8;"><i class="bi bi-calendar-check-fill"></i></div>
                                <div><p class="mb-0" style="font-size:13px;font-weight:600;color:#1e293b;">Absensi Hari Ini</p><small class="text-muted">Belum diisi</small></div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('guru.konsultasi') }}" class="notif-row">
                                <div class="notif-ic" style="background:#dcfce7;color:#15803d;"><i class="bi bi-chat-dots-fill"></i></div>
                                <div><p class="mb-0" style="font-size:13px;font-weight:600;color:#1e293b;">Pesan Siswa</p><small class="text-muted">2 belum dibaca</small></div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('guru.nilai') }}" class="notif-row">
                                <div class="notif-ic" style="background:#fef3c7;color:#b45309;"><i class="bi bi-pencil-fill"></i></div>
                                <div><p class="mb-0" style="font-size:13px;font-weight:600;color:#1e293b;">Tugas Belum Dinilai</p><small class="text-muted">2 menunggu</small></div>
                            </a>
                        </li>
                    </ul>
                </div>

                {{-- User --}}
                <div class="dropdown">
                    <a href="javascript:void(0)" class="nav-user-btn" data-bs-toggle="dropdown">
                        <div class="nav-user-avatar">
                            @if(Auth::user()->avatar)
                                <img src="{{ asset('storage/' . Auth::user()->avatar) }}" alt="Avatar">
                            @else
                                {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                            @endif
                        </div>
                        <i class="bi bi-chevron-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end nav-dd">
                        <li class="px-3 py-2 border-bottom mb-1">
                            <p class="mb-0" style="font-weight:700;font-size:14px;">{{ Auth::user()->name }}</p>
                            <small class="text-muted">{{ Auth::user()->email }}</small>
                        </li>
                        <li><a class="dropdown-item" href="{{ route('guru.profil') }}"><i class="bi bi-person-fill me-2" style="color:#1e3a8a;"></i>Profil Saya</a></li>
                        <li><a class="dropdown-item" href="{{ route('guru.dashboard') }}"><i class="bi bi-grid-fill me-2" style="color:#1e3a8a;"></i>Dashboard</a></li>
                        <li><hr class="dropdown-divider my-1"></li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}" style="color:#ef4444;"
                               onclick="event.preventDefault(); document.getElementById('logout-form-header').submit();">
                                <i class="bi bi-box-arrow-left me-2"></i>Logout
                            </a>
                            <form id="logout-form-header" action="{{ route('logout') }}" method="POST" style="display:none;">@csrf</form>
                        </li>
                    </ul>
                </div>

            </div>{{-- end right --}}
        </div>
    </nav>
</header>
