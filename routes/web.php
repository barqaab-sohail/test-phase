<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('index');
});
Route::get('/imageList',[HomeController::class, 'imageList']);
Route::post('/image',[HomeController::class, 'storeImage']);
Route::get('/videoList',[HomeController::class, 'videoList']);
Route::post('/video',[HomeController::class, 'storeVideo']);
Route::post('/email',[HomeController::class, 'storeEmail']);
