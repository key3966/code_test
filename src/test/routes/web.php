<?php

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('person', \App\Http\Controllers\PersonController::class)->middleware(['auth'])->only(['index','show']);

Route::get('/api1', [\App\Http\Controllers\ApiController::class, 'testApi1'])->middleware(['auth'])->name('api1');
Route::get('/api2', [\App\Http\Controllers\ApiController::class, 'testApi2'])->middleware(['auth'])->name('api2');

require __DIR__.'/auth.php';
