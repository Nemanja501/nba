<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::resource('/teams', 'App\Http\Controllers\TeamController');
Route::resource('/players', 'App\Http\Controllers\PlayerController');
Route::resource('/auth', 'App\Http\Controllers\AuthController');
Route::resource('/news', 'App\Http\Controllers\NewsController');
Route::get('/teams/news/{teamName}', [NewsController::class, 'showNewsForTeam']);
Route::post('/search', [NewsController::class, 'search']);

Route::middleware('authenticated')->group(function(){
    Route::get('/logout', [AuthController::class, 'destroy']);
    Route::post('/createcomment', [CommentController::class, 'store']);
});

Route::middleware('notauthenticated')->group(function(){
    Route::get('/register', [AuthController::class, 'showRegister']);
    Route::get('/login', [AuthController::class, 'showLogin']);
    Route::get('/email/verify/{id}', [AuthController::class, 'verifyEmail']);
});