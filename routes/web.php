<?php

use App\Http\Controllers\{
    ActivityController,
    DestinationController,
    InstaPostController,
    LandingPageController,
    LocationController,
    LoginController,
    LogoController,
    ToursController,
    TourTypeController
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
Route::get('/tours/{slug}', [LandingPageController::class, 'show'])->name(name: 'tour.details');
Route::get('/tour/list', [LandingPageController::class, 'list'])->name('tour.list');
Route::get('/contact-us', [LandingPageController::class, 'contactUs'])->name('contactUs');
Route::post('/contact-us-form', [LandingPageController::class, 'contactUsForm'])->name('contactUsForm');
Route::get('/tour/list/{tour_type_id}', [LandingPageController::class, 'tourTypeList'])->name('tour.list.tourType');


// Login routes should NOT be under auth middleware
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login/user', [LoginController::class, 'login'])->name('loginUser');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');


// These routes require user to be authenticated
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
    Route::get('/tour/{id}', [ToursController::class, 'showTour'])->name('tour.show');
    Route::put('tour/update/{id}', [ToursController::class, 'update'])->name('tour.update');
    Route::delete('tour/delete/{id}', [ToursController::class, 'destroy'])->name('tour.delete');

    // Destination 
    Route::get('destination', [DestinationController::class, 'index'])->name('destination');
    Route::get('destination/create', [DestinationController::class, 'create'])->name('destination.create');
    Route::post('destination/store', [DestinationController::class, 'store'])->name('destination.store');
    Route::get('destination/edit/{id}', [DestinationController::class, 'edit'])->name('destination.edit');
    Route::put('destination/update/{id}', [DestinationController::class, 'update'])->name('destination.update');
    Route::delete('destination/delete/{id}', [DestinationController::class, 'destroy'])->name('destination.delete');

    Route::get('logo', [LogoController::class, 'index'])->name('logo');
    Route::post('logo', [LogoController::class, 'storeOrUpdate'])->name('logo.storeOrUpdate');

    route::resource("insta-post", InstaPostController::class);
    route::resource("tour-type", TourTypeController::class);
    Route::post('/tour-type/toggle-status/{id}', [TourTypeController::class, 'toggleStatus']);
    Route::post('/update-order-number/{id}', [TourTypeController::class, 'updateOrderNumber']);

});
