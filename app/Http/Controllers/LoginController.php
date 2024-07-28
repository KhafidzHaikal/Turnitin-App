<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }
        return back()->with('error', 'Email dan Password Salah');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'Berhasil Logout');
    }

    public function dashboard() {
        // if (auth()->user()->type == 'admin') {
            return view('admin.dashboard');
        // } else {
        //     return view('dashboard');
        // }
    }

    public function landing_page() {
        return view('landing-page');
    }
}
