@extends('guru.layouts.app')
@section('title', 'Absensi Siswa')
@section('content')
<div class="page-heading">
    <h3>✅ Absensi Siswa</h3>
    <p class="text-subtitle text-muted">Kelola absensi siswa</p>
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
            <form action="{{ route('guru.absensi.store') }}" method="POST" id="formAbsensi">
                @csrf
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label>Pilih Kelas</label>
                        <select class="form-select" name="kelas_id" id="kelasSelect" required>
                            <option value="">-- Pilih Kelas --</option>
                            @foreach($kelasList as $kelas)
                            <option value="{{ $kelas->id }}">{{ $kelas->nama_kelas }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label>Tanggal</label>
                        <input type="date" class="form-control" name="tanggal" value="{{ date('Y-m-d') }}" required>
                    </div>
                </div>

                <div id="siswaList" style="display: none;">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Siswa</th>
                                <th>Status Kehadiran</th>
                            </tr>
                        </thead>
                        <tbody id="siswaTableBody">
                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save"></i> Simpan Absensi
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<script>
document.getElementById('kelasSelect').addEventListener('change', function() {
    const kelasId = this.value;
    if (!kelasId) {
        document.getElementById('siswaList').style.display = 'none';
        return;
    }

    // Fetch siswa by kelas
    fetch(`/teacher/absensi/siswa/${kelasId}`)
        .then(response => response.json())
        .then(data => {
            const tbody = document.getElementById('siswaTableBody');
            tbody.innerHTML = '';
            
            if (data.length === 0) {
                tbody.innerHTML = '<tr><td colspan="3" class="text-center">Tidak ada siswa di kelas ini</td></tr>';
            } else {
                data.forEach((siswa, index) => {
                    tbody.innerHTML += `
                        <tr>
                            <td>${index + 1}</td>
                            <td>${siswa.nama}</td>
                            <td>
                                <select class="form-select form-select-sm" name="absensi[${siswa.id}]" required>
                                    <option value="hadir">Hadir</option>
                                    <option value="izin">Izin</option>
                                    <option value="tidak_hadir">Tidak Hadir</option>
                                </select>
                            </td>
                        </tr>
                    `;
                });
            }
            
            document.getElementById('siswaList').style.display = 'block';
        });
});
</script>
@endsection
