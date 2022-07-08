<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class authController extends Controller
{
    public function login(){
        return view('auth.v_login');
    }

    public function loginStore(Request $request){
        $data = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($data)) {
            $request->session()->regenerate();
            
            return redirect()->route('beranda');
        }

        return back()->with('error','Nama pengguna atau password salah');
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('logout', 'Anda Sudah keluar');
    }
    public function changePass($id){
        $user = User::where('id', $id)->first();

        return view('auth.v_changePassword', \compact('user'));
    }
    public function changePassStore(Request $request, $id){
        $user = User::where('id', $id)->first();

        if (Hash::check($request->old_pass, $user->password)) {
            # code...
            $user->update([
                'password' =>  \bcrypt($request->new_pass) 
            ]);

            return \redirect()->route('beranda')->with('changePass', 'kata sandi berhasil diubah!');
        } else {
            # code...
            return redirect()->route('changePass', $user->id)->with('passError', 'Password lama anda tidak sesuai!');
        }
    }
}
