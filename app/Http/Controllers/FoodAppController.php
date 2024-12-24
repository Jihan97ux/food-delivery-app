<?php

namespace App\Http\Controllers;

use App\Models\registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class FoodAppController extends Controller
{
    public function index(){
        return view('beranda.beranda');
    }

    public function show(){
        return view('beranda.foods');
    }

    public function signUp(){
        return view('registration.signup');
    }

    public function signIn(){
        return view('registration.signin');
    }

    public function store(Request $request){
        Session::flash('nama_depan', $request->nama_depan);
        Session::flash('nama_belakang', $request->nama_belakang);
        Session::flash('tanggal_lahir', $request->tanggal_lahir);
        Session::flash('email', $request->email);
        Session::flash('password', $request->password);

        $request->validate([
            'nama_depan' => 'required|string|max:255',
            'nama_belakang' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'email' => 'required|email|unique:registration,email|max:255',
            'password' => 'required|string|min:8',
        ], [
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'email.unique' => 'Email sudah terdaftar',
            'nama_depan.required' => 'Nama depan wajib diisi',
            'nama_belakang.required' => 'Nama belakang wajib diisi',
            'tanggal_lahir.required' => 'Tanggal lahir wajib diisi',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password harus memiliki minimal 8 karakter',
        ]);

        $data = [
            'nama_depan'=> $request->nama_depan,
            'nama_belakang'=> $request->nama_belakang,
            'tanggal_lahir'=> $request->tanggal_lahir,
            'email'=> $request->email,
            'password'=> $request->password,
        ];
        registration::create($data);
        return redirect()->to('beranda');
    }

    public function check(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        $user = registration::where('email', $request->email)->first();
        
        if (!$user || $request->password !== $user->password){
            return redirect()->back()->withErrors(['login' => 'Invalid email or password']);
        }
        
        return redirect()->to('beranda')->with('success', 'Login berhasil!');
    }
    
}
