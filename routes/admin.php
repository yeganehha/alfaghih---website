<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\ContactusController;
use App\Http\Controllers\Admin\NewspaperController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\TeamController;
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

Route::redirect('/' ,'/gwc/dashboard')->name('dashboard');

Route::apiResource('setting' , SettingController::class )->only('index','store');
Route::get('contactus' , [ContactusController::class , 'index'] )->name('contactus.index');
Route::get('contactus/{contactus}' , [ContactusController::class , 'show'] )->name('contactus.show');
Route::resource('admins' , AdminController::class )->except('show' , 'destroy');
Route::resource('comments' , CommentController::class )->except('edit');
Route::resource('newspaper' , NewspaperController::class )->except('show' , 'destroy');



Route::resource('services' , ServiceController::class )->except('show' , 'destroy');
Route::resource('clients' , ClientController::class )->except('show' , 'destroy');
Route::resource('partners' , PartnerController::class )->except('show' , 'destroy');
Route::resource('teams' , TeamController::class )->except('show' , 'destroy');
Route::get('about_us' , [SettingController::class , 'aboutUs'])->name('about_us');
Route::POST('about_us' , [SettingController::class , 'storeAboutUs'] )->name('about_us.store');
Route::get('content' , [SettingController::class , 'content'])->name('content');
Route::POST('content' , [SettingController::class , 'storeContent'] )->name('content.store');
