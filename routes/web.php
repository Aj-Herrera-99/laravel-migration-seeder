<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index']);

Route::get('/chrono', [PageController::class, 'getTrainsByTime'])->name('page2');