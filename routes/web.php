<?php

use App\Http\Controllers\CalendarController;
use App\Http\Controllers\GraphController;
use App\Http\Controllers\TonnagesController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\StoppersController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/', [WelcomeController::class, 'show']);
Route::get('/calendar/month/{date}/{factor}/{year}', [CalendarController::class, 'indexMonth']);

Route::get('/calendar/{category}', [CalendarController::class, 'index']);


Route::get('/search', [StoppersController::class, 'search']);



Route::resource('/tonnages', TonnagesController::class);
Route::resource('/record', RecordController::class);
Route::resource('/stoppers', StoppersController::class);
Route::resource('/graph', GraphController::class);
