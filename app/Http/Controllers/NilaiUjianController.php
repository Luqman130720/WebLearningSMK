<?php

namespace App\Http\Controllers;

use App\Models\NilaiUjian;
use Illuminate\Http\Request;

class NilaiUjianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $nilaiUjians = NilaiUjian::with(['user', 'kategoriSoal'])->get(); // Eager load relationships

    return view('pages.admin.nilai-ujian', compact('nilaiUjians'));
}

    public function tampilkanNilaiUjian()
    {
        // Ambil data nilai ujian bersama dengan nama user dan nama kategori ujian
        $nilaiUjians = NilaiUjian::with('user', 'kategori')
            ->join('users', 'nilai_ujians.user_id', '=', 'users.id')
            ->join('kategori_soals', 'nilai_ujians.kategori_id', '=', 'kategori_soals.id')
            ->select('users.nama_lengkap', 'kategori_soals.nama_kategori', 'nilai_ujians.nilai')
            ->get();

        // Kirim data ke view
        return view('pages.admin.nilai-ujian', compact('nilaiUjians'));
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
    public function show(NilaiUjian $nilaiUjian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NilaiUjian $nilaiUjian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, NilaiUjian $nilaiUjian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NilaiUjian $nilaiUjian)
    {
        //
    }
}
