<?php

use App\Http\Controllers\{
    ActivityController,
    LandingPageController,
    LocationController,
    LoginController,
    ToursController
};
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [LandingPageController::class, 'index'])->name('landingaPage');

Route::get('/admin', function () {
    return view('admin_pannel.layout.app');
})->name('admin');


// ✅ Login routes should NOT be under auth middleware
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login/user', [LoginController::class, 'login'])->name('loginUser');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');


// ✅ These routes require user to be authenticated
Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return view('admin_pannel.dashboard.index');
    })->name('dashboard');

    // location 
    Route::get('location', [LocationController::class, 'index'])->name('location');
    Route::get('location/create', [LocationController::class, 'create'])->name('location.create');
    Route::post('location/store', [LocationController::class, 'store'])->name('location.store');
    Route::get('location/edit/{id}', [LocationController::class, 'edit'])->name('location.edit');
    Route::put('location/update/{id}', [LocationController::class, 'update'])->name('location.update');
    Route::delete('location/delete/{id}', [LocationController::class, 'destroy'])->name('location.delete');

    // activity 
    Route::get('activity', [ActivityController::class, 'index'])->name('activity');
    Route::get('activity/create', [ActivityController::class, 'create'])->name('activity.create');
    Route::post('activity/store', [ActivityController::class, 'store'])->name('activity.store');
    Route::get('activity/edit/{id}', [ActivityController::class, 'edit'])->name('activity.edit');
    Route::put('activity/update/{id}', [ActivityController::class, 'update'])->name('activity.update');
    Route::delete('activity/delete/{id}', [ActivityController::class, 'destroy'])->name('activity.delete');

    // tour 
    Route::get('tour', [ToursController::class, 'index'])->name('tour');
    Route::get('tour/create', [ToursController::class, 'create'])->name('tour.create');
    Route::post('tour/store', [ToursController::class, 'store'])->name('tour.store');
    Route::get('tour/edit/{id}', [ToursController::class, 'edit'])->name('tour.edit');
    Route::put('tour/update/{id}', [ToursController::class, 'update'])->name('tour.update');
    Route::delete('tour/delete/{id}', [ToursController::class, 'destroy'])->name('tour.delete');

});
