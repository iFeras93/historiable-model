<?php

use \Illuminate\Support\Facades\Route;
use \Iferas93\HistoriableModel\Http\Controllers\HistoryController;

Route::get('/changelog', [HistoryController::class, 'index'])->name('changelog.index');
Route::get('/changelog/{history}', [HistoryController::class, 'show'])->name('changelog.show');
