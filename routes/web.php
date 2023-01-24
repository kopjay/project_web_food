<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\SocialiteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/**
 * socialite auth
 */
Route::get('/auth/{provider}', [SocialiteController::class, 'redirectToProvider']);
Route::get('/auth/{provider}/callback', [SocialiteController::class, 'handleProvideCallback']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\MainController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\MainController::class, 'index'])->name('home');
Route::post('/success', [App\Http\Controllers\MainController::class,'successForm']);


Route::get('/recipe',[App\Http\Controllers\FoodController::class,'index']);

Route::post('/index/bookmark/{food}',[App\Http\Controllers\BookController::class,'store']);
Route::post('/bookmark/{food}',[App\Http\Controllers\BookController::class,'store']);
Route::get('/bookmark/delete/{book}',[App\Http\Controllers\BookController::class,'destroy']);

Route::get('/detail/{id}', [App\Http\Controllers\MainController::class,'detailCard']);
