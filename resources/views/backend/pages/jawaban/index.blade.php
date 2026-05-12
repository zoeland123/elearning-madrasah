@extends('backend.layouts.app')
@section('title', 'Jawaban Siswa')
@section('content')

<div class="page-heading">
    <div class="d-flex align-items-center justify-content-between">
        <div>
            <h3>Jawaban Siswa</h3>
            <p class="text-muted mb-0" style="font-size:13px;">Kelola jawaban soal siswa</p>
        </div>
        <a href="{{ route('jawaban.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle-fill me-1"></i>Tambah Jawaban
        </a>
    </div>
</div>

<div class="page-content">
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            <i class="bi bi-check-circle-fill me-2"></i>{{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <h4><i class="bi bi-chat-square-text-fill me-2"></i>Daftar Jawaban</h4>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th width="60">No</th>
                            <th>Soal</th>
                            <th>Opsi Jawaban</th>
                            <th>Jenjang</th>
                            <th width="150">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($jawabans as $jawaban)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><span style="font-size:13px;">{{ Str::limit($jawaban->soal->pertanyaan, 60) }}</span></td>
                            <td>{{ $jawaban->opsi_jawaban }}</td>
                            <td><span class="badge" style="background:#f0fdf4;color:#14532d;">{{ $jawaban->jenjang }}</span></td>
                            <td>
                                <div class="action-btns">
                                    <a href="{{ route('jawaban.show', $jawaban->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-eye-fill"></i></a>
                                    <a href="{{ route('jawaban.edit', $jawaban->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-pencil-fill"></i></a>
                                    <form action="{{ route('jawaban.destroy', $jawaban->id) }}" method="POST" style="display:inline;">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')"><i class="bi bi-trash-fill"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr><td colspan="5" class="text-center py-4 text-muted"><i class="bi bi-inbox" style="font-size:30px;display:block;margin-bottom:8px;"></i>Belum ada data jawaban</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            @if(method_exists($jawabans, 'links'))
            <div class="p-3">{{ $jawabans->links() }}</div>
            @endif
        </div>
    </div>
</div>
@endsection
