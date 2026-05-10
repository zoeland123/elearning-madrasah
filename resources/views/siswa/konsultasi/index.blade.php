@extends('siswa.layouts.app')

@section('title', 'Konsultasi Guru')

@section('content')
<div class="page-heading">
    <div class="page-title">
        <h3>💬 Konsultasi Guru</h3>
        <p class="text-subtitle text-muted">Tanya jawab dengan guru</p>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4>Daftar Guru</h4>
            </div>
            <div class="card-body">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-lg me-3">
                                <img src="{{ asset('backend/assets/compiled/jpg/1.jpg') }}" alt="Avatar">
                            </div>
                            <div>
                                <h6 class="mb-0">Pak Ahmad - Matematika</h6>
                                <small class="text-muted">Online</small>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-lg me-3">
                                <img src="{{ asset('backend/assets/compiled/jpg/2.jpg') }}" alt="Avatar">
                            </div>
                            <div>
                                <h6 class="mb-0">Bu Siti - Bahasa Indonesia</h6>
                                <small class="text-muted">Offline</small>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-lg me-3">
                                <img src="{{ asset('backend/assets/compiled/jpg/3.jpg') }}" alt="Avatar">
                            </div>
                            <div>
                                <h6 class="mb-0">Pak Budi - Fisika</h6>
                                <small class="text-muted">Online</small>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
