@extends('dashboard.layouts.main')

@section('dashboard-content')
<div class="container mt-4">
    <div class="row mb-3">
        <div class="col-md-6">
            <h5 class="mb-4">Daftar Kehadiran</h5>
        </div>
        <div class="col-md-6 d-flex justify-content-end">
            <div class="btn-wrapper">
                <button type="button" class="btn btn-primary btn-sm">
                    <i class="fa-solid fa-plus"></i> Tambah Kehadiran
                </button>
            </div>
        </div>
    </div>        
    <div class="row">
        <div class="table-responsive">
            <table id="data-table" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>NIP</th>
                        <th>Nama Pegawai</th>
                        <th>Waktu Masuk</th>
                        <th>Waktu Keluar</th>
                        <th>Status</th>
                        <th class="aksi">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>123456789</td>
                        <td>Drs. Joko Susilo</td>
                        <td>08:00</td>
                        <td>16:00</td>
                        <td><span class="badge text-bg-success">Hadir</span></td>
                        <td class="aksi">
                            <a href="#" class="btn btn-primary btn-sm"><i class="fa-regular fa-eye"></i></a>
                            <button type="button" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button type="button" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>987654321</td>
                        <td>Rina Kurniawati</td>
                        <td>09:00</td>
                        <td>17:00</td>
                        <td><span class="badge text-bg-warning">Telat</span></td>
                        <td class="aksi">
                            <a href="#" class="btn btn-primary btn-sm"><i class="fa-regular fa-eye"></i></a>
                            <button type="button" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button type="button" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>456789123</td>
                        <td>Ahmad Setiawan</td>
                        <td>08:30</td>
                        <td>16:30</td>
                        <td><span class="badge text-bg-success">Hadir</span></td>
                        <td class="aksi">
                            <a href="#" class="btn btn-primary btn-sm"><i class="fa-regular fa-eye"></i></a>
                            <button type="button" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button type="button" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>321654987</td>
                        <td>Fani Maulida</td>
                        <td>09:30</td>
                        <td>17:30</td>
                        <td><span class="badge text-bg-danger">Absen</span></td>
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
