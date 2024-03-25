<?php

use App\Http\Controllers\WeatherController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/', [WeatherController::class, 'getWeather']);
Route::get('/home', [WeatherController::class, 'getWeather']);

Route::get('/maps/tinggimukaair', [WeatherController::class,'getWeatherMapsTMA']);
Route::get('/maps/curahhujan', [WeatherController::class,'getWeatherMapsCH']);

Route::get('/data', [WeatherController::class,'getWeatherData']);