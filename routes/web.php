<?php

use Illuminate\Support\Facades\Auth;
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
    return view('landing');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/contents', [App\Http\Controllers\ContentController::class. 'edit'])->name('contents.edit')->middleware('auth');
//Route::get('/contents', [App\Http\Controllers\ContentController::class. 'create'])->name('contents.create')->middleware('auth');
//Route::get('/contents', [App\Http\Controllers\ContentController::class. 'index'])->name('contents.create')->middleware('auth');
//

Route::resource('contents',App\Http\Controllers\ContentController::class)->middleware('kick.non.user');
//Route::resource('types',App\Http\Controllers\TypeController::class);
