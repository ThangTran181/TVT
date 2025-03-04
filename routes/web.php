<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\NhasanxuatController;
use App\Http\Controllers\ThuctapController;
use App\Models\NhaSanXuat;
use LDAP\Result;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nsx', [ThuctapController::class, 'get_all']);
Route::get('/nsx/add', [ThuctapController::class, 'add']);
Route::get('/nsx/edit/{id}', [ThuctapController::class, 'edit']);
Route::get('/nsx/delete/{id}', [ThuctapController::class, 'delete']);

// Route::resource('nhasanxuats', NhasanxuatController::class);

Route::get('/nhasanxuats', [NhasanxuatController::class, 'index'])->name('nhasanxuats.index');
Route::get('/nhasanxuats/create', [NhasanxuatController::class, 'create'])->name('nhasanxuats.create');
Route::get('/nhasanxuats/{id}/edit', [NhasanxuatController::class, 'edit'])->name('nhasanxuats.edit');
Route::delete('/nhasanxuats/{id}', [NhasanxuatController::class, 'destroy'])->name('nhasanxuats.destroy');
Route::post('/nhasanxuats', [NhasanxuatController::class, 'store'])->name('nhasanxuats.store');
Route::put('/nhasanxuats/{id}', [NhasanxuatController::class, 'update'])->name('nhasanxuats.update');
