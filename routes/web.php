<?php

use App\Http\Controllers\HabitController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn (): array => [config('app.name')]);
Route::prefix('/api')->name('api.')->group(function () {
   Route::get('/habits', [HabitController::class, 'index'])->name('habits.index');
});
