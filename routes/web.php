<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicBookController; // <--- PENTING: Import Controller ini
use Illuminate\Support\Facades\Route;

// --- UBAH BAGIAN INI ---
// Jangan pakai function closure, tapi panggil Controller
Route::get('/', [PublicBookController::class, 'index'])->name('home');
// -----------------------

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';