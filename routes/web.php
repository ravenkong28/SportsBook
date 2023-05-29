<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArenaController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookingController;

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
    return view('outer-home');
});

// Route::get('/outer-home', function () {
//     return view('outer-home');
// });

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::post('/',[UserController::class, 'register']);
Route::post('/home',[UserController::class, 'login']);
Route::get('/home',[ArenaController::class, 'top_arenas']);
Route::get('/my-bookings',[BookingController::class, 'my_bookings']);
Route::get('/arena-detail/{id}',[ArenaController::class, 'arena_detail']);
Route::get('/bookings/{id}',[ArenaController::class, 'book']);
Route::get('/category-arena/{id}',[CategoryController::class, 'arena_category']);
Route::get('/my-account',[UserController::class, 'user_detail']);
Route::get('/edit-profile',[UserController::class, 'update_profile']);

