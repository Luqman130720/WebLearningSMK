<?php

namespace App\Http\Controllers;

use App\Models\SigIn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SigInController extends Controller
{

    public function login(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Cek kredensial pengguna
        if (Auth::attempt($credentials)) {
            // Regenerasi sesi untuk keamanan
            $request->session()->regenerate();

            // Redirect sesuai role
        if (auth()->user()->role == 1) {
            return redirect()->intended('/admin/dashboard')->with('loginSuccess', 'Login berhasil sebagai Admin.');
        } elseif (auth()->user()->role == 2) {
            return redirect()->intended('/user/dashboard')->with('loginSuccess', 'Login berhasil sebagai User.');
        }
        }

        // Jika gagal login, kembali ke halaman sebelumnya dengan error
        return back()->withErrors([
            'loginError' => 'Login gagal. Mohon cek kembali username dan password Anda.',
        ])->onlyInput('username');
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    
        return redirect('/')->with('LogoutSuccess', 'Anda Telah Logout!');
    }

    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SigIn $sigIn)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SigIn $sigIn)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SigIn $sigIn)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SigIn $sigIn)
    {
        //
    }
}
