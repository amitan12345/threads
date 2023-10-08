<?php

use App\Http\Controllers\Login\LoginController;
use App\Http\Controllers\Login\LoginFormController;
use App\Livewire\UserTweetList;
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

Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard', fn() => view('dashboard'));
});