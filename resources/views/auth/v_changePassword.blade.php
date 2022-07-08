@extends('layouts.v_auth')

@section('title')
    <title>Change Password</title>
@endsection

@section('form')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Change Password</h1>
                @if ($error = Session::get('passError'))
                <div class="alert alert-danger" role="alert">
                    {{ $error }}
                  </div>
                @endif
            </div>

            <form class="user" action="{{ route('changePassStore', $user->id) }}" method="post">
                @csrf
                <div class="form-group">
                    <input type="password" name="old_pass" class="form-control form-control-user"
                        id="nama" aria-describedby="emailHelp"
                        placeholder="Masukkan password lama" required>
                </div>
                
                <div class="form-group">
                    <input type="password" name="new_pass" class="form-control form-control-user"
                        id="nama" aria-describedby="emailHelp"
                        placeholder="Masukkan password baru" required>
                </div>

                <hr>
                <button type="submit" class="btn btn-warning btn-user btn-block mt-4">
                    Ubah Password
                </button>
            </form>

        </div>
    </div>
</div>
@endsection