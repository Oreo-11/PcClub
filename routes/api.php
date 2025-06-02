<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\WorkerController;
use App\Http\Controllers\Api\ScheduleController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\AppointmentController;
use App\Http\Middleware\UserTokenIsValid;
use App\Http\Controllers\Api\EmailController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post("/register", [UserController::class, 'register']);
Route::post("/auth", [UserController::class, 'auth']);
Route::get('/autoAuth', [UserController::class, 'autoAuth'])->name('autoAuth');
Route::post("/authTocken", [UserController::class, 'authTocken']);
Route::get("/getAllInfo/{id}", [UserController::class, 'getAllInfo']);


Route::post('/allInfoTime', [ScheduleController::class, 'allInfoToBook']);
Route::post('/newAppointment', [AppointmentController::class, 'newAppointment'])->middleware(UserTokenIsValid::class);



Route::post('/authEmail', [UserController::class, 'authEmail']);
