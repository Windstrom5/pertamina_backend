<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LemburController;
use App\Http\Controllers\DinasController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('/users', [UserController::class, 'index']);
Route::get('/login/{username}/{password}', [UserController::class, 'login']);
Route::get('/getPekerjaData/{username}', [UserController::class, 'getUserDetails']);
Route::get('/searchLembur/{id}', [LemburController::class, 'searchLembur']);
Route::get('/getLemburData/{id}', [LemburController::class, 'getLembur']);
Route::post('/addLembur', [LemburController::class, 'saveLembur']);
Route::put('/editlembur/{id}', [LemburController::class, 'editLembur']);
Route::get('/searchDinas/{id}', [DinasController::class, 'searchhDinas']);
Route::get('/getDinasData/{id}', [DinasController::class, 'getDinas']);
Route::post('/addDinas', [DinasController::class, 'saveDinas']);
Route::put('/editDinas/{id}', [DinasController::class, 'editDinas']);