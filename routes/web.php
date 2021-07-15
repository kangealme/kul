<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Middleware\LoginMiddleware;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Authentikasi

Route::get('/', [AuthController::class, 'get_login']);
Route::get('/register', [AuthController::class, 'get_register']);
Route::post('/', [AuthController::class, 'login'])->middleware('CekLogin');
