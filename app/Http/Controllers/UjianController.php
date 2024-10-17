<?php

namespace App\Http\Controllers;

use App\Models\NilaiUjian;
use App\Models\SoalUjian;
use App\Models\Ujian;
use Illuminate\Http\Request;

class UjianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
     {
        $soal = SoalUjian::all();
        return view('pages.user.ujian-index', compact('soal'));
    }

    public function simpanJawaban(Request $request)
    {
        // Initialize the correct answer counter
        $benar = 0;

        // Check if 'jawaban' exists to avoid errors
        if ($request->has('jawaban')) {
            foreach ($request->jawaban as $soal_id => $jawaban) {
                // Find the soal by soal_id
                $soal = SoalUjian::find($soal_id);

                // Check if the user's answer is correct
                if ($soal && $soal->jawaban_benar == $jawaban) {
                    $benar++;
                }
            }

            // Calculate the score (nilai)
            $nilai = ($benar / count($request->jawaban)) * 100;

            // Save the score (nilai) along with user_id and kategori_id
            NilaiUjian::create([
                'user_id' => auth()->user()->id,
                'kategori_id' => $request->kategori_id, // Pastikan ini ada
                'nilai' => $nilai,
            ]);

            // Return to the dashboard with a success message
            return view('pages.user.dashboard')->with('ujianSucces', 'Ujian selesai. Nilai Anda: ' . $nilai);
        }

        // In case there are no answers provided
        return back()->with('error', 'Tidak ada jawaban yang disimpan.');
    }


    public function mulai($kategoriId)
    {
        $soal = SoalUjian::where('kategori_id', $kategoriId)->get();
        return view('pages.user.ujian-index', compact('soal', 'kategoriId'));
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
    public function show(Ujian $ujian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ujian $ujian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ujian $ujian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ujian $ujian)
    {
        //
    }
}
