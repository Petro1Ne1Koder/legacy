<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;


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

Route::get('/', [MainController::class, 'index']); 
Route::get('/index', [MainController::class,'index']) ->name('landing');
Route::get('/info', [MainController::class, 'info']); 
Route::get('/info/{item_id}', [MainController::class, 'info1']); 
Route::get('/news', [MainController::class, 'news']);
Route::get('/news/{news_id}', [MainController::class, 'news1']);
Route::get('/start', [MainController::class, 'start']);

Route::get('/auth', [MainController::class,'auth']) ->name('auth');
Route::get('/reg', [MainController::class,'reg']);
Route::post('/reg/check', [MainController::class,'reg_check']);
Route::post('/auth/check', [MainController::class,'auth_check']);
Route::post('/auth/logout', [MainController::class,'logout']);
Route::get('/prof/{user_id}', [MainController::class,'prof']);