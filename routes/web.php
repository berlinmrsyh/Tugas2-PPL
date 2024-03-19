<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AddressController;

Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'Auth\RegisterController@register');

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');

// Rute untuk User
Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
Route::middleware('auth')->group(function () {
    Route::post('/update-user', [UserController::class, 'update']);
    Route::get('/get-user', [UserController::class, 'getUser']);
    Route::post('/logout', [UserController::class, 'logout']);
});

// Rute untuk Contact
Route::middleware('auth')->group(function () {
    Route::post('/create-contact', [ContactController::class, 'create']);
    Route::post('/update-contact', [ContactController::class, 'update']);
    Route::get('/get-contact/{id}', [ContactController::class, 'get']);
    Route::get('/search-contact', [ContactController::class, 'search']);
    Route::post('/remove-contact', [ContactController::class, 'remove']);
});

// Rute untuk Address
Route::middleware('auth')->group(function () {
    Route::post('/create-address', [AddressController::class, 'create']);
    Route::post('/update-address', [AddressController::class, 'update']);
    Route::get('/get-address/{id}', [AddressController::class, 'get']);
    Route::get('/list-address', [AddressController::class, 'list']);
    Route::post('/remove-address', [AddressController::class, 'remove']);
});


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

// Route untuk halaman landing
Route::get('/', function () {
    return view('landing');
})->name('landing');

// Anda mungkin perlu menambahkan route untuk handle logout secara khusus, tergantung pada implementasi Anda
