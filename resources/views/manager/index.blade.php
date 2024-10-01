@extends('dashboard.layouts.main')

@section('dashboard-content')
<div class="container mt-4">
    <div class="row mb-3">
        <div class="col-md-6">
            <h5 class="mb-4">Daftar Manager</h5>
        </div>
        <div class="col-md-6 d-flex justify-content-end">
            <div class="btn-wrapper">
                <button type="button" class="btn btn-primary btn-sm">
                    <i class="fa-solid fa-plus"></i> Tambah Manager
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
                        <th>Nama Manager</th>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Berakhir</th>
                        <th class="aksi">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>123456789</td>
                        <td>John Doe</td>
                        <td>01-01-2024</td>
                        <td>31-12-2024</td>
                        <td class="aksi">
                            <a href="#" class="btn btn-primary btn-sm"><i class="fa-regular fa-eye"></i></a>
                            <button type="button" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button type="button" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>987654321</td>
                        <td>Jane Smith</td>
                        <td>15-03-2023</td>
                        <td>14-03-2024</td>
                        <td class="aksi">
                            <a href="#" class="btn btn-primary btn-sm"><i class="fa-regular fa-eye"></i></a>
                            <button type="button" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button type="button" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>456789123</td>
                        <td>Michael Johnson</td>
                        <td>01-07-2024</td>
                        <td>30-06-2025</td>
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
