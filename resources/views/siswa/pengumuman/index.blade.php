@extends('siswa.layouts.app')

@section('title', 'Pengumuman')

@section('content')
<div class="page-heading">
    <div class="page-title">
        <h3>📢 Pengumuman & Informasi</h3>
        <p class="text-subtitle text-muted">Informasi terbaru dari sekolah</p>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-body">
                <div class="list-group">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Ujian Tengah Semester</h5>
                            <small>2 hari lalu</small>
                        </div>
                        <p class="mb-1">UTS akan dilaksanakan pada tanggal 15-20 Mei 2026. Harap mempersiapkan diri dengan baik.</p>
                        <small class="text-muted">Oleh: Admin Madrasah</small>
                    </div>
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Libur Hari Raya</h5>
                            <small>5 hari lalu</small>
                        </div>
                        <p class="mb-1">Sekolah akan libur pada tanggal 10-15 Mei 2026 dalam rangka Hari Raya.</p>
                        <small class="text-muted">Oleh: Admin Madrasah</small>
                    </div>
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Kegiatan Ekstrakurikuler</h5>
                            <small>1 minggu lalu</small>
                        </div>
                        <p class="mb-1">Pendaftaran ekstrakurikuler semester genap dibuka mulai hari ini.</p>
                        <small class="text-muted">Oleh: Pembina Ekskul</small>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
