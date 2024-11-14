<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Str;

class LoginRegisterController extends Controller
{
    public function login()
    {

            return view('Login-Register.login');
    }
    public function actionlogin(Request $request)
    {
        // Validasi
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:8',
        ], [
            'email.required' => 'Email tidak boleh kosong.',
            'email.email' => 'Format alamat email tidak valid.',
            'password.required' => 'Kata sandi tidak boleh kosong.',
            'password.min' => 'Kata sandi minimal terdiri dari 8 karakter.',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
    
        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();
            if ($user->role === 'admin') {
                // Pastikan admin diarahkan ke beranda hanya sekali
                if (url()->current() !== route('beranda')) {
                    return redirect('beranda');
                }
            } elseif ($user->role === 'user') {
                return redirect('home');
            }
        }
    
        return redirect()->back()->with('error', 'Email atau kata sandi salah. Silakan coba lagi.');
    }
    

    public function register()
    {
        return view('Login-Register.daftar');
    }

public function registeruser(Request $request)
{
    $user = User::create([
        'email' => $request->email,
        'name' => $request->name,
        'password' => bcrypt($request->password),
        // 'remember_token' => Str::random(60),
        'role' => 'user',
    ]);
    return redirect('login');
}

public function logout(Request $request)
{
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/login');  // atau '/home' jika ingin langsung ke halaman utama setelah logout
}


public function checkAuth(){
    if(Auth::check()){
        return response()->json([
            'data' => true,
        ]);
    }

    return response()->json([
        'data' => false,
    ]);
}
}
