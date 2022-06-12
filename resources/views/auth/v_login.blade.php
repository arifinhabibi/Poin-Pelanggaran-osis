@extends('layouts.v_auth')

@section('title')
    <title>Login</title>
@endsection

@section('form')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Login</h1>
                @if ($keluar = Session::get('logout'))
                <div class="alert alert-danger" role="alert">
                    {{ $keluar }}
                </div>
                @endif
                @if ($error = Session::get('error'))
                <div class="alert alert-danger" role="alert">
                    {{ $error }}
                  </div>
                @endif
            </div>
            <form class="user" action="{{ route('loginStore') }}" method="post">
                @csrf
                <div class="form-group">
                    <input type="text" name="username" class="form-control form-control-user"
                        id="nama" aria-describedby="emailHelp"
                        placeholder="Nama Pengguna" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control form-control-user"
                        id="password" placeholder="Kata Sandi" required>
                </div>
                <hr>
                <button type="submit" class="btn btn-primary btn-user btn-block mt-4">
                    Masuk
                </button>

            </form>
            {{ bcrypt('user') }}

        </div>
    </div>
</div>
@endsection