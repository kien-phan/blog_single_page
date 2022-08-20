<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::post('/register', [App\Http\Controllers\ApiUserController::class, 'register']);
Route::post('/login', [App\Http\Controllers\ApiUserController::class, 'login']);
Route::resource('/post', App\Http\Controllers\ApiPostController::class);
Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/user', [App\Http\Controllers\ApiUserController::class, 'userInfo']);
});
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

