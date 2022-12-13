<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\ProfController;
use App\Http\Controllers\SalleController;
use App\Http\Controllers\EleveController;


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

Route::resource('eleves', EleveController::class);
Route::resource("classe", ClasseController::class);
Route::resource("prof", ProfController::class);

