<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class , 'index'])->name('index');

Route::get('/about_us', function () { return view('about_us');})->name('about_us');

Route::get('/services', [HomeController::class , 'services'])->name('services');

Route::get('/our_team', function () { return view('our_team');})->name('our_team');

Route::get('/clients',  [HomeController::class , 'clients'])->name('clients');

Route::get('/partners', [HomeController::class , 'partners'])->name('partners');

Route::get('/news_events',[HomeController::class , 'newspaper'])->name('news_events');
Route::get('/news_events/{newspaper}',[HomeController::class , 'news'])->name('news');

Route::view('/consultation','consultation')->name('consultation');
Route::view('/contact_us','contact_us')->name('contact_us');


Route::get('/change/locale/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
})->where(['locale'=>('en|ar')])->name('change_locale')->withoutMiddleware('language');
