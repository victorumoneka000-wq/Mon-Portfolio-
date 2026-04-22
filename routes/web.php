<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjetController;
use App\Models\projet;

Route::get('/', function () {
    $projets = projet::all();
    return view('index', compact('projets'));
});

Route::post('/contact', [ContactController::class, 'store']);
Route::get('/messages', [ContactController::class, 'index']);

Route::get('/projets', [ProjetController::class, 'index']);
Route::get('/projets/create', [ProjetController::class, 'create']);
Route::post('/projets', [ProjetController::class, 'store']);
Route::get('/projets/{projet}/edit', [ProjetController::class, 'edit']);
Route::post('/projets/{projet}', [ProjetController::class, 'update']);
Route::post('/projets/{id}/delete', [ProjetController::class, 'destroy']);
Route::post('/messages/{id}/delete', [ContactController::class, 'destroy']);
