<?php

use App\Http\Controllers\Admin\DashboardController as DashboardAdmin ;
use App\Http\Controllers\Siswa\DashboardController as DashboardSiswa ;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // cek apakah dia login atau tidak
    if(Auth::check()){
        if(Auth::user()->role == 'admin'){
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('siswa.dashboard');
        }
    }
    // kalau tidak login
    return redirect('/login');
});

//routing untuk proses login
route::get('/login', [AuthController::class, 'index'])->middleware('guest')->name('login');
route::post('/login', [AuthController::class, 'authenticate'])->middleware('guest')->name('login.process');
route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Routing untuk admin
Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardAdmin::class, 'index'])->name('dashboard');
});

// Routing untuk siswa
Route::middleware(['auth', 'role:siswa'])->prefix('siswa')->name('siswa.')->group(function () {
    Route::get('/dashboard', [DashboardSiswa::class, 'index'])->name('dashboard');
});