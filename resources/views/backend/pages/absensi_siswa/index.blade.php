@extends('backend.layouts.app')
@section('title', 'Absensi Siswa')
@section('content')

<div class="page-heading">
    <div class="d-flex align-items-center justify-content-between">
        <div>
            <h3>Absensi Siswa</h3>
            <p class="text-muted mb-0" style="font-size:13px;">Kelola kehadiran siswa</p>
        </div>
        <a href="{{ route('absensi_siswa.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle-fill me-1"></i>Tambah Absensi
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
            <form action="{{ route('absensi_siswa.index') }}" method="GET" class="d-flex align-items-center gap-3">
                <label style="font-size:13px;font-weight:600;color:#64748b;white-space:nowrap;">Filter Jenjang:</label>
                <select name="filter" class="form-select" style="max-width:180px;">
                    <option value="">Semua Jenjang</option>
                    <option value="SMP" {{ ($filter ?? '') === 'SMP' ? 'selected' : '' }}>SMP</option>
                    <option value="SMA" {{ ($filter ?? '') === 'SMA' ? 'selected' : '' }}>SMA</option>
                </select>
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="bi bi-funnel-fill me-1"></i>Filter
                </button>
            </form>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h4><i class="bi bi-calendar-check-fill me-2"></i>Daftar Absensi Siswa</h4>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th width="60">No</th>
                            <th>Nama Siswa</th>
                            <th>Tanggal</th>
                            <th>Kehadiran</th>
                            <th width="150">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($absensiSiswa as $absensi)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><strong>{{ $absensi->siswa->nama }}</strong></td>
                            <td>{{ \Carbon\Carbon::parse($absensi->tanggal)->format('d M Y') }}</td>
                            <td>
                                @if($absensi->kehadiran == 'hadir')
                                    <span class="badge" style="background:#dcfce7;color:#15803d;">Hadir</span>
                                @elseif($absensi->kehadiran == 'izin')
                                    <span class="badge" style="background:#fef3c7;color:#b45309;">Izin</span>
                                @else
                                    <span class="badge" style="background:#fee2e2;color:#dc2626;">Tidak Hadir</span>
                                @endif
                            </td>
                            <td>
                                <div class="action-btns">
                                    <a href="{{ route('absensi_siswa.show', $absensi->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-eye-fill"></i></a>
                                    <a href="{{ route('absensi_siswa.edit', $absensi->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-pencil-fill"></i></a>
                                    <form action="{{ route('absensi_siswa.destroy', $absensi->id) }}" method="POST" style="display:inline;">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')"><i class="bi bi-trash-fill"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr><td colspan="5" class="text-center py-4 text-muted"><i class="bi bi-inbox" style="font-size:30px;display:block;margin-bottom:8px;"></i>Belum ada data absensi</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            @if(method_exists($absensiSiswa, 'links'))
            <div class="p-3">{{ $absensiSiswa->links() }}</div>
            @endif
        </div>
    </div>
</div>
@endsection
