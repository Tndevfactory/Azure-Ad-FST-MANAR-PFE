<?php


use App\Http\Controllers\CalendrierController;
use App\Http\Controllers\IncidentController;
use App\Http\Controllers\InterventionController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ValidationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



// auth zone
Route::post('login', [LoginController::class, 'apiLogin']);
Route::post('register', [LoginController::class, 'apiRegister']);
Route::get('logout', [LoginController::class, 'apiLogout'])->middleware('auth:api');
Route::get('users', [LoginController::class, 'apiUsers'])->middleware('auth:api');


// Calendrier zone
Route::get('calendrier-all', [CalendrierController::class, 'apiCalendrierAll']);

// incidents  zone
Route::get('incidents-all', [IncidentController::class, 'apiIncidentsAll']);

// interventions zone
Route::get('interventions-all', [InterventionController::class, 'apiInterventionsAll']);

// validations zone
Route::get('validations-all', [ValidationController::class, 'apiValidationsAll']);
