<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PlanosController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\AcompController;
use App\Http\Controllers\PainelController;
use App\Http\Controllers\PerfilCriadoController;
use App\Http\Controllers\ProfileController;

Route::get('/', [IndexController::class, 'index']);
Route::get('/acompanhantes', [AcompController::class, 'acompanhantes']);
Route::get('/events/create', [CrudController::class, 'create'])->middleware('auth');
Route::get('/events/{user_id}', [CrudController::class, 'show']);
Route::delete('/events/{user_id}', [CrudController::class, 'destroy'])->middleware('auth');
Route::get('/events/edit/{user_id}', [CrudController::class, 'edit'])->middleware('auth');
Route::put('/events/update/{user_id}', [CrudController::class, 'update'])->middleware('auth');
Route::post('/events', [StoreController::class, 'store']);
Route::get('/planos', [PlanosController::class, 'planos']);

Route::get('/perfilCriado', [PerfilCriadoController::class, 'perfilCriado'])->middleware('auth');

Route::fallback(function () {
    return view('error404');
});

Route::get('/painel', [PainelController::class, 'painel'])->middleware('auth');

Route::middleware('web')
    ->group(function () {
        Route::get('/', [IndexController::class, 'index']);
    });

//Test
Route::get('demo', [EventController::class, 'Demo']);
Route::get('/profile', [ProfileController::class, 'profile']);
