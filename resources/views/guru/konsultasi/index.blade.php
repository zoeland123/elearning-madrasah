@extends('guru.layouts.app')
@section('title', 'Konsultasi Siswa')
@section('content')
<div class="page-heading">
    <h3>💬 Konsultasi Siswa</h3>
    <p class="text-subtitle text-muted">Pesan dari siswa</p>
</div>
<section class="section">
    <div class="card">
        <div class="card-body">
            @if($siswaList->count() > 0)
            <div class="list-group">
                @foreach($siswaList as $item)
                <a href="{{ route('guru.konsultasi.show', $item->siswa_id) }}" class="list-group-item list-group-item-action">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-md me-3">
                                @if($item->siswa->avatar)
                                    <img src="{{ asset('storage/' . $item->siswa->avatar) }}" alt="Avatar">
                                @else
                                    <img src="{{ asset('backend/assets/compiled/jpg/1.jpg') }}" alt="Avatar">
                                @endif
                            </div>
                            <div>
                                <strong>{{ $item->siswa->name }}</strong>
                                <p class="mb-0 text-muted small">{{ $item->siswa->email }}</p>
                            </div>
                        </div>
                        <div class="text-end">
                            <small class="text-muted">{{ $item->last_message->created_at->diffForHumans() }}</small>
                            <br>
                            <span class="badge bg-primary">Lihat Chat</span>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
            @else
            <div class="alert alert-light-info">
                <i class="bi bi-info-circle"></i> Belum ada pesan dari siswa
            </div>
            @endif
        </div>
    </div>
</section>
@endsection
