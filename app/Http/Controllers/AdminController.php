<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Models\StudyMaterial;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $studyMaterials = StudyMaterial::all();
        $totalUsers = DB::table('users')->count();
        $totalStudents = DB::table('users')->where('role', 2)->count();
        $totalAdmins = DB::table('users')->where('role', 1)->count();
        return view('pages.admin.dashboard', compact('totalUsers', 'totalStudents', 'totalAdmins', 'studyMaterials'));
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
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        // Mendapatkan data user yang sedang login
        $user = Auth::user();
        return view('pages.admin.account-profile', compact('user'));
    }
    
    /**
     * Update the specified resource in storage.
     */
    
    public function update(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'nomor_telepon' => 'required|string|max:15',
            'tanggal_lahir' => 'required|date',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Ambil pengguna yang sedang autentikasi
        $user = Auth::user();
        $user->nama_lengkap = $request->input('nama_lengkap');
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->nomor_telepon = $request->input('nomor_telepon');
        $user->tanggal_lahir = $request->input('tanggal_lahir');

        // Jika ada gambar di-upload
        if ($request->hasFile('image')) {
            // Menghapus gambar lama jika ada
            if ($user->image) {
                // Menghapus gambar dari storage
                Storage::delete('image-profil/' . $user->image);
            }

            // Simpan gambar baru
            $fileName = time() . '.' . $request->image->extension();
            $request->image->storeAs('image-profil', $fileName, 'public');

            // Simpan nama file gambar ke database
            $user->image = $fileName;
        }

        // Simpan perubahan ke database
        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
