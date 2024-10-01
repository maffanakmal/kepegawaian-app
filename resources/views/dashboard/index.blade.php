@extends('dashboard.layouts.main')

@section('dashboard-content')
<div class="container mt-4">
    <div class="row">
        <h4 class="mb-4">Dashboard</h4>
        <div class="col-sm-6 col-lg-3 mb-4">
            <div class="card">
                <div class="card-body">
                    Jumlah Karywan
                    <div class="card-info">
                        <h3 class="mb-0">104</h3>
                        <small>Karyawan</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <h5 class="mb-4">Pengajuan Cuti</h5>
        <div class="col-sm-6 col-lg-3 mb-4">
            <div class="card">
                <div class="card-body">
                    Pending
                    <div class="card-info">
                        <h3 class="mb-0">104</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3 mb-4">
            <div class="card">
                <div class="card-body">
                    Disetujui
                    <div class="card-info">
                        <h3 class="mb-0">104</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3 mb-4">
            <div class="card">
                <div class="card-body">
                    Sedang Cuti
                    <div class="card-info">
                        <h3 class="mb-0">104</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <h5 class="mb-4">Pengajuan Cuti</h5>
        <div class="table-responsive">
            <table id="data-table" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Lael Greer</td>
                        <td>Systems Administrator</td>
                        <td>London</td>
                        <td>21</td>
                        <td>2009-02-27</td>
                        <td>$103,500</td>
                    </tr>
                    <tr>
                        <td>Donna Snider</td>
                        <td>Customer Support</td>
                        <td>New York</td>
                        <td>27</td>
                        <td>2011-01-25</td>
                        <td>
                            <a href="#" class="btn btn-primary btn-sm"><i class="fa-regular fa-eye"></i></a>
                            <button type="button" class="btn btn-warning btn-sm"><i
                                    class="fa-solid fa-pen-to-square"></i></i></button>
                            <button type="button" class="btn btn-danger btn-sm"><i
                                    class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
