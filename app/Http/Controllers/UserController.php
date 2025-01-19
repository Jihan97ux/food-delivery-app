<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\restaurant;
use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        return view('customer.beranda');
    }

    public function show(){
        
    }

    public function signUp_cust(){
        return view('registration.signup_cust');
    }

    public function signUp_resto(){
        return view('registration.signup_resto');
    }

    public function show_selectRole(){
        return view('registration.select_role');
    }

    public function signIn(){
        return view('registration.signin');
    }

    public function resto(){
        return view('resto.beranda_resto');
    }

    public function selectRole(Request $request){
        $role = $request->input('role');

        if ($role === 'restaurant') {
            return redirect()->to('restaurant_signup');
        }

        if ($role === 'customer') {
            return redirect()->to('customer_signup');
        }

        return redirect()->back()->withErrors(['role' => 'Pilih role yang valid']);
    }

    public function cust_store(Request $request){
        Session::flash('nama_depan', $request->nama_depan);
        Session::flash('nama_belakang', $request->nama_belakang);
        Session::flash('tanggal_lahir', $request->tanggal_lahir);
        Session::flash('email', $request->email);
        Session::flash('password', $request->password);

        $request->validate([
            'nama_depan' => 'required|string|max:255',
            'nama_belakang' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'email' => 'required|email|unique:customers,email|max:255',
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
        customer::create($data);
        return redirect()->route('customer');
    }

    public function resto_store(Request $request){
        Session::flash('nama_resto', $request->nama_resto);
        Session::flash('kategori', $request->kategori);
        Session::flash('email', $request->email);
        Session::flash('no_telp', $request->no_telp);
        Session::flash('alamat', $request->alamat);
        Session::flash('password', $request->password);

        $request->validate([
            'nama_resto' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'email' => 'required|email|unique:restaurants,email|max:255',
            'no_telp' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'password' => 'required|string|min:8',
        ], [
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'email.unique' => 'Email sudah terdaftar',
            'nama_resto.required' => 'Nama restoran wajib diisi',
            'kategori.required' => 'Kategori wajib diisi',
            'no_telp.required' => 'Nomor telepon wajib diisi',
            'alamat.required' => 'Alamat wajib diisi',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password harus memiliki minimal 8 karakter',
        ]);

        $data = [
            'nama_resto'=> $request->nama_resto,
            'kategori'=> $request->kategori,
            'email'=> $request->email,
            'no_telp'=> $request->no_telp,
            'alamat'=> $request->alamat,
            'password'=> $request->password,
        ];
        restaurant::create($data);
        return redirect()->route('restaurant');
    }

    public function check(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        $userRestaurant = restaurant::where('email', $request->email)->first();
        $userCustomer = customer::where('email', $request->email)->first();
        
        if (($userRestaurant && $request->password === $userRestaurant->password)) {
            $user = $userRestaurant;
            return redirect()->to('restaurant')->with('success', 'Login berhasil!');
        } elseif (($userCustomer && $request->password === $userCustomer->password)) {
            $user = $userCustomer;
            return redirect()->to('customer')->with('success', 'Login berhasil!');
        } else {
            return redirect()->back()->withErrors(['signin' => 'Invalid email or password']);
        }
    }
    
}
