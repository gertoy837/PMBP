<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AwalController;
use App\Http\Controllers\SantriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WaliSantriController;
use App\Http\Controllers\AkunController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [AwalController::class, 'index'])->name('welcome');
Route::get('/about', [AwalController::class, 'about'])->name('about1');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/data-santri', [SantriController::class, 'index'])->name('santri');
    Route::get('/dashboard/data-santri/tambah', [SantriController::class, 'create'])->name('tambah');
    Route::post('/dashboard/data-santri/store', [SantriController::class, 'store'])->name('store');
    Route::get('/dashboard/data-santri/detail/{id}', [SantriController::class, 'show'])->name('detail');
    Route::get('/dashboard/data-santri/edit/{id}', [SantriController::class, 'edit'])->name('edit');
    Route::PUT('/dashboard/data-santri/update/{id}', [SantriController::class, 'update'])->name('update');
    Route::delete('/dashboard/data-santri/delete/{id}', [SantriController::class, 'destroy'])->name('destroy');

    Route::resource('dataAkun', AkunController::class);
    Route::resource('dataWaliSantri', WaliSantriController::class);
});

Route::middleware(['auth', 'role:user,admin'])->group(function () {
    Route::get('/user', [AboutController::class, 'home'])->name('awal');
    Route::get('/user/about', [AboutController::class, 'about'])->name('about');
    Route::get('/user/profile/{id}', [AboutController::class, 'index'])->name('user');
});

require __DIR__.'/auth.php';

