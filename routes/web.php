<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\PostController;
=======
>>>>>>> b94ea2f8da19edcc990b91e10dd796579acd89eb
use App\Http\Controllers\LoginController;

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

<<<<<<< HEAD
// tampilan login
Route::get('/', [LoginController::class, 'login'])->name('login');

//ngirim input login bro
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

// content
Route::resource('/posts', PostController::class)->middleware('auth');
=======
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
>>>>>>> b94ea2f8da19edcc990b91e10dd796579acd89eb

Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');
Route::resource('/posts', \App\Http\Controllers\PostController::class);

<<<<<<< HEAD
// Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');
=======
//REGISTER
Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');
>>>>>>> b94ea2f8da19edcc990b91e10dd796579acd89eb
