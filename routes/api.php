<?php

use App\Http\Controllers\ApiGebruikersController;
use App\Http\Controllers\ApiBerichtenController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/gebruiker', [ApiGebruikersController::class, 'ShowAll']);
Route::get('/gebruiker/{gebruiker}', [ApiGebruikersController::class, 'Show']);
Route::post('/gebruiker', [ApiGebruikersController::class, 'Store']);
Route::put('/gebruiker/{gebruiker}', [ApiGebruikersController::class, 'Update']);
Route::delete('/gebruiker/{gebruiker}', [ApiGebruikersController::class, 'Delete']);


Route::get('/berichten', [ApiBerichtenController::class, 'ShowAll']);
Route::get('/berichten/{berichten}', [ApiBerichtenController::class, 'Show']);
Route::post('/berichten', [ApiBerichtenController::class, 'Store']);
Route::put('/berichten/{berichten}', [ApiBerichtenController::class, 'Update']);
Route::delete('/berichten/{berichten}', [ApiBerichtenController::class, 'Delete']);
