<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TecnicoController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('tecnico', TecnicoController::class);

Route::get('/tecnicos/dashboard', function () {
    return view('tecnicos.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/tecnicos/finalizacao', function () {
    return view('tecnicos.finalizacao');
})->middleware(['auth', 'verified'])->name('finalizacao');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
