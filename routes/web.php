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
    return view('front.auth.login');
});

Route::get('/dashboard', function () {
    return view('front.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

//Front

Route::group(['middleware' => ['auth:sanctum']], function () {
    
    Route::get('/company', function () {
        return view('front.company');
    })->name('company');

    Route::get('/workers', function () {
        return view('front.workers');
    })->name('workers');
    
    Route::get('/foo', function () {
        return view('front.dashboard');
    })->name('foo');
    
    Route::get('/bar', function () {
        return view('front.dashboard');
    })->name('bar');
});




//Back
