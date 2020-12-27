<?php

use App\Http\Controllers\HomepageController;
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

Route::get('/', [HomepageController::class, 'index'])->template(\App\Nova\Templates\Home::class)->name('home');
Route::get('/qui-sommes-nous', function () {
    return view('who-are-we');
});
Route::get('/exposants', function () {
    return view('exhibitors');
});
Route::get('/devenir-exposant', function () {
    return view('exhibitors');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/billetterie ', function () {
    return view('ticketing');
});
Route::get('/édition', function () {
    return view('edition');
});
