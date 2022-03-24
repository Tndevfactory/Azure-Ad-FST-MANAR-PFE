<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\IncidentController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// auth zone----
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::post('register', [LoginController::class, 'register'])->name('register');
Route::get('logout', [LoginController::class, 'logout'])->middleware('auth:api')->name('logout');
Route::get('users', [LoginController::class, 'users'])->middleware('auth:api')->name('users');

// incidents  zone
Route::get('incident-all', [IncidentController::class, 'IncidentAll'])->name('incident-all');
