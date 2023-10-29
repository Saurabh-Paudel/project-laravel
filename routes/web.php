<?php
use App\Http\Controllers\ServiceController;
use App\Models\Message;
use App\Models\Services;
use App\Models\Testimonial;
use Illuminate\Http\Request;
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

Route::post('/save-contact', function (Request $request) {
    //  return $request;

// rediret with success message back to contact page after saving
// show success message
    Session::flash('success', 'Message saved successfully');

    // Redirect back with the success message
    return redirect()->back();
});

//----------------------- admin dashboard--------------------//

Route::get('admin/dashboard', function () {
    $messagecount = Message::count();
    $servicecount = Services::count(); // count number entries in table
    return view('admin.dashboard', compact('messagecount', 'servicecount'));
});

Route::get('/admin/message', function () {
    $message = Message::all(); // fetch data from database
    return view('admin.message', compact('message'));
});

Route::get('/admin/service', [ServiceController::class, 'index']);
Route::get('/admin/service/{id}/edit', [ServiceController::class, 'edit']);
Route::post('/admin/service/{id}/update', [ServiceController::class, 'update']);
