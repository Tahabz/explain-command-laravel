<?php

use App\Http\Controllers\CommandController;
use App\Http\Controllers\PackageManagerController;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


//PackageManager Routes

Route::resource('package-managers', PackageManagerController::class);

//Command Routes
Route::resource('commands', CommandController::class);

//Argument Routes

Route::resource('arguments', UserController::class);

Route::fallback(function(){
    return response()->json(['error' => 'Resource not found.'], 404);
})->name('fallback');