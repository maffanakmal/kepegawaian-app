@extends('main')

@section('container')
<div class="row d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="col-md-6 col-lg-4 mx-auto">
        <main class="form-signin w-100 m-auto p-3 p-md-4">
            <h1 class="h3 mb-5 fw-normal text-center">Selamat Datang Di Aplikasi Kepegawaian LSF</h1>
            <form action="/login" method="POST">
                @csrf
                <div class="form-floating mb-3">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                        placeholder="Email" name="email" required value="{{ old('email') }}">
                    <label for="email">Email</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                        placeholder="Password" name="password" required>
                    <label for="password">Password</label>
                </div>
                <button class="btn btn-primary w-100 py-2" type="submit">Masuk</button>
            </form>
            <hr>
            <small class="d-block text-center mt-3">Belum Punya Akun? <a href="/register">Daftar</a></small>
        </main>
    </div>
</div>
@endsection
