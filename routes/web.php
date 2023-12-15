<?php

use App\Http\Controllers\EbsiaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get('/',[EbsiaController::class,'index']);

Route::get('/about', function () {
        return view('frontend/about');
    });

Route::get('/service', function () {
        return view('frontend/service');
    });

    Route::get('/countries', function () {
        return view('frontend/countries');
    });

    Route::get('/team', function () {
        return view('frontend/team');
    });

    Route::get('/testimonial', function () {
        return view('frontend/testimonial');
    });

    Route::get('/contact', function () {
        return view('frontend/contact');
    });

    Route::post('/contact', [ContactController::class, 'process'])->name('contact.process');