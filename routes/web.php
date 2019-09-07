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

Route::get('/content/base', 'Content\Base@index')
    ->name('content.base');

Route::get('/content/info', 'Content\Info@index')
    ->name('content.info');

Route::get('/content/guides', 'Content\Guide@index')
    ->name('content.guides');

Route::get('/content/pattern', function() {
    return redirect()->route('home'); })
    ->name('content.pattern');

Route::post('/layout/store', 'Content\Layout@store')
    ->name('layout.store');
Route::post('/api/layouts/delete', 'Content\Layout@delete')
    ->name('api.layouts.delete');

Route::post('/exploit/store', 'Content\LayoutExploit@store')
    ->name('exploit.store');
Route::post('/api/exploit/delete', 'Content\LayoutExploit@delete')
    ->name('api.exploit.delete');

Route::get('probability', function() {
    return view('probability');
})->name('probability');

Route::get('external/telegram', function() {
    return view('external.telegram');
})->name('external.telegram');
