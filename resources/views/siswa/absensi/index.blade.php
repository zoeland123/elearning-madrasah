@extends('siswa.layouts.app')

@section('title', 'Absensi Saya')

@section('content')
<div class="page-heading">
    <div class="page-title">
        <h3>✅ Absensi Saya</h3>
        <p class="text-subtitle text-muted">Riwayat kehadiran Anda</p>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h6 class="text-muted">Hadir</h6>
                        <h3 class="text-success">85</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h6 class="text-muted">Izin</h6>
                        <h3 class="text-warning">3</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h6 class="text-muted">Tidak Hadir</h6>
                        <h3 class="text-danger">2</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h4>Riwayat Kehadiran</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Hari</th>
                                <th>Status</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>10 Mei 2026</td>
                                <td>Sabtu</td>
                                <td><span class="badge bg-success">Hadir</span></td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>09 Mei 2026</td>
                                <td>Jumat</td>
                                <td><span class="badge bg-success">Hadir</span></td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>08 Mei 2026</td>
                                <td>Kamis</td>
                                <td><span class="badge bg-warning">Izin</span></td>
                                <td>Keperluan keluarga</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
