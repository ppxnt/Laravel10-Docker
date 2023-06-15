<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\RerollController;
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

Route::get('/', function () {
    return view('home');
});

// Admin Route
Route::resource('userinfos', DataController::class);
Route::get('admin/home', [DataController::class,'index'])->name('admin.home');

// User Route
Route::post('login', [LoginController::class,'login'])->name('login');
Route::get('home', [LoginController::class,'home'])->name('home');
Route::get('register_page', [RegisterController::class,'register_page'])->name('register_page');
Route::post('register', [RegisterController::class,'register'])->name('register');
Route::delete('logout', [LoginController::class,'logout'])->name('logout');

// Reroll Route
Route::get('rerolls/index',[RerollController::class,'index'])->name('rerolls.index');
Route::post('reroll',[RerollController::class,'reroll'])->name('reroll');




// // LaravelDB Route
// Route::group(['middleware' => 'guest'], function () {
//     Route::get('/register', [AuthController::class, 'register'])->name('register');
//     Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
//     Route::get('/login', [AuthController::class, 'login'])->name('login');
//     Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
// });
 
// Route::group(['middleware' => 'auth'], function () {
//     Route::get('/home', [HomeController::class, 'index']);
//     Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
// });
