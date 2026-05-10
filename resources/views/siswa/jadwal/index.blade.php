@extends('siswa.layouts.app')

@section('title', 'Jadwal Pelajaran')

@section('content')
<div class="page-heading">
    <div class="page-title">
        <h3>📅 Jadwal Pelajaran</h3>
        <p class="text-subtitle text-muted">Jadwal mingguan Anda</p>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th>Jam</th>
                                <th>Senin</th>
                                <th>Selasa</th>
                                <th>Rabu</th>
                                <th>Kamis</th>
                                <th>Jumat</th>
                                <th>Sabtu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>07:30-09:00</td>
                                <td><span class="badge bg-primary">Matematika</span></td>
                                <td><span class="badge bg-success">B. Indonesia</span></td>
                                <td><span class="badge bg-warning">Fisika</span></td>
                                <td><span class="badge bg-info">Kimia</span></td>
                                <td><span class="badge bg-danger">Biologi</span></td>
                                <td><span class="badge bg-secondary">B. Inggris</span></td>
                            </tr>
                            <tr>
                                <td>09:15-10:45</td>
                                <td><span class="badge bg-success">B. Indonesia</span></td>
                                <td><span class="badge bg-warning">Fisika</span></td>
                                <td><span class="badge bg-primary">Matematika</span></td>
                                <td><span class="badge bg-danger">Biologi</span></td>
                                <td><span class="badge bg-info">Kimia</span></td>
                                <td><span class="badge bg-primary">Matematika</span></td>
                            </tr>
                            <tr>
                                <td colspan="7" class="text-center bg-light"><strong>ISTIRAHAT</strong></td>
                            </tr>
                            <tr>
                                <td>11:00-12:30</td>
                                <td><span class="badge bg-warning">Fisika</span></td>
                                <td><span class="badge bg-secondary">B. Inggris</span></td>
                                <td><span class="badge bg-info">Kimia</span></td>
                                <td><span class="badge bg-primary">Matematika</span></td>
                                <td><span class="badge bg-success">B. Indonesia</span></td>
                                <td><span class="badge bg-warning">Fisika</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
