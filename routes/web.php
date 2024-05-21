<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class,'index']);

Route::get('/who_we_are', [HomeController::class,'who_we_are']);

Route::get('/management', [HomeController::class,'management']);

Route::get('/clients', [HomeController::class,'clients']);

Route::get('/contact', [HomeController::class,'contact']);

Route::post('/new_contact', [HomeController::class,'new_contact']);

Route::get('/services', [HomeController::class,'services']);

Route::get('/appointment', [HomeController::class,'appointment']);

Route::post('/subscribe', [HomeController::class,'subscribe']);

Route::post('/post_appointment', [HomeController::class,'post_appointment']);

//Admin Routes
Route::prefix('admin')->middleware('auth','isAdmin')->group(function() {
    Route::get('dashboard', [AdminController::class,'index']);

    Route::get('appointments', [AdminController::class,'appointments']);
    Route::get('appointment/{id}', [AdminController::class,'appointment']);

    Route::get('messages', [AdminController::class,'messages']);
    Route::get('message/{id}', [AdminController::class,'message']);

    Route::get('all_staff', [AdminController::class,'all_staff']);
    Route::get('staff/{id}', [AdminController::class,'staff']);
    Route::get('new_staff', [AdminController::class,'new_staff']);
    Route::post('post_staff', [AdminController::class,'post_staff']);
    Route::post('update_staff/{id}', [AdminController::class,'post_staff']);

    Route::get('reviews', [AdminController::class,'reviews']);
    Route::get('review/{id}', [AdminController::class,'review']);
    Route::get('new_review', [AdminController::class,'new_review']);
    Route::post('post_review', [AdminController::class,'post_review']);
    Route::get('update_review/{id}', [AdminController::class,'post_review']);

    Route::get('services', [AdminController::class,'services']);
    Route::get('service/{id}', [AdminController::class,'service']);
    Route::get('new_service', [AdminController::class,'new_service']);
    Route::post('post_service', [AdminController::class,'post_service']);
    Route::get('update_service/{id}', [AdminController::class,'post_service']);
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/register', [HomeController::class,'index']);
