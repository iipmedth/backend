<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;

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

Route::post('register', [\App\Http\Controllers\AuthController::class, 'register']);
Route::post('login', [\App\Http\Controllers\AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('user', [\App\Http\Controllers\AuthController::class, 'user']);
    Route::get('user/patient', [\App\Http\Controllers\AuthController::class, 'patient']);
    Route::get('patient/measure/{id}/{hand}', [\App\Http\Controllers\PatientController::class, 'measure']);
    Route::post('logout', [\App\Http\Controllers\AuthController::class, 'logout']);

    Route::apiResources([
      'patients' => PatientController::class,
      'measures' => MeasureController::class,
    ]);
});
