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

Route::get('/', 'PageController@index'); 
Route::get('/results', 'PageController@results'); 
Route::get('/account', 'AccountController@index'); 


// Route::get('/results', function () {
//     return view('pages/results');
// });

Route::get('/account', function () {
    return view('account/dashboard');
});



Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


