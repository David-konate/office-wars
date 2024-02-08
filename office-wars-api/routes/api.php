<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SiteController;
use App\Http\Controllers\Api\TypeController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\EventController;
use App\Http\Controllers\Api\ImageController;
use App\Http\Controllers\Api\PlanetController;
use App\Http\Controllers\Api\ReviewController;
use App\Http\Controllers\Api\SecurityController;
use App\Http\Controllers\Api\AccomodationController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route users
Route::controller(SecurityController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
});

//Route users
Route::controller(UserController::class)->group(function () {
    Route::get('users/{user}', 'show');
    Route::get('users', 'index');
    Route::post('users/{user}', 'update')->middleware('auth:api');
    Route::delete('users/{user}', 'destroy')->middleware('auth:api');
});

//Route hotels
Route::controller(AccomodationController::class)->group(function () {
    Route::get('accommodations/{accommodation}', 'show');
    Route::get('accommodations', 'index');
    Route::post('accommodations', 'store')->middleware('auth:api');
    Route::post('accommodations/{accommodation}', 'update')->middleware('auth:api');
    Route::delete('accommodations/{accommodation}', 'destroy')->middleware('auth:api');
});

//Route évènements
Route::controller(EventController::class)->group(function () {
    Route::get('events/{event}', 'show');
    Route::get('events', 'index');
    Route::post('events', 'store')->middleware('auth:api');
    Route::post('events/{event}', 'update')->middleware('auth:api');
    Route::delete('events/{event}', 'destroy')->middleware('auth:api');
});

//Route images
Route::controller(ImageController::class)->group(function () {
    Route::get('images/{image}', 'show');
    Route::get('images', 'index');
    Route::post('images', 'store')->middleware('auth:api');
    Route::post('images/{image}', 'update')->middleware('auth:api');
    Route::delete('images/{image}', 'destroy')->middleware('auth:api');
});

//Route planetes
Route::controller(PlanetController::class)->group(function () {
    Route::get('planets/{planet}', 'show');
    Route::get('planets', 'index');
    Route::post('planets', 'store')->middleware('auth:api');
    Route::post('planets/{planet}', 'update')->middleware('auth:api');
    Route::delete('planets/{planet}', 'destroy')->middleware('auth:api');
});


//Route commentaires
Route::controller(ReviewController::class)->group(function () {
    Route::get('reviews/{review}', 'show');
    Route::get('reviews', 'index');
    Route::post('reviews', 'store')->middleware('auth:api');
    Route::post('reviews/{review}', 'update')->middleware('auth:api');
    Route::delete('reviews/{review}', 'destroy')->middleware('auth:api');
});

//Route des sites
Route::controller(SiteController::class)->group(function () {
    Route::get('sites/{site}', 'show');
    Route::get('sites', 'index');
    Route::post('sites', 'store')->middleware('auth:api');
    Route::post('sites/{site}', 'update')->middleware('auth:api');
    Route::delete('sites/{site}', 'destroy')->middleware('auth:api');
});


//Route des types
Route::controller(TypeController::class)->group(function () {
    Route::get('types/{type}', 'show');
    Route::get('types', 'index');
    Route::post('types', 'store')->middleware('auth:api');
    Route::post('types/{type}', 'update')->middleware('auth:api');
    Route::delete('types/{type}', 'destroy')->middleware('auth:api');
});
