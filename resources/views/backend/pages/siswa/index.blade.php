@extends('backend.layouts.app')
@section('title', 'Data Siswa')
@section('content')

<div class="page-heading">
    <div class="d-flex align-items-center justify-content-between">
        <div>
            <h3>Data Siswa</h3>
            <p class="text-muted mb-0" style="font-size:13px;">Kelola data siswa madrasah</p>
        </div>
        <a href="{{ route('siswa.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle-fill me-1"></i>Tambah Siswa
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
            <h4><i class="bi bi-people-fill me-2"></i>Daftar Siswa</h4>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th width="60">No</th>
                            <th>Nama Siswa</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenjang</th>
                            <th width="180">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($siswas as $siswa)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><strong>{{ $siswa->nama }}</strong></td>
                            <td>
                                <span class="badge" style="background:{{ $siswa->jenis_kelamin == 'Laki-laki' ? '#dbeafe;color:#1d4ed8' : '#fce7f3;color:#be185d' }};">
                                    {{ $siswa->jenis_kelamin }}
                                </span>
                            </td>
                            <td style="font-size:13px;">{{ \Carbon\Carbon::parse($siswa->tanggal_lahir)->format('d M Y') }}</td>
                            <td><span class="badge" style="background:#f0fdf4;color:#14532d;">{{ $siswa->jenjang }}</span></td>
                            <td>
                                <div class="action-btns">
                                    <a href="{{ route('siswa.show', $siswa->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-eye-fill"></i></a>
                                    <a href="{{ route('siswa.edit', $siswa->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-pencil-fill"></i></a>
                                    <form action="{{ route('siswa.destroy', $siswa->id) }}" method="POST" style="display:inline;">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')"><i class="bi bi-trash-fill"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr><td colspan="6" class="text-center py-4 text-muted"><i class="bi bi-inbox" style="font-size:30px;display:block;margin-bottom:8px;"></i>Belum ada data siswa</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            @if(method_exists($siswas, 'links'))
            <div class="p-3">{{ $siswas->links() }}</div>
            @endif
        </div>
    </div>
</div>
@endsection
