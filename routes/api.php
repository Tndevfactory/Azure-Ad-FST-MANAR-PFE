<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TacheController;
use App\Http\Controllers\IncidentController;
use App\Http\Controllers\CalendrierController;
use App\Http\Controllers\ValidationController;
use App\Http\Controllers\InterventionController;



// auth zone
Route::post('login', [LoginController::class, 'apiLogin']);
Route::post('register', [LoginController::class, 'apiRegister']);
Route::get('logout', [LoginController::class, 'apiLogout'])->middleware('auth:api');
Route::get('users', [LoginController::class, 'apiUsers'])->middleware('auth:api');


// Calendrier zone
Route::get('calendrier-all', [CalendrierController::class, 'apiCalendrierAll']);

// incidents  zone
Route::get('incidents-all', [IncidentController::class, 'apiIncidentsAll']);
Route::delete('incident-delete', [IncidentController::class, 'apiIncidentDelete']);
Route::post('incident-create', [IncidentController::class, 'apiIncidentCreate']);
Route::put('incident-update', [IncidentController::class, 'apiIncidentUpdate']);

// interventions zone
Route::get('interventions-all', [InterventionController::class, 'apiGetInterventions']);

// Taches zone
Route::get('taches-all', [TacheController::class, 'apiGetTaches']);

// validations zone
Route::get('validations-all', [ValidationController::class, 'apiGetIncidentForClosing']);
Route::put('close-intervention', [ValidationController::class, 'apiCloseIntervention']);