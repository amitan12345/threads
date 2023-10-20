<?php

use App\Http\Controllers\Login\LoginController;
use App\Http\Controllers\Login\LoginFormController;
use App\Http\Controllers\OtherUserDashboardController;
use App\Http\Controllers\RegisterAccountController;
use App\Http\Controllers\ThreadDetailController;
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

Route::get('/login', [LoginFormController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('register-account', [RegisterAccountController::class, 'index']);
Route::post('register-account', [RegisterAccountController::class, 'registerAccount']);

Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard', fn() => view('dashboard'));

    Route::redirect('/', '/dashboard', 301);

    Route::get('/thread/{threadId}', [ThreadDetailController::class, 'index']);

    Route::get('/dashboard/{userId}', [OtherUserDashboardController::class, 'index']);
});
