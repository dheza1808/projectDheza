<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MobilController;

Route::get("/", function (){
    return view("welcome");
});

// Route::get("/index", function () {
//     return view("index");
// });

Route::get('/mobil', [MobilController::class, 'index'])->name('mobil.index');
Route::get('/create', [MobilController::class, 'create'])->name('mobil.create');
Route::post('/mobil', [MobilController::class, 'store'])->name('mobil.store');
Route::get('/mobil/{id}/edit', [MobilController::class, 'edit'])->name('mobil.edit');
Route::put('/mobil/{id}', [MobilController::class, 'update'])->name('mobil.update');
Route::delete('/mobil/{id}', [MobilController::class, 'destroy'])->name('mobil.destroy');

