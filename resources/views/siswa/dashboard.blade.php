@extends('siswa.layouts.app')

@section('title', 'Dashboard Siswa')

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row align-items-center">
            <div class="col-12">
                <h3>Dashboard Siswa</h3>
                <p class="text-subtitle text-muted">Assalamu'alaikum, <strong>{{ $user->name }}</strong>! Semangat belajar hari ini 🌟</p>
            </div>
        </div>
    </div>

    <section class="section">

        {{-- Welcome Banner --}}
        <div class="row mb-3">
            <div class="col-12">
                <div class="card" style="background: linear-gradient(135deg, #14532d 0%, #15803d 60%, #16a34a 100%); border-radius: 20px; overflow: hidden; position: relative;">
                    <div style="position:absolute;top:-30px;right:-30px;width:200px;height:200px;background:rgba(255,255,255,0.05);border-radius:50%;"></div>
                    <div style="position:absolute;bottom:-50px;right:100px;width:150px;height:150px;background:rgba(255,255,255,0.03);border-radius:50%;"></div>
                    <div class="card-body py-4 px-4" style="position:relative;z-index:2;">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h4 style="color:#fde047;font-weight:700;margin-bottom:8px;">
                                    <i class="bi bi-sun-fill me-2"></i>Selamat Datang, {{ $user->name }}!
                                </h4>
                                <p style="color:rgba(255,255,255,0.85);margin-bottom:16px;font-size:14px;">
                                    Terus semangat dalam menuntut ilmu. Hari ini adalah kesempatan baru untuk belajar dan berkembang.
                                </p>
                                <div class="d-flex gap-2 flex-wrap">
                                    <a href="{{ route('siswa.elearning') }}" class="btn btn-sm" style="background:#fde047;color:#14532d;font-weight:600;border-radius:8px;padding:8px 16px;">
                                        <i class="bi bi-play-circle-fill me-1"></i>Mulai Belajar
                                    </a>
                                    <a href="{{ route('siswa.nilai') }}" class="btn btn-sm" style="background:rgba(255,255,255,0.15);color:#fff;border-radius:8px;padding:8px 16px;border:1px solid rgba(255,255,255,0.3);">
                                        <i class="bi bi-bar-chart-fill me-1"></i>Lihat Nilai
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 text-center d-none d-md-block">
                                <i class="bi bi-mortarboard-fill" style="font-size:80px;color:rgba(253,224,71,0.3);"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Stats Cards --}}
        <div class="row">
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-4 py-4-5">
                        <div class="d-flex align-items-center gap-3">
                            <div class="stats-icon" style="background:linear-gradient(135deg,#7c3aed,#a855f7);color:white;width:55px;height:55px;border-radius:14px;display:flex;align-items:center;justify-content:center;font-size:22px;flex-shrink:0;">
                                <i class="bi bi-book-fill"></i>
                            </div>
                            <div>
                                <p class="text-muted mb-0" style="font-size:12px;font-weight:600;">Mata Pelajaran</p>
                                <h4 class="font-extrabold mb-0" style="font-weight:800;color:#14532d;">{{ $totalMapel }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-4 py-4-5">
                        <div class="d-flex align-items-center gap-3">
                            <div class="stats-icon" style="background:linear-gradient(135deg,#0369a1,#0ea5e9);color:white;width:55px;height:55px;border-radius:14px;display:flex;align-items:center;justify-content:center;font-size:22px;flex-shrink:0;">
                                <i class="bi bi-file-earmark-text-fill"></i>
                            </div>
                            <div>
                                <p class="text-muted mb-0" style="font-size:12px;font-weight:600;">Total Tugas</p>
                                <h4 class="font-extrabold mb-0" style="font-weight:800;color:#14532d;">{{ $totalTugas }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-4 py-4-5">
                        <div class="d-flex align-items-center gap-3">
                            <div class="stats-icon" style="background:linear-gradient(135deg,#059669,#10b981);color:white;width:55px;height:55px;border-radius:14px;display:flex;align-items:center;justify-content:center;font-size:22px;flex-shrink:0;">
                                <i class="bi bi-bar-chart-fill"></i>
                            </div>
                            <div>
                                <p class="text-muted mb-0" style="font-size:12px;font-weight:600;">Nilai Saya</p>
                                <h4 class="font-extrabold mb-0" style="font-weight:800;color:#14532d;">{{ $totalNilai }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-4 py-4-5">
                        <div class="d-flex align-items-center gap-3">
                            <div class="stats-icon" style="background:linear-gradient(135deg,#b45309,#f59e0b);color:white;width:55px;height:55px;border-radius:14px;display:flex;align-items:center;justify-content:center;font-size:22px;flex-shrink:0;">
                                <i class="bi bi-calendar-check-fill"></i>
                            </div>
                            <div>
                                <p class="text-muted mb-0" style="font-size:12px;font-weight:600;">Kehadiran</p>
                                <h4 class="font-extrabold mb-0" style="font-weight:800;color:#14532d;">{{ $persentaseKehadiran }}%</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Grafik Kehadiran + Jadwal --}}
        <div class="row">
            <div class="col-12 col-lg-5">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0"><i class="bi bi-pie-chart-fill me-2" style="color:#14532d;"></i>Statistik Kehadiran</h5>
                    </div>
                    <div class="card-body">
                        <div id="chart-kehadiran-siswa"></div>
                        <div class="row text-center mt-2">
                            <div class="col-4">
                                <div style="width:10px;height:10px;background:#16a34a;border-radius:50%;display:inline-block;margin-right:5px;"></div>
                                <small class="text-muted">Hadir</small>
                            </div>
                            <div class="col-4">
                                <div style="width:10px;height:10px;background:#f59e0b;border-radius:50%;display:inline-block;margin-right:5px;"></div>
                                <small class="text-muted">Izin</small>
                            </div>
                            <div class="col-4">
                                <div style="width:10px;height:10px;background:#ef4444;border-radius:50%;display:inline-block;margin-right:5px;"></div>
                                <small class="text-muted">Absen</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-7">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0"><i class="bi bi-clock-fill me-2" style="color:#14532d;"></i>Jadwal Hari Ini</h5>
                    </div>
                    <div class="card-body p-0">
                        <div class="list-group list-group-flush">
                            <div class="list-group-item px-4 py-3">
                                <div class="d-flex align-items-center gap-3">
                                    <div style="background:#eff6ff;border-radius:10px;padding:8px 12px;text-align:center;min-width:70px;">
                                        <small style="color:#1d4ed8;font-weight:700;font-size:11px;">07:30</small><br>
                                        <small style="color:#93c5fd;font-size:10px;">09:00</small>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0 fw-600">Matematika</p>
                                        <small class="text-muted">Ruang XII IPA 1</small>
                                    </div>
                                    <span class="badge" style="background:#dbeafe;color:#1d4ed8;border-radius:8px;">Aktif</span>
                                </div>
                            </div>
                            <div class="list-group-item px-4 py-3">
                                <div class="d-flex align-items-center gap-3">
                                    <div style="background:#f0fdf4;border-radius:10px;padding:8px 12px;text-align:center;min-width:70px;">
                                        <small style="color:#15803d;font-weight:700;font-size:11px;">09:15</small><br>
                                        <small style="color:#86efac;font-size:10px;">10:45</small>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0 fw-600">Bahasa Indonesia</p>
                                        <small class="text-muted">Ruang XII IPA 1</small>
                                    </div>
                                    <span class="badge" style="background:#dcfce7;color:#15803d;border-radius:8px;">Segera</span>
                                </div>
                            </div>
                            <div class="list-group-item px-4 py-3">
                                <div class="d-flex align-items-center gap-3">
                                    <div style="background:#fffbeb;border-radius:10px;padding:8px 12px;text-align:center;min-width:70px;">
                                        <small style="color:#b45309;font-weight:700;font-size:11px;">11:00</small><br>
                                        <small style="color:#fcd34d;font-size:10px;">12:30</small>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0 fw-600">Fisika</p>
                                        <small class="text-muted">Lab IPA</small>
                                    </div>
                                    <span class="badge" style="background:#fef3c7;color:#b45309;border-radius:8px;">Belum</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Tugas & Absensi --}}
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0"><i class="bi bi-pencil-fill me-2" style="color:#14532d;"></i>Tugas & Deadline</h5>
                        <span class="badge" style="background:#fef3c7;color:#b45309;border-radius:8px;">2 Tugas</span>
                    </div>
                    <div class="card-body p-0">
                        <div class="list-group list-group-flush">
                            <div class="list-group-item px-4 py-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="mb-0 fw-600">Tugas Matematika</p>
                                        <small class="text-muted">Bab Trigonometri</small>
                                    </div>
                                    <span class="badge bg-danger" style="border-radius:8px;">2 hari lagi</span>
                                </div>
                            </div>
                            <div class="list-group-item px-4 py-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="mb-0 fw-600">Essay Bahasa Indonesia</p>
                                        <small class="text-muted">Karya Ilmiah</small>
                                    </div>
                                    <span class="badge bg-warning" style="border-radius:8px;">5 hari lagi</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0"><i class="bi bi-check2-circle me-2" style="color:#14532d;"></i>Riwayat Kehadiran</h5>
                    </div>
                    <div class="card-body p-0">
                        @if($recentAbsensi->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($recentAbsensi as $absen)
                                    <tr>
                                        <td>{{ \Carbon\Carbon::parse($absen->tanggal)->format('d M Y') }}</td>
                                        <td>
                                            @if($absen->kehadiran == 'hadir')
                                                <span class="badge bg-success" style="border-radius:8px;">Hadir</span>
                                            @elseif($absen->kehadiran == 'izin')
                                                <span class="badge bg-warning" style="border-radius:8px;">Izin</span>
                                            @else
                                                <span class="badge bg-danger" style="border-radius:8px;">Tidak Hadir</span>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @else
                        <div class="px-4 py-4 text-center">
                            <i class="bi bi-calendar-x" style="font-size:40px;color:#d1fae5;"></i>
                            <p class="text-muted mt-2 mb-0">Belum ada data kehadiran</p>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var optKehadiran = {
        series: [{{ $persentaseKehadiran }}, {{ 100 - $persentaseKehadiran > 5 ? 5 : 0 }}, {{ 100 - $persentaseKehadiran > 5 ? 100 - $persentaseKehadiran - 5 : 100 - $persentaseKehadiran }}],
        chart: { type: 'donut', height: 220 },
        labels: ['Hadir', 'Izin', 'Tidak Hadir'],
        colors: ['#16a34a', '#f59e0b', '#ef4444'],
        legend: { show: false },
        dataLabels: { enabled: true, style: { fontSize: '13px', fontWeight: '600' } },
        plotOptions: { pie: { donut: { size: '60%', labels: { show: true, total: { show: true, label: 'Kehadiran', formatter: () => '{{ $persentaseKehadiran }}%' } } } } }
    };
    new ApexCharts(document.querySelector("#chart-kehadiran-siswa"), optKehadiran).render();
});
</script>
@endsection
