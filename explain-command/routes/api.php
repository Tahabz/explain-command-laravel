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
// Route::get('/package-manager', [PackageManagerController::class, 'index']);
Route::resource('package-manager', PackageManagerController::class);
