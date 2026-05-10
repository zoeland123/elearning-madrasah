@extends('guru.layouts.app')

@section('title', 'Dashboard Guru')

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Dashboard Guru</h3>
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
                                    <i class="iconly-boldCategory"></i>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <h6 class="text-muted font-semibold">Total Kelas</h6>
                                <h6 class="font-extrabold mb-0">{{ $totalKelas }}</h6>
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
                                    <i class="iconly-boldProfile"></i>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <h6 class="text-muted font-semibold">Total Siswa</h6>
                                <h6 class="font-extrabold mb-0">{{ $totalSiswa }}</h6>
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
                                    <i class="iconly-boldDocument"></i>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <h6 class="text-muted font-semibold">Materi</h6>
                                <h6 class="font-extrabold mb-0">{{ $totalMateri }}</h6>
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
                                    <i class="iconly-boldEdit"></i>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <h6 class="text-muted font-semibold">Soal/Tugas</h6>
                                <h6 class="font-extrabold mb-0">{{ $totalSoal }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Kelas yang Diampu -->
            <div class="col-12 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>📚 Kelas yang Diampu</h4>
                    </div>
                    <div class="card-body">
                        <div class="list-group">
                            <div class="list-group-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <strong>XII IPA 1</strong>
                                        <p class="mb-0 text-muted small">Matematika • 32 Siswa</p>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-primary">Kelola</a>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <strong>XII IPA 2</strong>
                                        <p class="mb-0 text-muted small">Matematika • 30 Siswa</p>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-primary">Kelola</a>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <strong>XI IPA 1</strong>
                                        <p class="mb-0 text-muted small">Matematika • 28 Siswa</p>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-primary">Kelola</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Jadwal Mengajar Hari Ini -->
            <div class="col-12 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>🕐 Jadwal Mengajar Hari Ini</h4>
                    </div>
                    <div class="card-body">
                        <div class="list-group">
                            <div class="list-group-item">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <strong>07:30 - 09:00</strong>
                                        <p class="mb-0 text-muted small">XII IPA 1 • Matematika</p>
                                    </div>
                                    <span class="badge bg-primary">Aktif</span>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <strong>09:15 - 10:45</strong>
                                        <p class="mb-0 text-muted small">XII IPA 2 • Matematika</p>
                                    </div>
                                    <span class="badge bg-secondary">Belum Mulai</span>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <strong>11:00 - 12:30</strong>
                                        <p class="mb-0 text-muted small">XI IPA 1 • Matematika</p>
                                    </div>
                                    <span class="badge bg-secondary">Belum Mulai</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Tugas yang Perlu Dinilai -->
            <div class="col-12 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>📝 Tugas Perlu Dinilai</h4>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-light-warning">
                            <i class="bi bi-exclamation-triangle"></i> Ada tugas yang menunggu penilaian
                        </div>
                        <div class="list-group">
                            <div class="list-group-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <strong>Tugas Trigonometri</strong>
                                        <p class="mb-0 text-muted small">XII IPA 1 • 25 siswa sudah mengumpulkan</p>
                                    </div>
                                    <span class="badge bg-danger">Belum Dinilai</span>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <strong>Kuis Integral</strong>
                                        <p class="mb-0 text-muted small">XII IPA 2 • 20 siswa sudah mengumpulkan</p>
                                    </div>
                                    <span class="badge bg-danger">Belum Dinilai</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Konsultasi Siswa -->
            <div class="col-12 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>💬 Pesan dari Siswa</h4>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-light-info">
                            <i class="bi bi-info-circle"></i> Klik menu <strong>Konsultasi Siswa</strong> untuk melihat semua pesan
                        </div>
                        <a href="{{ route('guru.konsultasi') }}" class="btn btn-primary w-100">
                            <i class="bi bi-chat-dots"></i> Buka Konsultasi
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
