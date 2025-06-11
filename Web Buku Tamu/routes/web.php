<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;

Route::get('/export-pdf', [GuestController::class, 'exportPDF'])->name('pdf.export');

Route::get('/', [GuestController::class, 'create']);

Route::post('/guest', [GuestController::class, 'store']);

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [GuestController::class, 'index'])->name('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__ . '/auth.php';
