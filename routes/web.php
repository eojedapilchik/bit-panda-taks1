<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users/active/{country_name?}', [UserController::class, 'showActiveByCountry'])->name('active_users');

Route::put('user_details/{id}', [UserDetailController::class, 'editIfExists'])->name('user_details.edit');