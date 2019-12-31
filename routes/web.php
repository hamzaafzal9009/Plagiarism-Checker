<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'HomeController@index');
Route::get('/about-us', 'HomeController@about');
Route::resource('plagiarism-checker', 'PlagiarisamController')->only([
  'index', 'store'
]);
// Route::get('plagiarism-checker', 'PlagiarisamController@index');
// Route::post('plagiarism-checker/check', 'PlagiarisamController@check')->name('plagiarism-checker.check');
// Route::resource('/','MainController');
