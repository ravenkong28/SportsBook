<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArenasController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
})->middleware('guest');

Route::get('/about-us', function () {
    return view('about-us');
})->middleware('guest');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);


Route::get('/home',[ArenasController::class, 'top_arenas'])->name('home')->middleware('auth');

Route::get('/category-arena/{id}',[ArenasController::class, 'arena_category'])->middleware('auth');

Route::get('/arena-detail/{id}',[ArenasController::class, 'arena_detail'])->middleware('auth');

Route::get('/my-bookings',[BookingController::class, 'overview_bookings'])->middleware('auth');

Route::get('/my-account',[UserController::class, 'user_detail'])->middleware('auth');
Route::get('/my-account/{id}/edit',[UserController::class, 'edit_profile'])->name('edit_profile')->middleware('auth');
Route::put('/my-account/{id}',[UserController::class, 'update_profile'])->name('update_profile')->middleware('auth');
Route::delete('/my-account/{id}',[UserController::class, 'delete_profile'])->name('update_profile')->middleware('auth');

route::post('/booking/{id}', [BookingController::class, 'addbooking'])->name ('addbooking');

Route::get('/my-bookings', [BookingController::class, 'showbooking'])->name('showbooking')->middleware('auth');
Route::put('/my-bookings/{id}', [BookingController::class, 'finalizebooking'])->name('finalizebooking')->middleware('auth');
Route::delete('/my-bookings/{id}', [BookingController::class, 'deletebooking'])->name('deletebooking')->middleware('auth');

Route::get('/my-transaction', [BookingController::class, 'transaction'])->name('transaction')->middleware('auth');
Route::get('my-transaction/{id}/pay', [BookingController::class, 'confirmpayment'])->name('confirmpayment')->middleware('auth');
Route::put('/my-transaction/{id}', [BookingController::class, 'donepayment'])->name('donepayment')->middleware('auth');


Route::get('/home/my-arenas', [UserController::class, 'admin_myarenas'])->middleware('admin');
Route::get('/home/my-arenas/create', [UserController::class, 'create'])->middleware('auth');
Route::post('/home/my-arenas/', [UserController::class, 'store'])->middleware('auth');
Route::get('/home/my-arenas/{arenas:id}/edit', [UserController::class, 'edit'])->middleware('auth');
Route::put('/home/my-arenas/{arenas:id}', [UserController::class, 'update'])->middleware('auth');
Route::delete('/home/my-arenas/{arenas:id}', [UserController::class, 'destroy'])->name('deleteArena')->middleware('auth');

Route::get('/home/my-admin-store',[UserController::class, 'admin_myadminstore'])->middleware('admin');

