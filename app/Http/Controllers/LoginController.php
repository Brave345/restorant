<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function index(){
        if($user = Auth::user()){
            if($user->level== '1'){
                return redirect()->intended('Admin');
            }elseif($user->level == '2'){
                return redirect()->intended('pengguna');
            }
        }
        return view('login.view_login');
    }
    public function proses(Request $request){
        $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ],
        [
            'email.required'=>'Email tidak boleh kosong',
            'password.required'=>'Password tidak boleh kosong',
        ]
    );
    
        $kredensial = $request->only('email','password');

        if(Auth::attempt($kredensial)){
            $request->session()->regenerate();
            $user = Auth::user();
            if($user->level== '1'){
                return redirect()->intended('Admin');
            }elseif($user->level == '2'){
                return redirect()->intended('pengguna');
            }
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email'=>'Email atau password anda salah',
        ])->onlyInput('email');

    }
    public function logout(Request $request)
{
    Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('/');
}
}
