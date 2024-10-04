<?php

use App\Http\Controllers\PeminjamanController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PeminjamanController::class, 'index'])->name('index');
