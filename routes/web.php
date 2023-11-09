<?php
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

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;

Route::get('/', [DashboardController::class, 'login'])->name('login');

Route::get('/register', [DashboardController::class, 'register'])->name('register');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::resource('posts', PostController::class)->except(['index']);
