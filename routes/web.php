<?php

use \Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', 'HomeController@index')
    ->name('home');

Route::get('/', function() {
    return redirect()->route('home'); });

Route::get('about', function() {
    return view('about');
})->name('about');

Route::get('contact', function() {
    return view('contact');
})->name('contact');

Route::get('stats', 'StatsController@index')
    ->name('stats');

Route::get('/content/base', 'Base@index')
    ->name('content.base');

Route::get('/content/pattern', function() {
    return redirect()->route('home'); })
    ->name('content.pattern');

Route::post('/layout/store', 'Layout@store')
    ->name('layout.store');
Route::post('/api/layouts/delete', 'Layout@delete')
    ->name('api.layouts.delete');

Route::post('/exploit/store', 'LayoutExploit@store')
    ->name('exploit.store');
Route::post('/api/exploit/delete', 'LayoutExploit@delete')
    ->name('api.exploit.delete');

Route::get('/content/info', 'Info@index')
    ->name('content.info');
