<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\KlienController;

Route::get('/', function () {
    return view('layouts.layout');
});

Route::get('/dashboard', [UserController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

// Grouping route yang butuh autentikasi
Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::patch('/users/{id}', [UserController::class, 'update'])->name('users.update');
    Route::patch('/users/{id}/password', [UserController::class, 'updatePassword'])->name('users.updatePassword');
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    

    Route::middleware('is_admin')->group(function () {
        Route::get('/admin/pendaftaran', [UserController::class, 'manageRegistrations'])->name('admin.pendaftaran');
        Route::post('/admin/pendaftaran/{id}/update', [UserController::class, 'updateRegistrationStatus'])->name('admin.pendaftaran.update');

        Route::get('/admin/anggota', [UserController::class, 'manageMembers'])->name('admin.anggota');
        Route::delete('/admin/anggota/{id}', [UserController::class, 'deleteMember'])->name('admin.anggota.delete');
        Route::put('/admin/anggota/{id}/password', [UserController::class, 'updatePassword'])->name('admin.anggota.password.update');
    });
});

// Route untuk memeriksa status pendaftaran anggota
Route::get('/status-pendaftaran', [UserController::class, 'checkStatus'])->name('status.pendaftaran');
Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel.index');
Route::get('/artikel/create', [ArtikelController::class, 'create'])->name('artikel.create');
Route::post('/artikel', [ArtikelController::class, 'store'])->name('artikel.store');

    Route::get('/galeri', [GaleriController::class, 'index'])->name('galery.index');
    Route::get('/galeri/create', [GaleriController::class, 'create'])->name('galeri.create');
    Route::post('/galeri', [GaleriController::class, 'store'])->name('galeri.store');




    Route::get('/event', [EventController::class, 'index'])->name('event.event');
    Route::get('/event/create', [EventController::class, 'create'])->name('event.create');
    Route::post('/event', [EventController::class, 'store'])->name('event.store');

    Route::get('/klien', [KlienController::class, 'index'])->name('klien.index');
    Route::get('/klien/create', [KlienController::class, 'create'])->name('event.create');
    Route::post(uri: '/klien', action: [KlienController::class, 'store'])->name('event.store');


require __DIR__ . '/auth.php';