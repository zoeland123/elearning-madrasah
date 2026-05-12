@extends('backend.layouts.app')
@section('title', 'Bank Soal')
@section('content')

<div class="page-heading">
    <div class="d-flex align-items-center justify-content-between">
        <div>
            <h3>Bank Soal</h3>
            <p class="text-muted mb-0" style="font-size:13px;">Kelola soal dan kuis</p>
        </div>
        <a href="{{ route('soal.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle-fill me-1"></i>Buat Soal
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
            <h4><i class="bi bi-question-circle-fill me-2"></i>Daftar Soal</h4>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th width="60">No</th>
                            <th>Guru</th>
                            <th>Mata Pelajaran</th>
                            <th>Jenis Soal</th>
                            <th>Pertanyaan</th>
                            <th>Jenjang</th>
                            <th width="150">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($soals as $soal)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $soal->guru->nama }}</td>
                            <td>{{ $soal->mataPelajaran->nama }}</td>
                            <td>
                                <span class="badge" style="background:#dbeafe;color:#1d4ed8;">{{ $soal->jenis_soal }}</span>
                            </td>
                            <td><span style="font-size:13px;">{{ Str::limit($soal->pertanyaan, 60) }}</span></td>
                            <td><span class="badge" style="background:#f0fdf4;color:#14532d;">{{ $soal->jenjang }}</span></td>
                            <td>
                                <div class="action-btns">
                                    <a href="{{ route('soal.show', $soal->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-eye-fill"></i></a>
                                    <a href="{{ route('soal.edit', $soal->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-pencil-fill"></i></a>
                                    <form action="{{ route('soal.destroy', $soal->id) }}" method="POST" style="display:inline;">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus soal ini?')"><i class="bi bi-trash-fill"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr><td colspan="7" class="text-center py-4 text-muted"><i class="bi bi-inbox" style="font-size:30px;display:block;margin-bottom:8px;"></i>Belum ada soal</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            @if(method_exists($soals, 'links'))
            <div class="p-3">{{ $soals->links() }}</div>
            @endif
        </div>
    </div>
</div>
@endsection
