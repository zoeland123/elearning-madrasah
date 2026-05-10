@extends('guru.layouts.app')
@section('title', 'Materi Pembelajaran')
@section('content')
<div class="page-heading">
    <h3>📚 Materi Pembelajaran</h3>
    <p class="text-subtitle text-muted">Kelola materi pembelajaran</p>
</div>
<section class="section">
    <div class="card">
        <div class="card-header">
            <button class="btn btn-primary">+ Tambah Materi</button>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr><th>Judul</th><th>Kelas</th><th>Tanggal</th><th>Aksi</th></tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Trigonometri</td>
                        <td>XII IPA 1</td>
                        <td>10 Mei 2026</td>
                        <td><button class="btn btn-sm btn-info">Edit</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
