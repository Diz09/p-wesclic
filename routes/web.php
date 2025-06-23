<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\TaskController;

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

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/laporan-keuangan', [LaporanController::class, 'index'])
        ->middleware(['auth', 'role:manajer'])
        ->name('laporanKeuangan');

    Route::get('/produk', function () {
        $products = \App\Models\Product::all();
        return view('product.index', compact('products'));
    })->name('product');

    Route::get('/tugas', [TaskController::class, 'index'])->name('tasks');
    Route::get('/tugas/create', [TaskController::class, 'create'])->name('task.create');
    Route::post('/tugas/store', [TaskController::class, 'store'])->name('task.store');

    require __DIR__.'/auth.php';
});

