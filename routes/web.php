<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocationController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
route::get('/', [HomeController::class, 'index']);
route::get('pannel', [HomeController::class, 'pannelLayoutIndex']);

// location 
route::get('location', [LocationController::class, 'index']);
route::get('location/create-update', [LocationController::class, 'create']);
route::any('location/create-or-update', [LocationController::class, 'createOrUpdate'])->name('createOrUpdate');