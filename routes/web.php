<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn (): array => [config('app.name')]);

Route::middleware('guest')->group(function(){
    Route::post('/api/register', [AuthController::class, 'register']);
});
