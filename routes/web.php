<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JabatanController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landing-page.main');
});

Route::get('/login', function () {
    return view('login.index');
});

Route::get('/register', function () {
    return view('register.index');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/dashboard/jabatan', function () {
    return view('jabatan.index');
});

Route::get('/dashboard/pangkat', function () {
    return view('pangkat.index');
});

Route::get('/dashboard/department', function () {
    return view('department.index');
});

Route::get('/dashboard/unitkerja', function () {
    return view('unit-kerja.index');
});

Route::get('/dashboard/pegawai', function () {
    return view('pegawai.index');
});

Route::get('/dashboard/manager', function () {
    return view('manager.index');
});

Route::get('/dashboard/cuti', function () {
    return view('cuti.index');
});
Route::get('/dashboard/cuti/pending', function () {
    return view('cuti.cuti-pending');
});
Route::get('/dashboard/cuti/disetujui', function () {
    return view('cuti.cuti-disetujui');
});
Route::get('/dashboard/cuti/sedang-cuti', function () {
    return view('cuti.sedang-cuti');
});

Route::get('/dashboard/kehadiran', function () {
    return view('kehadiran.index');
});

Route::get('/dashboard/ketidakhadiran', function () {
    return view('ketidakhadiran.index');
});

Route::get('/dashboard/naik-jabatan', function () {
    return view('naik-jabatan.index');
});

