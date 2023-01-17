<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('actor', function () {
    return view('actor');
});

Route::get('movie', function () {
    return view('movie');
});

Route::get('register', function () {
    return view('register');
});

Route::get('login', function () {
    return view('login');
});
Route::post('/userLogin', [UserController::class, 'userLogin']) -> name('userLogin');
Route::post('/register', [UserController::class, 'register']) -> name('register');
Route::get('/', [MovieController::class, 'showMovies']);
