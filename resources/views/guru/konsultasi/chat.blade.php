@extends('guru.layouts.app')
@section('title', 'Chat dengan ' . $siswa->name)
@section('content')
<div class="page-heading">
    <div class="d-flex justify-content-between align-items-center">
        <div>
            <h3>💬 Chat dengan {{ $siswa->name }}</h3>
            <p class="text-subtitle text-muted">{{ $siswa->email }}</p>
        </div>
        <a href="{{ route('guru.konsultasi') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Kembali
        </a>
    </div>
</div>

<section class="section">
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    @endif

    <div class="card">
        <div class="card-body">
            <!-- Chat Messages -->
            <div class="chat-container" style="height: 400px; overflow-y: auto; padding: 20px; background: #f8f9fa; border-radius: 8px; margin-bottom: 20px;">
                @foreach($messages as $message)
                    @if($message->pengirim == 'siswa')
                        <!-- Message from Student -->
                        <div class="d-flex mb-3">
                            <div class="avatar avatar-sm me-2">
                                @if($siswa->avatar)
                                    <img src="{{ asset('storage/' . $siswa->avatar) }}" alt="Avatar">
                                @else
                                    <img src="{{ asset('backend/assets/compiled/jpg/1.jpg') }}" alt="Avatar">
                                @endif
                            </div>
                            <div style="max-width: 70%;">
                                <div class="bg-white p-3 rounded shadow-sm">
                                    <strong class="text-primary">{{ $siswa->name }}</strong>
                                    <p class="mb-1">{{ $message->pesan }}</p>
                                    <small class="text-muted">{{ $message->created_at->format('d M Y, H:i') }}</small>
                                </div>
                            </div>
                        </div>
                    @else
                        <!-- Message from Teacher -->
                        <div class="d-flex mb-3 justify-content-end">
                            <div style="max-width: 70%;">
                                <div class="bg-primary text-white p-3 rounded shadow-sm">
                                    <strong>Anda (Guru)</strong>
                                    <p class="mb-1">{{ $message->pesan }}</p>
                                    <small style="opacity: 0.8;">{{ $message->created_at->format('d M Y, H:i') }}</small>
                                </div>
                            </div>
                            <div class="avatar avatar-sm ms-2">
                                @if(Auth::user()->avatar)
                                    <img src="{{ asset('storage/' . Auth::user()->avatar) }}" alt="Avatar">
                                @else
                                    <img src="{{ asset('backend/assets/compiled/jpg/1.jpg') }}" alt="Avatar">
                                @endif
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

            <!-- Reply Form -->
            <form action="{{ route('guru.konsultasi.reply', $siswa->id) }}" method="POST">
                @csrf
                <div class="input-group">
                    <textarea class="form-control" name="pesan" rows="2" placeholder="Ketik balasan Anda..." required></textarea>
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-send"></i> Kirim
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<script>
// Auto scroll to bottom
document.addEventListener('DOMContentLoaded', function() {
    const chatContainer = document.querySelector('.chat-container');
    chatContainer.scrollTop = chatContainer.scrollHeight;
});
</script>
@endsection
