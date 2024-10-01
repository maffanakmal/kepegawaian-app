@extends('dashboard.layouts.main')

@section('dashboard-content')
<div class="container mt-4">
    <div class="row mb-3">
        <div class="col-md-6">
            <h5 class="mb-4">Daftar Unit Kerja</h5>
        </div>
        <div class="col-md-6 d-flex justify-content-end">
            <div class="btn-wrapper">
                <button type="button" class="btn btn-primary btn-sm">
                    <i class="fa-solid fa-plus"></i> Tambah Unit Kerja
                </button>
            </div>
        </div>
    </div>        
    <div class="row">
        <div class="table-responsive">
            <table id="data-table" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>Nama Unit</th>
                        <th>Deskripsi</th>
                        <th>Lokasi</th>
                        <th class="aksi">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Unit Pelayanan Kesehatan</td>
                        <td>Unit yang menyediakan layanan kesehatan masyarakat.</td>
                        <td>Jakarta</td>
                        <td class="aksi">
                            <a href="#" class="btn btn-primary btn-sm"><i class="fa-regular fa-eye"></i></a>
                            <button type="button" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button type="button" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Unit Pendidikan dan Pelatihan</td>
                        <td>Unit yang bertanggung jawab atas pendidikan dan pelatihan PNS.</td>
                        <td>Bandung</td>
                        <td class="aksi">
                            <a href="#" class="btn btn-primary btn-sm"><i class="fa-regular fa-eye"></i></a>
                            <button type="button" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button type="button" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Unit Pengembangan Sumber Daya Manusia</td>
                        <td>Unit yang fokus pada pengembangan SDM dalam pemerintahan.</td>
                        <td>Yogyakarta</td>
                        <td class="aksi">
                            <a href="#" class="btn btn-primary btn-sm"><i class="fa-regular fa-eye"></i></a>
                            <button type="button" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button type="button" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Unit Keuangan dan Akuntansi</td>
                        <td>Unit yang mengelola keuangan dan akuntansi pemerintah.</td>
                        <td>Surabaya</td>
                        <td class="aksi">
                            <a href="#" class="btn btn-primary btn-sm"><i class="fa-regular fa-eye"></i></a>
                            <button type="button" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button type="button" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Unit Hukum dan Perundang-undangan</td>
                        <td>Unit yang bertugas mengurus masalah hukum dan perundang-undangan.</td>
                        <td>Medan</td>
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
