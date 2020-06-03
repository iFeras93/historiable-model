<?php

use Iferas93\HistoriableModel\Http\Controllers\HistoryController;
use Illuminate\Support\Facades\Route;

Route::get('/changelog', [HistoryController::class, 'index'])->name('changelog.index');
Route::get('/changelog/{id}', [HistoryController::class, 'show'])->name('changelog.show');
