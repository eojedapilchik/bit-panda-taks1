<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserDetailController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users/active/{country_name?}', [UserController::class, 'showActiveByCountry'])->name('active_users');

Route::put('user_details/{id}', [UserDetailController::class, 'editIfExists'])->name('user_details.edit');

Route::delete('/users/{user}', [UserController::class, 'deleteUserNoDetails'])->name('delete_users');