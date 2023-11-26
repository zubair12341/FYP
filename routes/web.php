<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\TouristController;
use App\Http\Controllers\HotelVendorController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomePagesController;
use App\Http\Controllers\TourPlannerController;


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
    return view('welcome');
});
Route::get('/about', function () {
    return view('mainpages.about');
});
Route::get('/contact', function () {
    return view('mainpages.contact');
});
Route::get('/destination', function () {
    return view('mainpages.destination');
});
Route::get('/gallery', function () {
    return view('mainpages.gallery');
});

Auth::routes();

// Website Pages
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');





// Admin Routes
Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

});

// Hotel Vendor Routes
Route::group(['middleware' => 'hotel_vendor'], function () {
    Route::get('/hotel/vendor/dashboard', [HotelVendorController::class, 'dashboard'])->name('vendor.dashboard');

});

// Tourist Routes
Route::group(['middleware' => 'tourist'], function () {
    Route::get('/tourist/vendor/dashboard', [TouristController::class, 'dashboard'])->name('tourist.dashboard');

});

// Driver Routes
Route::group(['middleware' => 'driver'], function () {
    Route::get('/driver/vendor/dashboard', [DriverController::class, 'dashboard'])->name('driver.dashboard');

});


// Route::get('tour-planner', 'TourPlannerController@index')->name('tour_planner.index');
Route::get('/tour-planner', [TourPlannerController::class, 'index'])->name('tour_planner.index');
// Route::post('tour-planner/plan', 'TourPlannerController@planTour')->name('tour_planner.plan');
Route::post('tour-planner/plan', [TourPlannerController::class, 'planTour'])->name('tour_planner.plan');

