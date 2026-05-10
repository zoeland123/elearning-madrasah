@extends('guru.layouts.app')
@section('title', 'Kelas Saya')
@section('content')
<div class="page-heading">
    <h3>👥 Kelas Saya</h3>
    <p class="text-subtitle text-muted">Daftar kelas yang Anda ampu</p>
</div>
<section class="section">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5>XII IPA 1</h5>
                    <p class="text-muted">Matematika • 32 Siswa</p>
                    <a href="#" class="btn btn-primary btn-sm">Kelola Kelas</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5>XII IPA 2</h5>
                    <p class="text-muted">Matematika • 30 Siswa</p>
                    <a href="#" class="btn btn-primary btn-sm">Kelola Kelas</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
