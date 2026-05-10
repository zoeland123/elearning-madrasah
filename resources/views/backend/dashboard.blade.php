@extends('backend.layouts.app')
@yield('title')
@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <div class="d-flex align-items-center">
                <img src="{{ asset('images/logo-madrasah.svg') }}" alt="Logo" style="width: 50px; height: 50px; margin-right: 15px;">
                <div>
                    <h3 class="mb-0">Dashboard E-Learning</h3>
                    <p class="text-muted mb-0">Madrasah Aliyah Ikhlas Beramal</p>
                </div>
            </div>
        </div>
        <div class="page-content">
            <section class="row">
                <div class="col-12 col-lg-9">
                    <div class="row">
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-4 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                            <div class="stats-icon mb-2" style="background-color: #2d5016;">
                                                <i class="iconly-boldProfile" style="color: white;"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                            <h6 class="text-muted font-semibold">Total Siswa</h6>
                                            <h6 class="font-extrabold mb-0">{{ \App\Models\Siswa::count() }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-4 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                            <div class="stats-icon mb-2" style="background-color: #5a8c2e;">
                                                <i class="iconly-boldAdd-User" style="color: white;"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                            <h6 class="text-muted font-semibold">Total Guru</h6>
                                            <h6 class="font-extrabold mb-0">{{ \App\Models\Guru::count() }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-4 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                            <div class="stats-icon mb-2" style="background-color: #ffd700;">
                                                <i class="iconly-boldBookmark" style="color: #2d5016;"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                            <h6 class="text-muted font-semibold">Total Kelas</h6>
                                            <h6 class="font-extrabold mb-0">{{ \App\Models\Kelas::count() }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-4 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                            <div class="stats-icon mb-2" style="background-color: #2d5016;">
                                                <i class="iconly-boldShow" style="color: white;"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                            <h6 class="text-muted font-semibold">Mata Pelajaran</h6>
                                            <h6 class="font-extrabold mb-0">{{ \App\Models\MataPelajaran::count() }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Selamat Datang di E-Learning Madrasah</h4>
                                </div>
                                <div class="card-body">
                                    <div class="alert alert-success">
                                        <h5 class="alert-heading">Assalamu'alaikum Warahmatullahi Wabarakatuh</h5>
                                        <p>Selamat datang di Sistem E-Learning Madrasah Aliyah Ikhlas Beramal. Semoga sistem ini dapat membantu proses pembelajaran menjadi lebih efektif dan efisien.</p>
                                        <hr>
                                        <p class="mb-0"><strong>Ikhlas Beramal</strong> - Berilmu, Beramal, dan Berakhlak Mulia</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Data Jenjang</h4>
                                </div>
                                <div class="card-body">
                                    @php
                                        $jenjangSMP = \App\Models\Kelas::where('jenjang', 'SMP')->count();
                                        $jenjangSMA = \App\Models\Kelas::where('jenjang', 'SMA')->count();
                                    @endphp
                                    <div class="row mb-3">
                                        <div class="col-7">
                                            <div class="d-flex align-items-center">
                                                <svg class="bi" width="32" height="32" fill="#2d5016" style="width:10px">
                                                    <use xlink:href="{{ asset('backend/assets/static/images/bootstrap-icons.svg#circle-fill') }}" />
                                                </svg>
                                                <h5 class="mb-0 ms-3">SMP/MTs</h5>
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <h5 class="mb-0 text-end">{{ $jenjangSMP }} Kelas</h5>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-7">
                                            <div class="d-flex align-items-center">
                                                <svg class="bi" width="32" height="32" fill="#5a8c2e" style="width:10px">
                                                    <use xlink:href="{{ asset('backend/assets/static/images/bootstrap-icons.svg#circle-fill') }}" />
                                                </svg>
                                                <h5 class="mb-0 ms-3">SMA/MA</h5>
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <h5 class="mb-0 text-end">{{ $jenjangSMA }} Kelas</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Aktivitas Terbaru</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-lg">
                                            <thead>
                                                <tr>
                                                    <th>Tanggal</th>
                                                    <th>Aktivitas</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="col-4">
                                                        <p class="mb-0">{{ date('d M Y') }}</p>
                                                    </td>
                                                    <td class="col-auto">
                                                        <p class="mb-0">Sistem E-Learning aktif</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="col-4">
                                                        <p class="mb-0">{{ date('d M Y') }}</p>
                                                    </td>
                                                    <td class="col-auto">
                                                        <p class="mb-0">Dashboard diperbarui</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="card">
                        <div class="card-body py-4 px-4">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-xl">
                                    <img src="{{ asset('images/logo-madrasah.svg') }}" alt="Profile">
                                </div>
                                <div class="ms-3 name">
                                    <h5 class="font-bold">{{ Auth::user()->name }}</h5>
                                    <h6 class="text-muted mb-0">
                                        @if ($user_role === 'admin')
                                            Administrator
                                        @elseif($user_role === 'Super Admin')
                                            Super Administrator
                                        @elseif($user_role === 'Murid')
                                            Siswa
                                        @elseif($user_role === 'Kepala Sekolah')
                                            Kepala Madrasah
                                        @elseif($user_role === 'Guru')
                                            Guru/Ustadz
                                        @else
                                            Tamu
                                        @endif
                                    </h6>
                                </div>
                            </div>
                            <a href="/logouts" class="btn btn-block mt-3" style="background-color: #2d5016; color: white; width: 100%;">
                                <i class="bi bi-box-arrow-right"></i> Logout
                            </a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4>Info Madrasah</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <h6 class="text-muted mb-1">Nama Madrasah</h6>
                                <p class="mb-0">MA Ikhlas Beramal</p>
                            </div>
                            <div class="mb-3">
                                <h6 class="text-muted mb-1">Total Siswa</h6>
                                <p class="mb-0">{{ \App\Models\Siswa::count() }} Siswa</p>
                            </div>
                            <div class="mb-3">
                                <h6 class="text-muted mb-1">Total Guru</h6>
                                <p class="mb-0">{{ \App\Models\Guru::count() }} Guru</p>
                            </div>
                            <div>
                                <h6 class="text-muted mb-1">Tahun Ajaran</h6>
                                <p class="mb-0">{{ date('Y') }}/{{ date('Y') + 1 }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </div>
    </div>
@endsection
