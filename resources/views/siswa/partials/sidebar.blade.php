<div id="sidebar">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header position-relative">
            <div class="d-flex justify-content-between align-items-center">
                <div class="logo">
                    <a href="{{ route('siswa.dashboard') }}" class="d-flex align-items-center">
                        <img src="{{ asset('images/logo-madrasah.svg') }}" alt="Logo" style="height: 40px;">
                        <span style="margin-left: 10px; font-weight: 700; color: #2d5016;">E-Learning Siswa</span>
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

                <li class="sidebar-item {{ request()->routeIs('siswa.dashboard') ? 'active' : '' }}">
                    <a href="{{ route('siswa.dashboard') }}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-title">Pembelajaran</li>

                <li class="sidebar-item {{ request()->routeIs('siswa.elearning*') ? 'active' : '' }}">
                    <a href="{{ route('siswa.elearning') }}" class='sidebar-link'>
                        <i class="bi bi-book-fill"></i>
                        <span>E-Learning</span>
                    </a>
                </li>

                <li class="sidebar-item {{ request()->routeIs('siswa.jadwal*') ? 'active' : '' }}">
                    <a href="{{ route('siswa.jadwal') }}" class='sidebar-link'>
                        <i class="bi bi-calendar3"></i>
                        <span>Jadwal Pelajaran</span>
                    </a>
                </li>

                <li class="sidebar-title">Penilaian</li>

                <li class="sidebar-item {{ request()->routeIs('siswa.nilai*') ? 'active' : '' }}">
                    <a href="{{ route('siswa.nilai') }}" class='sidebar-link'>
                        <i class="bi bi-bar-chart-fill"></i>
                        <span>Nilai & Raport</span>
                    </a>
                </li>

                <li class="sidebar-title">Kehadiran</li>

                <li class="sidebar-item {{ request()->routeIs('siswa.absensi*') ? 'active' : '' }}">
                    <a href="{{ route('siswa.absensi') }}" class='sidebar-link'>
                        <i class="bi bi-calendar-check-fill"></i>
                        <span>Absensi Saya</span>
                    </a>
                </li>

                <li class="sidebar-title">Informasi</li>

                <li class="sidebar-item {{ request()->routeIs('siswa.pengumuman*') ? 'active' : '' }}">
                    <a href="{{ route('siswa.pengumuman') }}" class='sidebar-link'>
                        <i class="bi bi-megaphone-fill"></i>
                        <span>Pengumuman</span>
                    </a>
                </li>

                <li class="sidebar-item {{ request()->routeIs('siswa.konsultasi*') ? 'active' : '' }}">
                    <a href="{{ route('siswa.konsultasi') }}" class='sidebar-link'>
                        <i class="bi bi-chat-dots-fill"></i>
                        <span>Konsultasi Guru</span>
                    </a>
                </li>

                <li class="sidebar-title">Akun</li>

                <li class="sidebar-item {{ request()->routeIs('siswa.profil*') ? 'active' : '' }}">
                    <a href="{{ route('siswa.profil') }}" class='sidebar-link'>
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
        background: linear-gradient(180deg, #2d5016 0%, #1f3810 100%);
    }
    
    #sidebar .sidebar-wrapper .sidebar-header .logo a span {
        color: #fff !important;
    }
    
    #sidebar .sidebar-wrapper .menu .sidebar-title {
        color: #ffd700;
        font-weight: 700;
        font-size: 0.8rem;
        letter-spacing: 1px;
    }
    
    #sidebar .sidebar-wrapper .menu .sidebar-link {
        color: rgba(255, 255, 255, 0.8);
        transition: all 0.3s ease;
    }
    
    #sidebar .sidebar-wrapper .menu .sidebar-link:hover {
        color: #ffd700;
        background: rgba(255, 215, 0, 0.1);
    }
    
    #sidebar .sidebar-wrapper .menu .sidebar-item.active .sidebar-link {
        background: rgba(255, 215, 0, 0.2);
        color: #ffd700;
        font-weight: 600;
    }
    
    #sidebar .sidebar-wrapper .menu .sidebar-link i {
        color: #ffd700;
    }
</style>
