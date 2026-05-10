@extends('guru.layouts.app')
@section('title', 'Jadwal Mengajar')
@section('content')
<div class="page-heading">
    <h3>📅 Jadwal Mengajar</h3>
    <p class="text-subtitle text-muted">Jadwal mengajar Anda</p>
</div>
<section class="section">
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr><th>Jam</th><th>Senin</th><th>Selasa</th><th>Rabu</th><th>Kamis</th><th>Jumat</th><th>Sabtu</th></tr>
                </thead>
                <tbody>
                    <tr>
                        <td>07:30-09:00</td>
                        <td>XII IPA 1</td>
                        <td>XII IPA 2</td>
                        <td>XI IPA 1</td>
                        <td>-</td>
                        <td>XII IPA 1</td>
                        <td>-</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
