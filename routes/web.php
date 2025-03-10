<?php

use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MyController::class, 'home'])->name('homepage');

Route::get('/katalog',[MyController::class, 'katalog'])->name('katalogPage');