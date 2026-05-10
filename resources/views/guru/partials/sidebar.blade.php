<div id="sidebar">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header position-relative">
            <div class="d-flex justify-content-between align-items-center">
                <div class="logo">
                    <a href="{{ route('guru.dashboard') }}" class="d-flex align-items-center">
                        <img src="{{ asset('images/logo-madrasah.svg') }}" alt="Logo" style="height: 40px;">
                        <span style="margin-left: 10px; font-weight: 700; color: #2d5016;">Dashboard Guru</span>
                    </a>
                </div>
                <div class="sidebar-toggler x">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu Utama</li>

                <li class="sidebar-item {{ request()->routeIs('guru.dashboard') ? 'active' : '' }}">
                    <a href="{{ route('guru.dashboard') }}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-title">Pembelajaran</li>

                <li class="sidebar-item {{ request()->routeIs('guru.kelas*') ? 'active' : '' }}">
                    <a href="{{ route('guru.kelas') }}" class='sidebar-link'>
                        <i class="bi bi-people-fill"></i>
                        <span>Kelas Saya</span>
                    </a>
                </li>

                <li class="sidebar-item {{ request()->routeIs('guru.materi*') ? 'active' : '' }}">
                    <a href="{{ route('guru.materi') }}" class='sidebar-link'>
                        <i class="bi bi-book-fill"></i>
                        <span>Materi Pembelajaran</span>
                    </a>
                </li>

                <li class="sidebar-item {{ request()->routeIs('guru.tugas*') ? 'active' : '' }}">
                    <a href="{{ route('guru.tugas') }}" class='sidebar-link'>
                        <i class="bi bi-file-earmark-text-fill"></i>
                        <span>Tugas & Kuis</span>
                    </a>
                </li>

                <li class="sidebar-title">Penilaian</li>

                <li class="sidebar-item {{ request()->routeIs('guru.nilai*') ? 'active' : '' }}">
                    <a href="{{ route('guru.nilai') }}" class='sidebar-link'>
                        <i class="bi bi-bar-chart-fill"></i>
                        <span>Input Nilai</span>
                    </a>
                </li>

                <li class="sidebar-item {{ request()->routeIs('guru.absensi*') ? 'active' : '' }}">
                    <a href="{{ route('guru.absensi') }}" class='sidebar-link'>
                        <i class="bi bi-calendar-check-fill"></i>
                        <span>Absensi Siswa</span>
                    </a>
                </li>

                <li class="sidebar-title">Lainnya</li>

                <li class="sidebar-item {{ request()->routeIs('guru.jadwal*') ? 'active' : '' }}">
                    <a href="{{ route('guru.jadwal') }}" class='sidebar-link'>
                        <i class="bi bi-calendar3"></i>
                        <span>Jadwal Mengajar</span>
                    </a>
                </li>

                <li class="sidebar-item {{ request()->routeIs('guru.konsultasi*') ? 'active' : '' }}">
                    <a href="{{ route('guru.konsultasi') }}" class='sidebar-link'>
                        <i class="bi bi-chat-dots-fill"></i>
                        <span>Konsultasi Siswa</span>
                    </a>
                </li>

                <li class="sidebar-item {{ request()->routeIs('guru.profil*') ? 'active' : '' }}">
                    <a href="{{ route('guru.profil') }}" class='sidebar-link'>
                        <i class="bi bi-person-circle"></i>
                        <span>Profil Saya</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="{{ route('home') }}" class='sidebar-link'>
                        <i class="bi bi-house-fill"></i>
                        <span>Kembali ke Beranda</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="{{ route('logout') }}" class='sidebar-link'
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="bi bi-box-arrow-right"></i>
                        <span>Logout</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>

            </ul>
        </div>
    </div>
</div>

<style>
    #sidebar {
        background: linear-gradient(180deg, #1e3a8a 0%, #1e40af 100%);
    }
    
    #sidebar .sidebar-wrapper .sidebar-header .logo a span {
        color: #fff !important;
    }
    
    #sidebar .sidebar-wrapper .menu .sidebar-title {
        color: #fbbf24;
        font-weight: 700;
        font-size: 0.8rem;
        letter-spacing: 1px;
    }
    
    #sidebar .sidebar-wrapper .menu .sidebar-link {
        color: rgba(255, 255, 255, 0.8);
        transition: all 0.3s ease;
    }
    
    #sidebar .sidebar-wrapper .menu .sidebar-link:hover {
        color: #fbbf24;
        background: rgba(251, 191, 36, 0.1);
    }
    
    #sidebar .sidebar-wrapper .menu .sidebar-item.active .sidebar-link {
        background: rgba(251, 191, 36, 0.2);
        color: #fbbf24;
        font-weight: 600;
    }
    
    #sidebar .sidebar-wrapper .menu .sidebar-link i {
        color: #fbbf24;
    }
</style>
