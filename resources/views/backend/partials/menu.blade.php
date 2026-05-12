<div id="sidebar">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header position-relative">
            <div class="d-flex justify-content-between align-items-center">
                <div class="logo">
                    <a href="/home" class="d-flex align-items-center">
                        <img src="{{ asset('images/logo-madrasah.svg') }}" alt="Logo Madrasah" style="width: 50px; height: 50px;">
                        <div class="ms-3">
                            <h5 class="mb-0" style="color: #2d5016; font-weight: bold;">MA Ikhlas Beramal</h5>
                            <small style="color: #5a8c2e;">E-Learning System</small>
                        </div>
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

                <li class="sidebar-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                @if (auth()->user()->role === 'admin' || auth()->user()->role == 'Super Admin')
                    <li class="sidebar-item has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-database-fill"></i>
                            <span>Data Master</span>
                        </a>
                        <ul class="submenu">
                            <li class="submenu-item {{ request()->routeIs('jenjang.index') ? 'active' : '' }}">
                                <a href="{{route('jenjang.index')}}" class="submenu-link">Jenjang</a>
                            </li>
                            <li class="submenu-item {{ request()->routeIs('jurusan.index') ? 'active' : '' }}">
                                <a href="{{route('jurusan.index')}}" class="submenu-link">Jurusan</a>
                            </li>
                            <li class="submenu-item {{ request()->routeIs('mapel.index') ? 'active' : '' }}">
                                <a href="{{route('mapel.index')}}" class="submenu-link">Mata Pelajaran</a>
                            </li>
                            <li class="submenu-item {{ request()->routeIs('kelas_admin.index') ? 'active' : '' }}">
                                <a href="{{route('kelas_admin.index')}}" class="submenu-link">Kelas</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-people-fill"></i>
                            <span>Data Pengguna</span>
                        </a>
                        <ul class="submenu">
                            <li class="submenu-item {{ request()->routeIs('guru.index') ? 'active' : '' }}">
                                <a href="{{route('guru.index')}}" class="submenu-link">Data Guru</a>
                            </li>
                            <li class="submenu-item {{ request()->routeIs('siswa.index') ? 'active' : '' }}">
                                <a href="{{route('siswa.index')}}" class="submenu-link">Data Siswa</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-book-fill"></i>
                            <span>Pembelajaran</span>
                        </a>
                        <ul class="submenu">
                            <li class="submenu-item {{ request()->routeIs('e_learning.index') ? 'active' : '' }}">
                                <a href="{{route('e_learning.index')}}" class="submenu-link">E-Learning</a>
                            </li>
                            <li class="submenu-item {{ request()->routeIs('soal.index') ? 'active' : '' }}">
                                <a href="{{route('soal.index')}}" class="submenu-link">Bank Soal</a>
                            </li>
                            <li class="submenu-item {{ request()->routeIs('jawaban.index') ? 'active' : '' }}">
                                <a href="{{route('jawaban.index')}}" class="submenu-link">Jawaban Siswa</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-clipboard-data-fill"></i>
                            <span>Penilaian</span>
                        </a>
                        <ul class="submenu">
                            <li class="submenu-item {{ request()->routeIs('nilai.index') ? 'active' : '' }}">
                                <a href="{{route('nilai.index')}}" class="submenu-link">Input Nilai</a>
                            </li>
                            <li class="submenu-item {{ request()->routeIs('raports.index') ? 'active' : '' }}">
                                <a href="{{route('raports.index')}}" class="submenu-link">Raport</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-calendar-check-fill"></i>
                            <span>Absensi</span>
                        </a>
                        <ul class="submenu">
                            <li class="submenu-item {{ request()->routeIs('absensi-guru.index') ? 'active' : '' }}">
                                <a href="{{route('absensi-guru.index')}}" class="submenu-link">Absensi Guru</a>
                            </li>
                            <li class="submenu-item {{ request()->routeIs('absensi_siswa.index') ? 'active' : '' }}">
                                <a href="{{route('absensi_siswa.index')}}" class="submenu-link">Absensi Siswa</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-title">Pengaturan</li>

                    <li class="sidebar-item">
                        <a href="/logouts" class='sidebar-link'>
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Logout</span>
                        </a>
                    </li>
                @endif
        </ul>
    </div>
</div>
</div>
