<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompagniesController;
use App\Http\Controllers\NewCompagnieController;

Route::get('/', [CompagniesController::class,'index'])->name('compagnies');
Route::get('/editCompagnie/{id}', [CompagniesController::class,"show"]);
Route::put('/editCompagnie/{id}/update', [CompagniesController::class,"update"]);
Route::delete('/allCompagnies/{id}/delete', [CompagniesController::class,'destroy']);

Route::get('/newCompagnie', [NewCompagnieController::class,"index"])->name('newCompagnie');
Route::post('/newCompagnie/create', [NewCompagnieController::class,'store']);
