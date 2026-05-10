@extends('siswa.layouts.app')

@section('title', 'Dashboard Siswa')

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Dashboard Siswa</h3>
                <p class="text-subtitle text-muted">Assalamu'alaikum, {{ $user->name }}!</p>
            </div>
        </div>
    </div>

    <!-- Statistics Cards -->
    <section class="section">
        <div class="row">
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-4 py-4-5">
                        <div class="row">
                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                <div class="stats-icon purple mb-2">
                                    <i class="iconly-boldBook"></i>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <h6 class="text-muted font-semibold">Mata Pelajaran</h6>
                                <h6 class="font-extrabold mb-0">{{ $totalMapel }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-4 py-4-5">
                        <div class="row">
                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                <div class="stats-icon blue mb-2">
                                    <i class="iconly-boldDocument"></i>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <h6 class="text-muted font-semibold">Total Tugas</h6>
                                <h6 class="font-extrabold mb-0">{{ $totalTugas }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-4 py-4-5">
                        <div class="row">
                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                <div class="stats-icon green mb-2">
                                    <i class="iconly-boldChart"></i>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <h6 class="text-muted font-semibold">Nilai Saya</h6>
                                <h6 class="font-extrabold mb-0">{{ $totalNilai }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-4 py-4-5">
                        <div class="row">
                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                <div class="stats-icon red mb-2">
                                    <i class="iconly-boldCalendar"></i>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <h6 class="text-muted font-semibold">Kehadiran</h6>
                                <h6 class="font-extrabold mb-0">{{ $persentaseKehadiran }}%</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Jadwal Hari Ini -->
            <div class="col-12 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>📅 Jadwal Hari Ini</h4>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-light-info">
                            <i class="bi bi-info-circle"></i> Jadwal pelajaran untuk hari ini
                        </div>
                        <div class="list-group">
                            <div class="list-group-item">
                                <div class="d-flex justify-content-between">
                                    <strong>07:30 - 09:00</strong>
                                    <span class="badge bg-primary">Matematika</span>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="d-flex justify-content-between">
                                    <strong>09:15 - 10:45</strong>
                                    <span class="badge bg-success">Bahasa Indonesia</span>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="d-flex justify-content-between">
                                    <strong>11:00 - 12:30</strong>
                                    <span class="badge bg-warning">Fisika</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tugas Terbaru -->
            <div class="col-12 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>📝 Tugas & Deadline</h4>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-light-warning">
                            <i class="bi bi-exclamation-triangle"></i> Tugas yang harus segera dikerjakan
                        </div>
                        <div class="list-group">
                            <div class="list-group-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <strong>Tugas Matematika</strong>
                                        <p class="mb-0 text-muted small">Bab Trigonometri</p>
                                    </div>
                                    <span class="badge bg-danger">2 hari lagi</span>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <strong>Essay Bahasa Indonesia</strong>
                                        <p class="mb-0 text-muted small">Karya Ilmiah</p>
                                    </div>
                                    <span class="badge bg-warning">5 hari lagi</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Absensi Terbaru -->
            <div class="col-12 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>✅ Riwayat Kehadiran</h4>
                    </div>
                    <div class="card-body">
                        @if($recentAbsensi->count() > 0)
                            <div class="table-responsive">
                                <table class="table table-hover">
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
                                                    <span class="badge bg-success">Hadir</span>
                                                @elseif($absen->kehadiran == 'izin')
                                                    <span class="badge bg-warning">Izin</span>
                                                @else
                                                    <span class="badge bg-danger">Tidak Hadir</span>
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <p class="text-muted">Belum ada data kehadiran</p>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Pengumuman -->
            <div class="col-12 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>📢 Pengumuman Terbaru</h4>
                    </div>
                    <div class="card-body">
                        <div class="list-group">
                            <div class="list-group-item">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <strong>Ujian Tengah Semester</strong>
                                        <p class="mb-0 text-muted small">UTS akan dilaksanakan minggu depan</p>
                                    </div>
                                    <small class="text-muted">2 hari lalu</small>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <strong>Libur Hari Raya</strong>
                                        <p class="mb-0 text-muted small">Sekolah libur tanggal 10-15</p>
                                    </div>
                                    <small class="text-muted">5 hari lalu</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
