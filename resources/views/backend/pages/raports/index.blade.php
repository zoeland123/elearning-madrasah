@extends('backend.layouts.app')
@section('title', 'Raport Siswa')
@section('content')

<div class="page-heading">
    <div class="d-flex align-items-center justify-content-between">
        <div>
            <h3>Raport Siswa</h3>
            <p class="text-muted mb-0" style="font-size:13px;">Kelola raport dan hasil belajar siswa</p>
        </div>
        <a href="{{ route('raports.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle-fill me-1"></i>Tambah Raport
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

    {{-- Filter --}}
    <div class="card mb-3">
        <div class="card-body py-3">
            <form action="{{ route('raports.index') }}" method="GET">
                <div class="row g-2 align-items-end">
                    <div class="col-md-3">
                        <label class="form-label">Jenjang</label>
                        <select name="jenjang" class="form-select">
                            <option value="">Semua</option>
                            <option value="SMP" {{ request('jenjang') == 'SMP' ? 'selected' : '' }}>SMP</option>
                            <option value="SMA" {{ request('jenjang') == 'SMA' ? 'selected' : '' }}>SMA</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Tahun Ajaran</label>
                        <input type="text" name="tahun_ajaran" class="form-control" value="{{ request('tahun_ajaran') }}" placeholder="2024/2025">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Semester</label>
                        <input type="text" name="semester" class="form-control" value="{{ request('semester') }}" placeholder="Ganjil / Genap">
                    </div>
                    <div class="col-md-3 d-flex gap-2">
                        <button type="submit" class="btn btn-primary flex-fill">
                            <i class="bi bi-funnel-fill me-1"></i>Filter
                        </button>
                        <a href="{{ route('raports.index') }}" class="btn btn-secondary">Reset</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h4><i class="bi bi-journal-text me-2"></i>Daftar Raport</h4>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th width="60">No</th>
                            <th>Nama Siswa</th>
                            <th>Semester</th>
                            <th>Tahun Ajaran</th>
                            <th>Rata-rata</th>
                            <th>Keterangan</th>
                            <th width="150">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($raports as $raport)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><strong>{{ $raport->siswa->nama }}</strong></td>
                            <td>{{ $raport->semester }}</td>
                            <td>{{ $raport->tahun_ajaran }}</td>
                            <td>
                                <span style="font-weight:700;color:{{ $raport->rata_rata_nilai >= 75 ? '#15803d' : '#dc2626' }};">
                                    {{ $raport->rata_rata_nilai }}
                                </span>
                            </td>
                            <td><span style="font-size:13px;">{{ $raport->keterangan }}</span></td>
                            <td>
                                <div class="action-btns">
                                    <a href="{{ route('raports.show', $raport->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-eye-fill"></i></a>
                                    <a href="{{ route('raports.edit', $raport->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-pencil-fill"></i></a>
                                    <form action="{{ route('raports.destroy', $raport->id) }}" method="POST" style="display:inline;">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')"><i class="bi bi-trash-fill"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr><td colspan="7" class="text-center py-4 text-muted"><i class="bi bi-inbox" style="font-size:30px;display:block;margin-bottom:8px;"></i>Belum ada data raport</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            @if(method_exists($raports, 'links'))
            <div class="p-3">{{ $raports->links() }}</div>
            @endif
        </div>
    </div>
</div>
@endsection
