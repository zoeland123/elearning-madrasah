@extends('backend.layouts.app')
@section('title', 'Data Jenjang')
@section('content')

<div class="page-heading">
    <div class="d-flex align-items-center justify-content-between">
        <div>
            <h3>Data Jenjang</h3>
            <p class="text-muted mb-0" style="font-size:13px;">Kelola data jenjang pendidikan</p>
        </div>
        <a href="{{ route('jenjang.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle-fill me-1"></i>Tambah Jenjang
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
            <h4><i class="bi bi-diagram-3-fill me-2"></i>Daftar Jenjang</h4>
            <span class="badge" style="background:#f0fdf4;color:#14532d;">{{ $jenjangs->count() ?? count($jenjangs) }} Data</span>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th width="60">No</th>
                            <th>Nama Jenjang</th>
                            <th>Status</th>
                            <th width="180">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($jenjangs as $jenjang)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><strong>{{ $jenjang->nama }}</strong></td>
                            <td>
                                @if($jenjang->status == 'Aktif')
                                    <span class="badge" style="background:#dcfce7;color:#15803d;">Aktif</span>
                                @else
                                    <span class="badge" style="background:#fee2e2;color:#dc2626;">Nonaktif</span>
                                @endif
                            </td>
                            <td>
                                <div class="action-btns">
                                    <a href="{{ route('jenjang.show', $jenjang->id) }}" class="btn btn-primary btn-sm">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>
                                    <a href="{{ route('jenjang.edit', $jenjang->id) }}" class="btn btn-warning btn-sm">
                                        <i class="bi bi-pencil-fill"></i>
                                    </a>
                                    <form action="{{ route('jenjang.destroy', $jenjang->id) }}" method="POST" style="display:inline;">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">
                                            <i class="bi bi-trash-fill"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center py-4 text-muted">
                                <i class="bi bi-inbox" style="font-size:30px;display:block;margin-bottom:8px;"></i>
                                Belum ada data jenjang
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
