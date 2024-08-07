<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
<<<<<<< HEAD
use Illuminate\Support\Facades\Session; // Menggunakan facade Session yang benar
=======
use Session;
>>>>>>> b94ea2f8da19edcc990b91e10dd796579acd89eb

class LoginController extends Controller
{
    public function login()
    {
<<<<<<< HEAD
        // Cek apakah user sudah login
        $check = Auth::check();
        if (Auth::check()) {
            return redirect()->route('posts.index'); // Jika sudah login, redirect ke halaman 'home'
        } else {
            return view('login'); // Jika belum login, tampilkan halaman login
=======
        if (Auth::check()) {
            return redirect('home');
        }else{
            return view('login');
>>>>>>> b94ea2f8da19edcc990b91e10dd796579acd89eb
        }
    }

    public function actionlogin(Request $request)
    {
<<<<<<< HEAD
        // Ambil data email dan password dari request
=======
>>>>>>> b94ea2f8da19edcc990b91e10dd796579acd89eb
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

<<<<<<< HEAD
        // Coba melakukan login dengan data yang diberikan
        if (Auth::attempt($data)) {
            return redirect()->route('posts.index'); // Jika berhasil, redirect ke halaman 'home'
        } else {
            // Jika gagal, tampilkan pesan error
            Session::flash('error', 'Email atau Password Salah');
            return redirect()->to('/'); // Redirect kembali ke halaman login
=======
        if (Auth::Attempt($data)) {
            return redirect('home');
        }else{
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/');
>>>>>>> b94ea2f8da19edcc990b91e10dd796579acd89eb
        }
    }

    public function actionlogout()
    {
<<<<<<< HEAD
        // Logout user
        Auth::logout();
        return redirect()->to('/'); // Redirect ke halaman login setelah logout
    }
=======
        Auth::logout();
        return redirect('/');
    }

>>>>>>> b94ea2f8da19edcc990b91e10dd796579acd89eb
}
