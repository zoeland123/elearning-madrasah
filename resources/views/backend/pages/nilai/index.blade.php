@extends('backend.layouts.app')
@section('title', 'Data Nilai')
@section('content')

<div class="page-heading">
    <div class="d-flex align-items-center justify-content-between">
        <div>
            <h3>Data Nilai</h3>
            <p class="text-muted mb-0" style="font-size:13px;">Kelola nilai siswa</p>
        </div>
        <a href="{{ route('nilai.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle-fill me-1"></i>Input Nilai
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
            <h4><i class="bi bi-bar-chart-fill me-2"></i>Daftar Nilai Siswa</h4>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th width="60">No</th>
                            <th>Siswa</th>
                            <th>Mata Pelajaran</th>
                            <th>UH</th>
                            <th>UTS</th>
                            <th>UAS</th>
                            <th>Sumber</th>
                            <th>Jenjang</th>
                            <th width="150">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($nilais as $nilai)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><strong>{{ $nilai->siswa->nama }}</strong></td>
                            <td>{{ $nilai->mataPelajaran->nama }}</td>
                            <td>
                                <span style="font-weight:600;color:{{ $nilai->nilai_ulangan_harian >= 75 ? '#15803d' : '#dc2626' }};">
                                    {{ $nilai->nilai_ulangan_harian ?? '-' }}
                                </span>
                            </td>
                            <td>
                                <span style="font-weight:600;color:{{ $nilai->nilai_ujian_tengah_semester >= 75 ? '#15803d' : '#dc2626' }};">
                                    {{ $nilai->nilai_ujian_tengah_semester ?? '-' }}
                                </span>
                            </td>
                            <td>
                                <span style="font-weight:600;color:{{ $nilai->nilai_ujian_akhir_semester >= 75 ? '#15803d' : '#dc2626' }};">
                                    {{ $nilai->nilai_ujian_akhir_semester ?? '-' }}
                                </span>
                            </td>
                            <td><span class="badge" style="background:#dbeafe;color:#1d4ed8;">{{ $nilai->sumber_nilai }}</span></td>
                            <td><span class="badge" style="background:#f0fdf4;color:#14532d;">{{ $nilai->jenjang }}</span></td>
                            <td>
                                <div class="action-btns">
                                    <a href="{{ route('nilai.show', $nilai->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-eye-fill"></i></a>
                                    <a href="{{ route('nilai.edit', $nilai->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-pencil-fill"></i></a>
                                    <form action="{{ route('nilai.destroy', $nilai->id) }}" method="POST" style="display:inline;">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')"><i class="bi bi-trash-fill"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr><td colspan="9" class="text-center py-4 text-muted"><i class="bi bi-inbox" style="font-size:30px;display:block;margin-bottom:8px;"></i>Belum ada data nilai</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            @if(method_exists($nilais, 'links'))
            <div class="p-3">{{ $nilais->links() }}</div>
            @endif
        </div>
    </div>
</div>
@endsection
