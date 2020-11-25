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
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');

Route::get('/services/{id?}', function ($id=0) {
    return view('services',['id'=>$id]);
})->where('id', '[0-9]+')->name('services');

Route::get('setlocale/{locale}',function($lang) {
   if(!in_array($lang, array_keys(config('app.locales')) )) abort(404);
   \Session::put('locale', $lang);
   return redirect()->back();
})->name('setlocale');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
