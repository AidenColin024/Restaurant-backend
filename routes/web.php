<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DishController
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;

Route::get('/contact', [MessageController::class, 'create'])->name('contact');

Route::post('/contact', [MessageController::class, 'store'])->name('contact.store');

Route::get('/messages', [MessageController::class, 'index'])->name('messages.index');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
