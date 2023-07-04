<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
#use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\GoogleAuthController;

Route::get('/', [EventController::class, 'index']);

Route::get('/acompanhantes', [EventController::class, 'acompanhantes']);
Route::get('/events/create', [EventController::class, 'create'])->middleware('auth');
Route::get('/events/{user_id}', [EventController::class, 'show']);
Route::delete('/events/{user_id}', [EventController::class, 'destroy'])->middleware('auth');
Route::get('/events/edit/{user_id}', [EventController::class, 'edit'])->middleware('auth');
Route::put('/events/update/{user_id}', [EventController::class, 'update'])->middleware('auth');
Route::post('/events', [EventController::class, 'store']);
Route::get('/planos', [EventController::class, 'planos']);

Route::get('/perfilCriado', [EventController::class, 'perfilCriado'])->middleware('auth');

Route::fallback(function () {
    return view('error404');
});

Route::get('/painel', [EventController::class, 'painel'])->middleware('auth');

Route::get('auth/google', [GoogleAuthController::class, 'redirect'])->name('google-auth');
Route::get('auth/google/callback', [GoogleAuthController::class, 'callbackGoogle']);
