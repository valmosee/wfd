<?php

use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;

Route::get('/{param?}', [MyController::class, 'home'])->name('homepage');