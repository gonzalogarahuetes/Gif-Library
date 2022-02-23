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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile/{id}', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile.show');

Route::get('/item/create', [App\Http\Controllers\ItemsController::class, 'create'])->name('item.create');
Route::post('/item', [App\Http\Controllers\ItemsController::class, 'store'])->name('item.store');

Route::get('/item/{id}', [App\Http\Controllers\ItemsController::class, 'index'])->name('item.show');
