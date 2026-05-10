@extends('guru.layouts.app')
@section('title', 'Tugas & Kuis')
@section('content')
<div class="page-heading">
    <h3>📝 Tugas & Kuis</h3>
    <p class="text-subtitle text-muted">Kelola tugas dan kuis</p>
</div>
<section class="section">
    <div class="card">
        <div class="card-header">
            <button class="btn btn-primary">+ Buat Tugas Baru</button>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr><th>Judul</th><th>Kelas</th><th>Deadline</th><th>Status</th><th>Aksi</th></tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tugas Trigonometri</td>
                        <td>XII IPA 1</td>
                        <td>15 Mei 2026</td>
                        <td><span class="badge bg-warning">Aktif</span></td>
                        <td><button class="btn btn-sm btn-info">Lihat</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
