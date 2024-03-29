<?php

use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\SlideController;
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
    return view('blog.index');
});

Route::redirect('home', 'dashboard');

Route::get('/login', [Authcontroller::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/dashboard', function () {
    return view('dashboard.index')->with(['title'=>'About']);
})->middleware('auth');

Route::resource('/dashboard/slide', SlideController::class)->middleware('auth');






