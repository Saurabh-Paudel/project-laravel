<?php
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ServiceController;
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
Route::get('/', [FrontendController::class, 'index']);
Route::get('/about', [FrontendController::class, 'about']);
Route::get('/contact', [FrontendController::class, 'contact']);
Route::get('/service', [FrontendController::class, 'service']);
Route::post('/save-contact', [FrontendController::class, 'save_contact']);

//----------------------- admin dashboard--------------------//
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile/edit', [ProfileInformationController::class, 'edit'])
        ->name('profile.edit');
//----------------------- admin homepage--------------------//
    Route::get('/dashboard', [DashboardController::class, 'index']);
//----------------------- messages--------------------//
    Route::get('/admin/message', [MessageController::class, 'index']);
    Route::get('/admin/message/{id}/delete', [MessageController::class, 'delete']);
//----------------------- Services--------------------//
    Route::get('/admin/service', [ServiceController::class, 'index']);
    Route::get('/admin/service/{id}/edit', [ServiceController::class, 'edit']);
    Route::get('/admin/service/{id}/delete', [ServiceController::class, 'delete']);
    Route::post('/admin/service/{id}/update', [ServiceController::class, 'update']);
    Route::get('/admin/service/add-service', [ServiceController::class, 'create']);
    Route::post('/admin/service/adding-service', [ServiceController::class, 'store']);

//----------------------- admin dashboard--------------------//
});

require __DIR__ . '/auth.php';
