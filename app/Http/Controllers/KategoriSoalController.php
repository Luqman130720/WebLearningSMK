<?php

namespace App\Http\Controllers;

use App\Models\KategoriSoal;
use App\Models\NilaiUjian;
use Illuminate\Http\Request;

class KategoriSoalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = KategoriSoal::all();
        return view('pages.admin.soal-kategori', compact('categories'));
    }

    public function Ujian()
    {
        $kategori = KategoriSoal::all();
        return view('pages.user.pilih-kategori-ujian', compact('kategori'));
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
        $request->validate([
            'nama_kategori' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'tanggal_ujian' => 'required|date',
            'waktu_ujian' => 'required|date_format:H:i',
        ]);

        KategoriSoal::create([
            'nama_kategori' => $request->nama_kategori,
            'deskripsi' => $request->deskripsi,
            'tanggal_ujian' => $request->tanggal_ujian,
            'waktu_ujian' => $request->waktu_ujian,
        ]);

        return redirect()->route('categories.index')->with('kategoriSucces', 'Kategori berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(KategoriSoal $kategoriSoal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KategoriSoal $kategoriSoal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KategoriSoal $kategoriSoal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KategoriSoal $kategoriSoal, $id)
    {
        // Temukan kategori berdasarkan ID
        $kategori = KategoriSoal::find($id);

        // Pastikan kategori ditemukan
        if (!$kategori) {
            return redirect()->back()->with('error', 'Kategori tidak ditemukan.');
        }

        // Hapus kategori (ini juga akan menghapus semua soal terkait)
        $kategori->delete();

        return back()->with('kategoriDelete', 'Kategori dan semua soal terkait telah berhasil dihapus.');
    }

}
