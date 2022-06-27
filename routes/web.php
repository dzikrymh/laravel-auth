<?php

use App\Http\Controllers\CloudMessageController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('dashboard')
    ->middleware(['auth:sanctum', 'verified', 'admin'])
    ->group(function(){
        Route::get('/', [CloudMessageController::class, 'index'])->name('dashboard');
        Route::post('push', [CloudMessageController::class, 'store'])->name('push');
    });
