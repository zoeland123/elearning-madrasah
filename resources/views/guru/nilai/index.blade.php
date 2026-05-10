@extends('guru.layouts.app')
@section('title', 'Input Nilai')
@section('content')
<div class="page-heading">
    <h3>📊 Input Nilai</h3>
    <p class="text-subtitle text-muted">Input dan kelola nilai siswa</p>
</div>
<section class="section">
    <div class="card">
        <div class="card-body">
            <div class="mb-3">
                <label>Pilih Kelas</label>
                <select class="form-select">
                    <option>XII IPA 1</option>
                    <option>XII IPA 2</option>
                </select>
            </div>
            <table class="table">
                <thead>
                    <tr><th>Nama Siswa</th><th>UH 1</th><th>UH 2</th><th>UTS</th><th>UAS</th><th>Aksi</th></tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Ahmad Fauzi</td>
                        <td><input type="number" class="form-control form-control-sm" value="85"></td>
                        <td><input type="number" class="form-control form-control-sm" value="88"></td>
                        <td><input type="number" class="form-control form-control-sm" value="90"></td>
                        <td><input type="number" class="form-control form-control-sm" value="87"></td>
                        <td><button class="btn btn-sm btn-success">Simpan</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
