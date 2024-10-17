<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SigInController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\AspirationController;
use App\Http\Controllers\KategoriSoalController;
use App\Http\Controllers\NilaiUjianController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\SoalUjianController;
use App\Http\Controllers\StudyMaterialController;
use App\Http\Controllers\UjianController;
use App\Models\NilaiUjian;



Route::get('/', function () {
    return view('pages.user.index');
})->name('user.index');

Route::get('/login', function () {
    return view('pages.registrasi.login');
});


Route::post('/aspirasi/create', [AspirationController::class, 'store']);
Route::get('/aspirasi/create', [AspirationController::class, 'store']);

Route::get('/user/about-us', [StudentController::class, 'aboutUs'])->name('user.tentangKami');




Route::post('/login', [SigInController::class, 'login'])->name('login');
Route::post('/logout', [SigInController::class, 'logout']);

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    Route::get('/user-register', [SignUpController::class, 'create']);
    Route::post('/user-register', [SignUpController::class, 'store']);
    Route::get('/user-management', [SignUpController::class, 'edit']);
    Route::delete('/users-delete/{id}', [SignUpController::class, 'destroy']);
    
    Route::get('/admin/materi', [StudyMaterialController::class, 'index'])->name('admin.study-material');
    Route::get('/admin/materi/create', [StudyMaterialController::class, 'create']);
    Route::post('/admin/materi/create', [StudyMaterialController::class, 'store']);
    Route::get('/admin/management/materi', [StudyMaterialController::class, 'view'])->name('admin.study-material-controller');
    Route::delete('/admin/materi/delete/{id}', [StudyMaterialController::class, 'destroy']);
    Route::get('/admin/materi/show/{id}', [StudyMaterialController::class, 'show']);
    Route::get('/study-materials/update/{studyMaterial}', [StudyMaterialController::class, 'edit']);
    Route::put('/study-materials/update/{studyMaterial}', [StudyMaterialController::class, 'update']);

    Route::get('/categories', [KategoriSoalController::class, 'index'])->name('categories.index');
    Route::post('/categories', [KategoriSoalController::class, 'store'])->name('categories.store');
    Route::delete('/categories/{id}', [KategoriSoalController::class, 'destroy'])->name('categories.destroy');


    Route::get('admin/soal', [SoalUjianController::class, 'index'])->name('admin.soal.index');
    Route::get('admin/soal/create', [SoalUjianController::class, 'create'])->name('admin.soal.create');
    Route::post('admin/soal', [SoalUjianController::class, 'store'])->name('admin.soal.store');
    Route::get('admin/soal/{soal}/edit', [SoalUjianController::class, 'edit'])->name('admin.soal.edit');
    Route::put('admin/soal/{soal}', [SoalUjianController::class, 'update'])->name('admin.soal.update');
    Route::delete('admin/soal/{soal}', [SoalUjianController::class, 'destroy'])->name('admin.soal.destroy');
    Route::get('/ujian/preview/{kategori}', [SoalUjianController::class, 'preview'])->name('ujian.preview');

    Route::get('/admin/nilai-ujian', [NilaiUjianController::class, 'tampilkanNilaiUjian'])->name('admin.nilai-ujian');

    Route::get('/admin/quiz', [QuizController::class, 'index'])->name('admin.quiz.index');
    Route::post('/admin/quiz/', [QuizController::class, 'store'])->name('admin.quiz.store');
    Route::delete('/admin/quiz/{id}', [QuizController::class, 'destroy'])->name('admin.quiz.destroy');

     Route::get('/account-profile', [AdminController::class, 'edit'])->name('account-profile');
    Route::post('/account-profile', [AdminController::class, 'update'])->name('account-profile.update');



    Route::get('/admin/aspirasi', [AspirationController::class, 'index']);
    Route::delete('/aspirasi/delete/{aspiration}', [AspirationController::class, 'destroy']);

});

Route::middleware(['auth', 'user'])->group(function () {
    Route::get('/user/dashboard', [StudentController::class, 'index'])->name('user.dashboard');
    Route::get('/user/profile', [StudentController::class, 'myProfile'])->name('user.profile');
    Route::put('/user/profile', [StudentController::class, 'updateProfile'])->name('user.updateProfile');
    Route::get('/user/dashboard/materi', [StudentController::class, 'materiPelajaran'])->name('user.materiPelajaran');
    Route::get('/user/dashboard/materi/show/{id}', [StudentController::class, 'show']);
    
    Route::get('/ujian/pilih-kategori', [KategoriSoalController::class, 'Ujian'])->name('ujian.pilihKategori');
    Route::get('/ujian/{kategori}/mulai', [UjianController::class, 'mulai'])->name('ujian.mulai');

    Route::get('/user/quiz', [QuizController::class, 'userQuizIndex'])->name('user.quiz.index');

    
    
    
    Route::get('ujian', [UjianController::class, 'index'])->name('ujian.index');
    Route::post('ujian/simpan-jawaban', [UjianController::class, 'simpanJawaban'])->name('ujian.simpanJawaban');

});