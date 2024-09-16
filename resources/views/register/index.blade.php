@extends('main')

@section('container')
<div class="row d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="col-md-6 col-lg-4 mx-auto">
        <main class="form-signin w-100 m-auto p-3 p-md-4">
            <h1 class="h3 mb-5 fw-normal text-center">Daftar Akun <br> Aplikasi Kepegawaian LSF</h1>
            <form action="/register" method="POST">
                @csrf
                <input type="hidden" class="form-control @error('role') is-invalid @enderror" id="role"
                    placeholder="role" name="role">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control @error('full-name') is-invalid @enderror" id="full-name"
                        placeholder="Nama Lengkap" name="full-name" autofocus required value="{{ old('full-name') }}">
                    <label for="full-name">Nama Lengkap</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                        placeholder="Email" name="email" required value="{{ old('email') }}">
                    <label for="email">Email</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control @error('username') is-invalid @enderror" id="username"
                        placeholder="Username" name="username" required value="{{ old('username') }}">
                    <label for="username">Username</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                        placeholder="Password" name="password" required>
                    <label for="password">Password</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control @error('confirm-password') is-invalid @enderror"
                        id="confirm-password" placeholder="Confirm Password" name="confirm-password" required>
                    <label for="confirm-password">Konfirmasi Password</label>
                </div>
                <button class="btn btn-primary w-100 py-2" type="submit">Daftar</button>
            </form>
            <hr>
            <small class="d-block text-center mt-3">Sudah Punya Akun? <a href="/login">Masuk</a></small>
        </main>
    </div>
</div>
@endsection
