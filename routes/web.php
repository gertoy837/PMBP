<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AwalController;
use App\Http\Controllers\SantriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;


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



// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [AwalController::class, 'index'])->name('welcome');

Route::get('/about', function () {
    return view('about');
})->name('about');




Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/data-santri', [SantriController::class, 'index'])->name('santri');
    Route::get('/dashboard/data-santri/detail/{id}', [SantriController::class, 'show'])->name('detail');
    Route::get('/dashboard/data-santri/edit/{id}', [SantriController::class, 'edit'])->name('edit');
});
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
