<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\SoalUjian;
use App\Models\Aspiration;
use App\Models\KategoriSoal;
use Illuminate\Http\Request;
use App\Models\StudyMaterial;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategoriSoals = KategoriSoal::all();
        $aspirasi = Aspiration::latest()->take(2)->get();
        return view('pages.user.dashboard', compact('aspirasi', 'kategoriSoals'));
    }
    public function myProfile()
    {
        $kategoriSoals = KategoriSoal::all();
        $aspirasi = Aspiration::latest()->take(2)->get();
        return view('pages.user.my-profile', compact('aspirasi', 'kategoriSoals'));
    }

    public function updateProfile(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'nomor_telepon' => 'required|string|max:15',
            'tanggal_lahir' => 'required|date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Ambil pengguna yang sedang masuk
        $user = auth()->user();

        // Jika ada file gambar yang diupload
        $imagePath = $user->image; // Simpan path gambar yang ada saat ini
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($user->image) {
                Storage::disk('public')->delete($user->image);
            }
            // Simpan gambar baru
            $imagePath = $request->file('image')->store('image-profil', 'public');
        }

        // Perbarui data pengguna
        $user->update([
            'nama_lengkap' => $request->nama_lengkap,
            'username' => $request->username,
            'email' => $request->email,
            'nomor_telepon' => $request->nomor_telepon,
            'tanggal_lahir' => $request->tanggal_lahir,
            'image' => $imagePath,
        ]);

        return redirect()->back()->with('success', 'Profil Anda berhasil diperbarui!');
    }


    public function aboutUs()
    {
        return view('pages.user.tentang-kami');
    }

    public function materiPelajaran()
    {
        $studyMaterials = StudyMaterial::all();
        return view('pages.user.materi-pelajaran', compact('studyMaterials'));
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
    public function show(Student $student, $id)
    {
         $showMateri = StudyMaterial::findOrFail($id); 
         return view('pages.user.materi-pelajaran-show',compact('showMateri'));
    }

    /**
     * Show the form for editing the specified resource.
     */

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
