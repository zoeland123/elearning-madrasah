@extends('guru.layouts.app')

@section('title', 'Dashboard Guru')

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row align-items-center">
            <div class="col-12">
                <h3>Dashboard Guru</h3>
                <p class="text-subtitle text-muted">Assalamu'alaikum, <strong>{{ $user->name }}</strong>! Semoga hari mengajar Anda menyenangkan 📚</p>
            </div>
        </div>
    </div>

    <section class="section">

        {{-- Welcome Banner --}}
        <div class="row mb-3">
            <div class="col-12">
                <div class="card" style="background: linear-gradient(135deg, #1e3a8a 0%, #1d4ed8 60%, #2563eb 100%); border-radius: 20px; overflow: hidden; position: relative;">
                    <div style="position:absolute;top:-30px;right:-30px;width:200px;height:200px;background:rgba(255,255,255,0.05);border-radius:50%;"></div>
                    <div style="position:absolute;bottom:-50px;right:100px;width:150px;height:150px;background:rgba(255,255,255,0.03);border-radius:50%;"></div>
                    <div class="card-body py-4 px-4" style="position:relative;z-index:2;">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h4 style="color:#fbbf24;font-weight:700;margin-bottom:8px;">
                                    <i class="bi bi-person-badge-fill me-2"></i>Selamat Datang, {{ $user->name }}!
                                </h4>
                                <p style="color:rgba(255,255,255,0.85);margin-bottom:16px;font-size:14px;">
                                    Anda memiliki <strong style="color:#fbbf24;">{{ $totalKelas }} kelas</strong> dan <strong style="color:#fbbf24;">{{ $totalSiswa }} siswa</strong> yang menunggu bimbingan Anda hari ini.
                                </p>
                                <div class="d-flex gap-2 flex-wrap">
                                    <a href="{{ route('guru.absensi') }}" class="btn btn-sm" style="background:#fbbf24;color:#1e3a8a;font-weight:600;border-radius:8px;padding:8px 16px;">
                                        <i class="bi bi-calendar-check-fill me-1"></i>Input Absensi
                                    </a>
                                    <a href="{{ route('guru.konsultasi') }}" class="btn btn-sm" style="background:rgba(255,255,255,0.15);color:#fff;border-radius:8px;padding:8px 16px;border:1px solid rgba(255,255,255,0.3);">
                                        <i class="bi bi-chat-dots-fill me-1"></i>Konsultasi Siswa
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 text-center d-none d-md-block">
                                <i class="bi bi-person-workspace" style="font-size:80px;color:rgba(251,191,36,0.25);"></i>
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
                            <div style="background:linear-gradient(135deg,#7c3aed,#a855f7);color:white;width:55px;height:55px;border-radius:14px;display:flex;align-items:center;justify-content:center;font-size:22px;flex-shrink:0;">
                                <i class="bi bi-grid-fill"></i>
                            </div>
                            <div>
                                <p class="text-muted mb-0" style="font-size:12px;font-weight:600;">Total Kelas</p>
                                <h4 class="font-extrabold mb-0" style="font-weight:800;color:#1e3a8a;">{{ $totalKelas }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-4 py-4-5">
                        <div class="d-flex align-items-center gap-3">
                            <div style="background:linear-gradient(135deg,#0369a1,#0ea5e9);color:white;width:55px;height:55px;border-radius:14px;display:flex;align-items:center;justify-content:center;font-size:22px;flex-shrink:0;">
                                <i class="bi bi-people-fill"></i>
                            </div>
                            <div>
                                <p class="text-muted mb-0" style="font-size:12px;font-weight:600;">Total Siswa</p>
                                <h4 class="font-extrabold mb-0" style="font-weight:800;color:#1e3a8a;">{{ $totalSiswa }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-4 py-4-5">
                        <div class="d-flex align-items-center gap-3">
                            <div style="background:linear-gradient(135deg,#059669,#10b981);color:white;width:55px;height:55px;border-radius:14px;display:flex;align-items:center;justify-content:center;font-size:22px;flex-shrink:0;">
                                <i class="bi bi-file-earmark-play-fill"></i>
                            </div>
                            <div>
                                <p class="text-muted mb-0" style="font-size:12px;font-weight:600;">Materi</p>
                                <h4 class="font-extrabold mb-0" style="font-weight:800;color:#1e3a8a;">{{ $totalMateri }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-4 py-4-5">
                        <div class="d-flex align-items-center gap-3">
                            <div style="background:linear-gradient(135deg,#dc2626,#ef4444);color:white;width:55px;height:55px;border-radius:14px;display:flex;align-items:center;justify-content:center;font-size:22px;flex-shrink:0;">
                                <i class="bi bi-pencil-square"></i>
                            </div>
                            <div>
                                <p class="text-muted mb-0" style="font-size:12px;font-weight:600;">Soal/Tugas</p>
                                <h4 class="font-extrabold mb-0" style="font-weight:800;color:#1e3a8a;">{{ $totalSoal }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Grafik + Jadwal --}}
        <div class="row">
            <div class="col-12 col-lg-7">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0"><i class="bi bi-bar-chart-fill me-2" style="color:#1e3a8a;"></i>Statistik Mengajar</h5>
                        <span class="badge" style="background:#dbeafe;color:#1e3a8a;border-radius:8px;">{{ date('Y') }}/{{ date('Y')+1 }}</span>
                    </div>
                    <div class="card-body">
                        <div id="chart-guru-statistik"></div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-5">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0"><i class="bi bi-clock-fill me-2" style="color:#1e3a8a;"></i>Jadwal Mengajar Hari Ini</h5>
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
                                        <p class="mb-0 fw-600">XII IPA 1</p>
                                        <small class="text-muted">Matematika</small>
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
                                        <p class="mb-0 fw-600">XII IPA 2</p>
                                        <small class="text-muted">Matematika</small>
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
                                        <p class="mb-0 fw-600">XI IPA 1</p>
                                        <small class="text-muted">Matematika</small>
                                    </div>
                                    <span class="badge" style="background:#fef3c7;color:#b45309;border-radius:8px;">Belum</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Kelas + Konsultasi --}}
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0"><i class="bi bi-door-open-fill me-2" style="color:#1e3a8a;"></i>Kelas yang Diampu</h5>
                    </div>
                    <div class="card-body p-0">
                        <div class="list-group list-group-flush">
                            <div class="list-group-item px-4 py-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="mb-0 fw-600">XII IPA 1</p>
                                        <small class="text-muted">Matematika · 32 Siswa</small>
                                    </div>
                                    <a href="#" class="btn btn-sm" style="background:#dbeafe;color:#1d4ed8;border-radius:8px;font-weight:600;">Kelola</a>
                                </div>
                            </div>
                            <div class="list-group-item px-4 py-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="mb-0 fw-600">XII IPA 2</p>
                                        <small class="text-muted">Matematika · 30 Siswa</small>
                                    </div>
                                    <a href="#" class="btn btn-sm" style="background:#dbeafe;color:#1d4ed8;border-radius:8px;font-weight:600;">Kelola</a>
                                </div>
                            </div>
                            <div class="list-group-item px-4 py-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="mb-0 fw-600">XI IPA 1</p>
                                        <small class="text-muted">Matematika · 28 Siswa</small>
                                    </div>
                                    <a href="#" class="btn btn-sm" style="background:#dbeafe;color:#1d4ed8;border-radius:8px;font-weight:600;">Kelola</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0"><i class="bi bi-chat-dots-fill me-2" style="color:#1e3a8a;"></i>Pesan dari Siswa</h5>
                    </div>
                    <div class="card-body text-center py-4">
                        <i class="bi bi-chat-left-dots" style="font-size:50px;color:#dbeafe;"></i>
                        <p class="text-muted mt-3 mb-3">Klik tombol di bawah untuk melihat semua pesan konsultasi dari siswa</p>
                        <a href="{{ route('guru.konsultasi') }}" class="btn" style="background:linear-gradient(135deg,#1e3a8a,#1d4ed8);color:white;border-radius:10px;font-weight:600;padding:10px 24px;">
                            <i class="bi bi-chat-dots-fill me-2"></i>Buka Konsultasi
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var optGuru = {
        series: [{
            name: 'Jumlah',
            data: [{{ $totalKelas }}, {{ $totalSiswa }}, {{ $totalMateri }}, {{ $totalSoal }}]
        }],
        chart: { type: 'bar', height: 260, toolbar: { show: false } },
        plotOptions: { bar: { borderRadius: 8, columnWidth: '45%', distributed: true } },
        colors: ['#7c3aed', '#0369a1', '#059669', '#dc2626'],
        dataLabels: { enabled: true, style: { fontSize: '13px', fontWeight: '700' } },
        xaxis: {
            categories: ['Total Kelas', 'Total Siswa', 'Materi', 'Soal/Tugas'],
            labels: { style: { fontSize: '12px', fontWeight: '600' } }
        },
        yaxis: { show: false },
        legend: { show: false },
        grid: { borderColor: '#f1f5f9' },
        tooltip: { y: { formatter: val => val + ' data' } }
    };
    new ApexCharts(document.querySelector("#chart-guru-statistik"), optGuru).render();
});
</script>
@endsection
