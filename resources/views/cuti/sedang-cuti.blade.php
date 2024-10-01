@extends('dashboard.layouts.main')

@section('dashboard-content')
<div class="container mt-4">
    <div class="row mb-3">
        <div class="col-md-6">
            <h5 class="mb-4">Daftar Pegawai Sedang Cuti</h5>
        </div>
    </div>        
    <div class="row">
        <div class="table-responsive">
            <table id="data-table" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>NIP</th>
                        <th>Nama Pegawai</th>
                        <th>Tipe Cuti</th>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Berakhir</th>
                        <th>Status</th>
                        <th>Alasan</th>
                        <th>Disetujui Oleh</th>
                        <th class="aksi">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>123456789</td>
                        <td>Drs. Joko Susilo</td>
                        <td>Cuti Tahunan</td>
                        <td>01-10-2024</td>
                        <td>15-10-2024</td>
                        <td><span class="badge text-bg-primary">Sedang Cuti</span></td>
                        <td>Liburan Keluarga</td>
                        <td>Manajer Keuangan</td>
                        <td class="aksi">
                            <a href="#" class="btn btn-primary btn-sm"><i class="fa-regular fa-eye"></i></a>
                            <button type="button" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button type="button" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>987654321</td>
                        <td>Rina Kurniawati</td>
                        <td>Cuti Sakit</td>
                        <td>20-09-2024</td>
                        <td>25-09-2024</td>
                        <td><span class="badge text-bg-primary">Sedang Cuti</span></td>
                        <td>Penyakit Flu</td>
                        <td>-</td>
                        <td class="aksi">
                            <a href="#" class="btn btn-primary btn-sm"><i class="fa-regular fa-eye"></i></a>
                            <button type="button" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button type="button" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>456789123</td>
                        <td>Ahmad Setiawan</td>
                        <td>Cuti Melahirkan</td>
                        <td>01-08-2024</td>
                        <td>30-08-2024</td>
                        <td><span class="badge text-bg-primary">Sedang Cuti</span></td>
                        <td>Melahirkan Anak Pertama</td>
                        <td>HRD</td>
                        <td class="aksi">
                            <a href="#" class="btn btn-primary btn-sm"><i class="fa-regular fa-eye"></i></a>
                            <button type="button" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button type="button" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                </tbody>                               
            </table>
        </div>
    </div>
</div>
@endsection
