<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\PointageController;
use App\Http\Controllers\ParametreController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('agents', AgentController::class);
Route::resource('pointages', PointageController::class)->only(['index']);
Route::get('parametres', [ParametreController::class, 'index'])->name('parametres.index');
Route::post('parametres', [ParametreController::class, 'update'])->name('parametres.update');
