<?php

namespace App\Http\Controllers;

use App\Models\Aspiration;
use Illuminate\Http\Request;

class AspirationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aspirasi = Aspiration::all();
        return view('pages.admin.aspiration', compact('aspirasi'));
    }
    public function showuserAspirasi()
    {
        $aspirasi = Aspiration::all();
        return view('pages.user.dashboard', compact('aspirasi'));
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
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'pesan_aspirasi' => 'required|string|max:1000',
        ]);

        // Simpan aspirasi ke database
        Aspiration::create($validated);

        return redirect()->back()->with('success', 'Aspirasi Anda berhasil dikirim!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Aspiration $aspiration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Aspiration $aspiration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Aspiration $aspiration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Aspiration $aspiration)
    {
        $aspiration->delete();

        return back()->with('success', 'Data Aspirasi telah dihapus!');
    }
}
