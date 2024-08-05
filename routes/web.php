<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login'); // Giriş yapmamış kullanıcılar için karşılama sayfası
});

Route::middleware(['auth'])->group(function () {
    Route::get('/home', function () {
        return view('pages.home.home'); // Yalnızca oturum açmış kullanıcılar için erişilebilir
    })->name('/home');
    
    Route::get('/home', function () {
        return view('pages.home.home'); // Diğer oturum açılmış kullanıcı sayfası
    })->name('/home');
});

Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::post('/profile/edit', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


require __DIR__.'/auth.php';
