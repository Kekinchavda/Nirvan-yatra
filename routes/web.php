<?php

use App\Http\Controllers\{
    ActivityController,
    LandingPageController,
    LocationController
};
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
route::get('/', [LandingPageController::class, 'index'])->name('landingaPage');

Route::get('/admin', function () {
    return view('admin_pannel.layout.app');
})->name('admin');
Route::get('/dashboard', function () {
    return view('admin_pannel.dashboard.index');
})->name('dashboard');

// location 
route::get('location', [LocationController::class, 'index'])->name('location');
route::get('location/create', [LocationController::class, 'create'])->name('location.create');
route::post('location/store', [LocationController::class, 'store'])->name('location.store');
Route::get('location/edit/{id}', [LocationController::class, 'edit'])->name('location.edit');
Route::put('location/update/{id}', [LocationController::class, 'update'])->name('location.update');
Route::delete('location/delete/{id}', [LocationController::class, 'destroy'])->name('location.delete');

// activity 
route::get('activity', [ActivityController::class, 'index'])->name('activity');
route::get('activity/create', [activityController::class, 'create'])->name('activity.create');
route::post('activity/store', [activityController::class, 'store'])->name('activity.store');
Route::get('activity/edit/{id}', [activityController::class, 'edit'])->name('activity.edit');
Route::put('activity/update/{id}', [activityController::class, 'update'])->name('activity.update');
Route::delete('activity/delete/{id}', [activityController::class, 'destroy'])->name('activity.delete');
