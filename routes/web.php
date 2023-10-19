<?php

use Illuminate\Support\Facades\Route;
use App\Models\Services;
use App\Models\Testimonial;

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
    $services = Services::all();
    $testimonial = Testimonial::all();
    return view('index', compact('services', 'testimonial'));
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/service', function () {
    return view('service');
});
