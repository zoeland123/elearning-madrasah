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
                    @php
                        $jenjangSMP = \App\Models\Kelas::where('jenjang', 'SMP')->count();
                        $jenjangSMA = \App\Models\Kelas::where('jenjang', 'SMA')->count();
                        $totalSiswa = \App\Models\Siswa::count();
                        $totalGuru = \App\Models\Guru::count();
                        $totalKelas = \App\Models\Kelas::count();
                        $totalMapel = \App\Models\MataPelajaran::count();
                        $totalElearning = \App\Models\ELearning::count();
                        $totalSoal = \App\Models\Soal::count();
                    @endphp

                    {{-- Grafik Bar: Statistik Keseluruhan --}}
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h4>📊 Statistik E-Learning</h4>
                                    <span class="badge bg-success">{{ date('Y') }}/{{ date('Y')+1 }}</span>
                                </div>
                                <div class="card-body">
                                    <div id="chart-statistik"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Grafik Donut + Bar Jenjang --}}
                    <div class="row">
                        <div class="col-12 col-xl-5">
                            <div class="card">
                                <div class="card-header">
                                    <h4>🏫 Distribusi Kelas per Jenjang</h4>
                                </div>
                                <div class="card-body">
                                    <div id="chart-jenjang"></div>
                                    <div class="row mt-3">
                                        <div class="col-6 text-center">
                                            <h5 class="text-success">{{ $jenjangSMP }}</h5>
                                            <small class="text-muted">Kelas SMP/MTs</small>
                                        </div>
                                        <div class="col-6 text-center">
                                            <h5 class="text-primary">{{ $jenjangSMA }}</h5>
                                            <small class="text-muted">Kelas SMA/MA</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-7">
                            <div class="card">
                                <div class="card-header">
                                    <h4>📈 Progress Konten Pembelajaran</h4>
                                </div>
                                <div class="card-body">
                                    <div id="chart-konten"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                        // Grafik Bar Statistik Keseluruhan
                        var optionsStatistik = {
                            series: [{
                                name: 'Jumlah',
                                data: [{{ $totalSiswa }}, {{ $totalGuru }}, {{ $totalKelas }}, {{ $totalMapel }}, {{ $totalElearning }}, {{ $totalSoal }}]
                            }],
                            chart: { type: 'bar', height: 280, toolbar: { show: false } },
                            plotOptions: {
                                bar: { borderRadius: 6, columnWidth: '50%', distributed: true }
                            },
                            colors: ['#2d5016','#5a8c2e','#ffd700','#4CAF50','#2196F3','#FF5722'],
                            dataLabels: { enabled: true },
                            xaxis: {
                                categories: ['Siswa','Guru','Kelas','Mata Pelajaran','E-Learning','Soal'],
                                labels: { style: { fontSize: '12px' } }
                            },
                            yaxis: { title: { text: 'Jumlah' } },
                            legend: { show: false },
                            tooltip: { y: { formatter: val => val + ' data' } }
                        };
                        new ApexCharts(document.querySelector("#chart-statistik"), optionsStatistik).render();

                        // Grafik Donut Jenjang
                        var optionsJenjang = {
                            series: [{{ $jenjangSMP > 0 ? $jenjangSMP : 1 }}, {{ $jenjangSMA > 0 ? $jenjangSMA : 1 }}],
                            chart: { type: 'donut', height: 220 },
                            labels: ['SMP/MTs', 'SMA/MA'],
                            colors: ['#5a8c2e', '#2d5016'],
                            legend: { position: 'bottom' },
                            dataLabels: { enabled: true },
                            plotOptions: { pie: { donut: { size: '65%' } } }
                        };
                        new ApexCharts(document.querySelector("#chart-jenjang"), optionsJenjang).render();

                        // Grafik Area Konten
                        var optionsKonten = {
                            series: [
                                { name: 'E-Learning', data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, {{ $totalElearning }}] },
                                { name: 'Soal', data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, {{ $totalSoal }}] }
                            ],
                            chart: { type: 'area', height: 250, toolbar: { show: false } },
                            colors: ['#2d5016', '#ffd700'],
                            dataLabels: { enabled: false },
                            stroke: { curve: 'smooth', width: 2 },
                            xaxis: {
                                categories: ['Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agu','Sep','Okt','Nov','Des']
                            },
                            fill: { type: 'gradient', gradient: { opacityFrom: 0.6, opacityTo: 0.1 } },
                            legend: { position: 'top' }
                        };
                        new ApexCharts(document.querySelector("#chart-konten"), optionsKonten).render();
                        });
                    </script>
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
