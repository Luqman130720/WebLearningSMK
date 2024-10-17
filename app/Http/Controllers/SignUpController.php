<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\SignUp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class SignUpController extends Controller
{
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
        return view('pages.admin.user-register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'nomor_telepon' => 'required|string|max:15',
            'tanggal_lahir' => 'required|date',
            'password' => 'required|string|min:8',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        // dd(request()->all());

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('image-profil', 'public');
        }

        User::create([
            'nama_lengkap' => $request->nama_lengkap,
            'username' => $request->username,
            'email' => $request->email,
            'nomor_telepon' => $request->nomor_telepon,
            'tanggal_lahir' => $request->tanggal_lahir,
            'password' => bcrypt($request->password),
            'role' => 2,
            'image' => $imagePath,
        ]);

        return redirect('/user-management')->with('createUserSuccess', 'Selamat! Registrasi Anda sebagai pengguna baru berhasil. Siap untuk menjelajahi dunia pengetahuan? Silakan masuk dan mulai belajar!');

    }


    /**
     * Display the specified resource.
     */
    public function show(SignUp $signUp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SignUp $signUp)
    {
        $users = User::all();
        return view('pages.admin.user-management',  compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SignUp $signUp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SignUp $signUp, $id)
    {
        $user = User::find($id);

        if (!$user) {
            return redirect()->route('users.show')->with('error', 'Pengguna tidak ditemukan.');
        }

        // Hapus gambar profil jika ada
        if ($user->image) {
            Storage::delete('public/' . $user->image);
        }

        $user->delete();

        return redirect('/user-management')->with('deleteUserSuccess', 'Penghapusan pengguna berhasil! Jika ada yang perlu dibantu, jangan ragu untuk menghubungi admin.!');
    }
}
