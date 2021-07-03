<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\UserController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'auth:sanctum'], function () {

    // Route::post('/me', function(Request $request) {
    //     return auth()->user();
    // });


    Route::apiResource("login", UserController::class);

});

Route::apiResource('/author', AuthorController::class);

// Route::apiResource("login", userController::class);
