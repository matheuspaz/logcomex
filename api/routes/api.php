<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Jobs\ChartJobController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/unauthorized', function() {
    return response()->json('Unauthorized', 401);
})->name('unauthorized');

// Route::post('/register', [RegisterController::class, 'index']);
// Route::post('/login', [LoginController::class, 'index']);

Route::prefix('jobs')->group(function() {
    Route::get('/charts', [ChartJobController::class, 'index']);
});
