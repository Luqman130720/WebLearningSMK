<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $quizzes = Quiz::all();
        return view('pages.admin.kelola-kuis', compact('quizzes'));
    }

    public function userQuizIndex()
    {
         $quizzes = Quiz::all();
        return view('pages.user.quiz-index', compact('quizzes'));
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
            'nama_quiz' => 'required|string|max:255',
            'link_quiz' => 'required|url',
        ]);

        Quiz::create([
            'nama_quiz' => $request->nama_quiz,
            'link_quiz' => $request->link_quiz,
        ]);

        return redirect()->route('admin.quiz.index')->with('createQuizSuccess', 'Quiz berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Quiz $quiz)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Quiz $quiz)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Quiz $quiz)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Quiz $quiz, $id)
    {
    // Find the quiz by its ID
    $quiz = Quiz::findOrFail($id);

    // Delete the quiz
    $quiz->delete();

    // Redirect back to the quiz index with a success message
    return redirect()->route('admin.quiz.index')->with('success', 'Quiz berhasil dihapus!');
}
}
