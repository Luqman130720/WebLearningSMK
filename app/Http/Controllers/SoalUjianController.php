<?php

namespace App\Http\Controllers;

use App\Models\KategoriSoal;
use App\Models\SoalUjian;
use Illuminate\Http\Request;

class SoalUjianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = KategoriSoal::all();
        return view('pages.admin.soal-index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = KategoriSoal::all();
        return view('pages.admin.soal-create', compact('kategori'));
    }

    public function preview($kategori_id)
    {
        // Fetch questions based on the category ID
        $soals = SoalUjian::where('kategori_id', $kategori_id)->get();

        // Return a view with the questions (you need to create a 'preview' view)
        return view('pages.admin.soal-preview', compact('soals'));
    }

    /**
     * Store a newly created resource in storage.
     */

   public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'pertanyaan' => 'required|string|max:255',
            'pilihan_a' => 'required|string|max:255',
            'pilihan_b' => 'required|string|max:255',
            'pilihan_c' => 'required|string|max:255',
            'pilihan_d' => 'required|string|max:255',
            'jawaban_benar' => 'required|string|in:A,B,C,D',
            'kategori_id' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle the image upload if provided
        $imagePath = null;
        if ($request->hasFile('gambar')) {
            $imagePath = $request->file('gambar')->store('soal_image', 'public');
        }

        // Create a new question with the validated data
        // dd($request->all());
        SoalUjian::create([
            'pertanyaan' => $request->pertanyaan,
            'pilihan_a' => $request->pilihan_a,
            'pilihan_b' => $request->pilihan_b,
            'pilihan_c' => $request->pilihan_c,
            'pilihan_d' => $request->pilihan_d,
            'jawaban_benar' => $request->jawaban_benar,
            'kategori_id' => $request->kategori_id,
            'gambar' => $imagePath,
        ]);

        return redirect()->route('admin.soal.index')->with('createSoalSuccess', 'Soal berhasil ditambahkan.');
    }




    /**
     * Display the specified resource.
     */
    public function show(SoalUjian $soalUjian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SoalUjian $soalUjian)
    {
        $kategori = KategoriSoal::all();
        return view('admin.soal.edit', compact('soal', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SoalUjian $soalUjian)
    {
        $request->validate([
            'pertanyaan' => 'required',
            'pilihan_a' => 'required',
            'pilihan_b' => 'required',
            'pilihan_c' => 'required',
            'pilihan_d' => 'required',
            'jawaban_benar' => 'required',
            'kategori_id' => 'required'
        ]);

        $soalUjian->update($request->all());

        return redirect()->route('admin.soal.index')->with('success', 'Soal berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SoalUjian $soalUjian)
    {
        $soalUjian->delete();
        return redirect()->route('admin.soal.index')->with('success', 'Soal berhasil dihapus.');
    }
}
