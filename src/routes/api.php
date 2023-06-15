<?php

use App\Http\Controllers\testing\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

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

Route::middleware('auth:api')->get('/userinfo', function (Request $request) {
    return $request->user();
});

// PostMan Check Token
Route::post('loginApi',[RegisterController::class,'loginApi'])->name('loginApi');



// Route::post('login',function (Request $request){
//     $credentials = $request->only(['email','password']);

//     if(!$token = auth()->attempt($credentials)){
//         abort(401, 'Unauthorized');
//     }

//     return response()->json([
//         'data' => [
//             'token' => $token,
//             'token_type' => 'bearer',
//             'expires_in' => auth()->factory()->getTTL() * 60
//         ]
//         ]);
// });

// Route::post('registerPost', [AuthController::class,'registerPost'])->name('registerPost');