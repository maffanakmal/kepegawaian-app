@extends('dashboard.layouts.main')

@section('dashboard-content')
<div class="container mt-4">
    <div class="row mb-3">
        <div class="col-md-6">
            <h5 class="mb-4">Daftar Pegawai</h5>
        </div>
        <div class="col-md-6 d-flex justify-content-end">
            <div class="btn-wrapper">
                <button type="button" class="btn btn-primary btn-sm">
                    <i class="fa-solid fa-plus"></i> Tambah Pegawai
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
                            <th class="aksi">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>19700101 200501 1 001</td>
                            <td>Penata Muda</td>
                            <td class="aksi">
                                <a href="#" class="btn btn-primary btn-sm"><i class="fa-regular fa-eye"></i></a>
                                <button type="button" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>
                                <button type="button" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>19700101 200501 1 002</td>
                            <td>Penata</td>
                            <td class="aksi">
                                <a href="#" class="btn btn-primary btn-sm"><i class="fa-regular fa-eye"></i></a>
                                <button type="button" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>
                                <button type="button" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>19700101 200501 1 003</td>
                            <td>Pembina</td>
                            <td class="aksi">
                                <a href="#" class="btn btn-primary btn-sm"><i class="fa-regular fa-eye"></i></a>
                                <button type="button" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>
                                <button type="button" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>19700101 200501 1 004</td>
                            <td>Pembina Utama</td>
                            <td class="aksi">
                                <a href="#" class="btn btn-primary btn-sm"><i class="fa-regular fa-eye"></i></a>
                                <button type="button" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>
                                <button type="button" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>19700101 200501 1 005</td>
                            <td>Administrator</td>
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
