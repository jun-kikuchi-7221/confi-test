<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConfiController;
use App\Http\Controllers\AuthController;

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

Route::get('/', [ConfiController::class, 'index']);
Route::post('/register', [AuthController::class, 'register' ]);

/* Route::get('/', function () {
    return view('welcome');
}); */
