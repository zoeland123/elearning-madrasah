@extends('siswa.layouts.app')

@section('title', 'Nilai & Raport')

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>📊 Nilai & Raport</h3>
                <p class="text-subtitle text-muted">Lihat perkembangan nilai Anda</p>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4>Nilai Per Mata Pelajaran</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Mata Pelajaran</th>
                                <th>UH 1</th>
                                <th>UH 2</th>
                                <th>UTS</th>
                                <th>UAS</th>
                                <th>Rata-rata</th>
                                <th>Predikat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Matematika</td>
                                <td>85</td>
                                <td>88</td>
                                <td>90</td>
                                <td>87</td>
                                <td><strong>87.5</strong></td>
                                <td><span class="badge bg-success">A</span></td>
                            </tr>
                            <tr>
                                <td>Bahasa Indonesia</td>
                                <td>80</td>
                                <td>82</td>
                                <td>85</td>
                                <td>83</td>
                                <td><strong>82.5</strong></td>
                                <td><span class="badge bg-success">A-</span></td>
                            </tr>
                            <tr>
                                <td>Fisika</td>
                                <td>78</td>
                                <td>80</td>
                                <td>82</td>
                                <td>79</td>
                                <td><strong>79.8</strong></td>
                                <td><span class="badge bg-info">B+</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h4>Raport Digital</h4>
            </div>
            <div class="card-body">
                <div class="alert alert-light-info">
                    <i class="bi bi-info-circle"></i> Raport semester akan tersedia setelah periode penilaian selesai
                </div>
                <button class="btn btn-primary">
                    <i class="bi bi-download"></i> Download Raport Semester 1
                </button>
            </div>
        </div>
    </section>
</div>
@endsection
