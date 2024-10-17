<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudyMaterial;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class StudyMaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $studyMaterials = StudyMaterial::all();
        return view('pages.admin.study-material', compact('studyMaterials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.study-material-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate incoming request
        $validated = $request->validate([
            'judul_materi' => 'required|string|max:255',
            'youtube_url' => 'required|url',
            'materi_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'paragraph1' => 'nullable|string',
            'paragraph2' => 'nullable|string',
            'paragraph3' => 'nullable|string',
            'paragraph4' => 'nullable|string',
            'ilustrasi_materi_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'ilustrasi_materi_image2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'kesimpulan' => 'nullable|string',
        ]);

        // Handle image uploads if any

        $materiImagePath = null;
        $ilustrasiImagePath1 = null;
        $ilustrasiImagePath2 = null;

        if ($request->hasFile('materi_image')) {
            $materiImagePath = $request->file('materi_image')->store('materi_image', 'public');
        }
        if ($request->hasFile('ilustrasi_materi_image')) {
            $ilustrasiImagePath1 = $request->file('ilustrasi_materi_image')->store('ilustrasi_materi_image', 'public');
        }
        if ($request->hasFile('ilustrasi_materi_image2')) {
            $ilustrasiImagePath2 = $request->file('ilustrasi_materi_image2')->store('ilustrasi_materi_image2', 'public');
        }

        // Save data to the database
        StudyMaterial::create([
            'judul_materi' => $request->judul_materi,
            'youtube_url' => $request->youtube_url,
            'materi_image' => $materiImagePath,
            'paragraph1' => $request->paragraph1,
            'paragraph2' => $request->paragraph2,
            'paragraph3' => $request->paragraph3,
            'paragraph4' => $request->paragraph3,
            'ilustrasi_materi_image' => $ilustrasiImagePath1,
            'ilustrasi_materi_image2' => $ilustrasiImagePath2,
            'kesimpulan' => $request->kesimpulan,
             'user_id' => Auth::id(), 
        ]);

        // Redirect back with a success message

        return redirect()->route('admin.study-material')->with('materiSuccess', 'Materi berhasil dibuat!');

    }



    /**
     * Display the specified resource.
     */
    public function show(StudyMaterial $studyMaterial, $id)
    {
        // $showMateri = StudyMaterial::findOrFail($id); // Fetch the materi based on its id
        $showMateri = StudyMaterial::with('author')->findOrFail($id);
        // dd($showMateri);
        return view('pages.admin.study-material-show', compact('showMateri')); // Pass the materi to the view
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function view(StudyMaterial $studyMaterial)
    {
        $studyMaterials = StudyMaterial::all();
        return view('pages.admin.study-material-controller', compact('studyMaterials'));
    }
    public function edit(StudyMaterial $studyMaterial)
    {
        // dd($studyMaterial->all());
        $studyMaterials = StudyMaterial::all();
        return view('pages.admin.study-material-update', compact('studyMaterial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StudyMaterial $studyMaterial)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'judul_materi' => 'required|string|max:255',
            'youtube_url' => 'required|url',
            'materi_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'paragraph1' => 'nullable|string',
            'paragraph2' => 'nullable|string',
            'paragraph3' => 'nullable|string',
            'paragraph4' => 'nullable|string',
            'ilustrasi_materi_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'ilustrasi_materi_image2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'kesimpulan' => 'nullable|string',
        ]);

        // Handle the upload of 'materi_image', and delete the old one if it exists
        $materiImagePath = $studyMaterial->materi_image; // Default to existing image
        if ($request->hasFile('materi_image')) {
            if ($materiImagePath) {
                Storage::disk('public')->delete($materiImagePath);
            }
            $materiImagePath = $request->file('materi_image')->store('materi_image', 'public');
        }

        // Handle 'ilustrasi_materi_image', delete the old one if it exists
        $ilustrasiImagePath1 = $studyMaterial->ilustrasi_materi_image; // Default to existing image
        if ($request->hasFile('ilustrasi_materi_image')) {
            if ($ilustrasiImagePath1) {
                Storage::disk('public')->delete($ilustrasiImagePath1);
            }
            $ilustrasiImagePath1 = $request->file('ilustrasi_materi_image')->store('ilustrasi_materi_image', 'public');
        }

        // Handle 'ilustrasi_materi_image2', delete the old one if it exists
        $ilustrasiImagePath2 = $studyMaterial->ilustrasi_materi_image2; // Default to existing image
        if ($request->hasFile('ilustrasi_materi_image2')) {
            if ($ilustrasiImagePath2) {
                Storage::disk('public')->delete($ilustrasiImagePath2);
            }
            $ilustrasiImagePath2 = $request->file('ilustrasi_materi_image2')->store('ilustrasi_materi_image2', 'public');
        }

        // Update the study material record with the validated data
        // dd($request->all());
        $studyMaterial->update([
            'judul_materi' => $request->judul_materi,
            'youtube_url' => $request->youtube_url,
            'materi_image' => $materiImagePath,
            'paragraph1' => $request->paragraph1,
            'paragraph2' => $request->paragraph2,
            'paragraph3' => $request->paragraph3,
            'paragraph4' => $request->paragraph4,
            'ilustrasi_materi_image' => $ilustrasiImagePath1,
            'ilustrasi_materi_image2' => $ilustrasiImagePath2,
            'kesimpulan' => $request->kesimpulan,
        ]);

        // Redirect back with a success message
        return redirect()->route('admin.study-material-controller')->with('updateMateri', 'Materi berhasil diperbarui!');

    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StudyMaterial $studyMaterial, $id)
{
    // Cari materi berdasarkan ID
    $materi = StudyMaterial::findOrFail($id);

    // Hapus gambar dari storage jika ada
    if ($materi->materi_image) {
        Storage::disk('public')->delete($materi->materi_image);
    }
    if ($materi->ilustrasi_materi_image) {
        Storage::disk('public')->delete($materi->ilustrasi_materi_image);
    }
    if ($materi->ilustrasi_materi_image2) {
        Storage::disk('public')->delete($materi->ilustrasi_materi_image2);
    }

    // Hapus materi dari database
    $materi->delete();

    // Redirect kembali dengan pesan sukses
    return redirect()->back()->with('deleteMateri', 'Materi berhasil dihapus!');
}
}
