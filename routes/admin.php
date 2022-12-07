<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ContactusController;
use App\Http\Controllers\Admin\SettingController;
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
    return view('dashboard');
})->name('dashboard');

Route::apiResource('setting' , SettingController::class )->only('index','store');

Route::get('contactus' , [ContactusController::class , 'index'] )->name('contactus.index');
Route::get('contactus/{contactus}' , [ContactusController::class , 'show'] )->name('contactus.show');

Route::resource('admins' , AdminController::class )->except('show' , 'distro');
