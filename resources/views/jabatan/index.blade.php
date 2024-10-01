@extends('dashboard.layouts.main')

@section('dashboard-content')
<div class="container mt-4">
    <div class="row mb-3">
        <div class="col-md-6">
            <h5 class="mb-4">Daftar Jabatan</h5>
        </div>
        <div class="col-md-6 d-flex justify-content-end">
            <div class="btn-wrapper">
                <button type="button" class="btn btn-primary btn-sm">
                    <i class="fa-solid fa-plus"></i> Tambah Jabatan
                </button>
            </div>
        </div>
    </div>        
    <div class="row">
        <div class="table-responsive">
            <table id="data-table" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>Nama Jabatan</th>
                        <th>Deskripsi</th>
                        <th>Level</th>
                        <th class="aksi">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Penata Muda</td>
                        <td>Jabatan fungsional umum untuk level awal.</td>
                        <td>III/a</td>
                        <td class="aksi">
                            <a href="#" class="btn btn-primary btn-sm"><i class="fa-regular fa-eye"></i></a>
                            <button type="button" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button type="button" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Penata</td>
                        <td>Jabatan fungsional madya dalam jenjang jabatan struktural.</td>
                        <td>III/c</td>
                        <td class="aksi">
                            <a href="#" class="btn btn-primary btn-sm"><i class="fa-regular fa-eye"></i></a>
                            <button type="button" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button type="button" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Pembina</td>
                        <td>Jabatan fungsional senior dengan peran lebih strategis.</td>
                        <td>IV/a</td>
                        <td class="aksi">
                            <a href="#" class="btn btn-primary btn-sm"><i class="fa-regular fa-eye"></i></a>
                            <button type="button" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button type="button" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Pembina Utama</td>
                        <td>Jabatan puncak dalam birokrasi pemerintahan.</td>
                        <td>IV/e</td>
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
