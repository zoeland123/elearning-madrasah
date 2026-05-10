@extends('siswa.layouts.app')

@section('title', 'E-Learning')

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>📚 E-Learning</h3>
                <p class="text-subtitle text-muted">Materi Pembelajaran & Tugas</p>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="row">
            <!-- Mata Pelajaran Cards -->
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="stats-icon purple mb-2">
                                    <i class="iconly-boldDocument"></i>
                                </div>
                                <div class="ms-3">
                                    <h4 class="font-extrabold mb-0">Matematika</h4>
                                    <p class="text-muted mb-0">12 Materi • 5 Tugas</p>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="#" class="btn btn-primary btn-sm w-100">Lihat Materi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="stats-icon blue mb-2">
                                    <i class="iconly-boldDocument"></i>
                                </div>
                                <div class="ms-3">
                                    <h4 class="font-extrabold mb-0">Bahasa Indonesia</h4>
                                    <p class="text-muted mb-0">8 Materi • 3 Tugas</p>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="#" class="btn btn-primary btn-sm w-100">Lihat Materi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="stats-icon green mb-2">
                                    <i class="iconly-boldDocument"></i>
                                </div>
                                <div class="ms-3">
                                    <h4 class="font-extrabold mb-0">Fisika</h4>
                                    <p class="text-muted mb-0">10 Materi • 4 Tugas</p>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="#" class="btn btn-primary btn-sm w-100">Lihat Materi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="stats-icon red mb-2">
                                    <i class="iconly-boldDocument"></i>
                                </div>
                                <div class="ms-3">
                                    <h4 class="font-extrabold mb-0">Kimia</h4>
                                    <p class="text-muted mb-0">9 Materi • 3 Tugas</p>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="#" class="btn btn-primary btn-sm w-100">Lihat Materi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="stats-icon purple mb-2">
                                    <i class="iconly-boldDocument"></i>
                                </div>
                                <div class="ms-3">
                                    <h4 class="font-extrabold mb-0">Biologi</h4>
                                    <p class="text-muted mb-0">11 Materi • 4 Tugas</p>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="#" class="btn btn-primary btn-sm w-100">Lihat Materi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="stats-icon blue mb-2">
                                    <i class="iconly-boldDocument"></i>
                                </div>
                                <div class="ms-3">
                                    <h4 class="font-extrabold mb-0">Bahasa Inggris</h4>
                                    <p class="text-muted mb-0">7 Materi • 2 Tugas</p>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="#" class="btn btn-primary btn-sm w-100">Lihat Materi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
