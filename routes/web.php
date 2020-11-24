<?php

use App\Http\Controllers\redirectController;
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

#Route::get('/user', [UserController::class, 'index']);
Route::get('/send', [redirectController::class, 'send']);
Route::get('/{shortner}',[redirectController::class, 'index']);

