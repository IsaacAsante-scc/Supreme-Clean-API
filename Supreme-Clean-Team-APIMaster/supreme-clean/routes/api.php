<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::get('/testing-the-api', function() {
    return ['message' => 'hello'];
});

Route::get('info', function() {phpinfo(); });


// Detail Packages
// CRUD
// 1.) GET ALL (GET) /api/packages
// 2.) CREATE A PACKAGE (POST) /api/packages
// 3.) GET A SINGLE (GET) /api/packages/{id}
// 4.) UPDATE A SINGLE (PUT/PATCH) /api/packages/{id}
// 5.) DELETE (DELETE) /api/packages/{id}

// Route to Service Item Controller
Route::resource('sItems', 'App\Http\Controllers\ServiceItemController');

// Route to Schedule Controller
Route::resource('schedule', 'App\Http\Controllers\ScheduleController');

// Route to Detail Packages
Route::resource('packages', 'App\Http\Controllers\DetailPackagesController');

// Route to Order
Route::resource('order', 'App\Http\Controllers\OrderController');

// Route to Payment
Route::resource('payment', 'App\Http\Controllers\PaymentController');

// Route to Customer
Route::resource('customer', 'App\Http\Controllers\CustomerController');

// Route to Custom Package
Route::resource('custom', 'App\Http\Controllers\CustomPackageController');

// Route to Custom Service
Route::resource('service', 'App\Http\Controllers\CustomServiceController');




// To create a resource (packages) in laravel
// 1. create database and migrations
// 2. create a model
// 2.5 create a service (Eloquent ORM)
// 3. create a controller to go get info from database
// 4. return the info



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
