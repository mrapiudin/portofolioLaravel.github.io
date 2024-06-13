<?php

use App\Http\Controllers\PortoController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PortoController::class, 'home']);
Route::get('/home', [PortoController::class, 'home']);
Route::get('/about', [PortoController::class, 'about']);
Route::get('/project', [PortoController::class, 'project']);
Route::get('/contact', [PortoController::class, 'contact']);
