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
})->name('index');

Route::get('/about_us', function () { return view('about_us');})->name('about_us');

Route::get('/services', function () {
    return view('welcome');
})->name('services');

Route::get('/our_team', function () {
    return view('welcome');
})->name('our_team');

Route::get('/clients', function () {
    return view('welcome');
})->name('clients');

Route::get('/partners', function () {
    return view('welcome');
})->name('partners');

Route::get('/news_events', function () {
    return view('welcome');
})->name('news_events');

Route::get('/consultation', function () {
    return view('welcome');
})->name('consultation');

Route::get('/contact_us', function () {
    return view('welcome');
})->name('contact_us');

Route::get('/change/locale/{locale}', function () {
    return view('welcome');
})->name('change_locale');
