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
use App\Service;
use App\Subservice;
use App\Portfolio;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', function () {
	require_once "../phpmailer/phpmailer.php";
	$validatedData = request()->validate([
    'name' => 'required',
    'phone' => 'required',
    'email' => 'email',
    'message' => 'required|min:2'
  ]);

	sendMail('feedback@inconventures.com', $validatedData['name'],
    $validatedData['name']."<br>\n".
    $validatedData['phone']."<br>\n".
    $validatedData['email']."<br>\n".
    $validatedData['message']
  );
  return view('contact', ['ok'=>true]);
})->name('contact');

Route::get('/portfolio/{subservice_id?}', function ($subservice_id=0) {
  if($subservice_id==0) {
    $portfolios = Portfolio::all();
  } else {
    $subservice = Subservice::where('id', '=', $subservice_id)->first();
    if($subservice) {
      $portfolios = $subservice->portfolios;

    } else {
      abort(404);
    }
  }
  return view('portfolio', ['subservice_id'=>$subservice_id, 'portfolios'=>$portfolios]);
})->name('portfolio');

Route::get('/services/{subservice_id?}', function ($subservice_id=1) {
  //return view('portfolio');
  $subservice = Subservice::where('id', '=', $subservice_id)->first();
  $service = $subservice->service;
  //dd($service);
  return view('services',[
    'service'=>$service,
    'subservice'=>$subservice
  ]);
})->where('service_id', '[0-9]+')->name('services');

Route::get('setlocale/{locale}',function($lang) {
   if(!in_array($lang, array_keys(config('app.locales')) )) abort(404);
   \Session::put('locale', $lang);
   return redirect()->back();
})->name('setlocale');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
