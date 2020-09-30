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
*/

// Route::get('/', function () {
//     return view('layout.home');
// });
Route::get('/','LayoutController@home');

// Route::get('/profile','DashboardController@profile');
Route::get('/register','AuthController@register');
Route::get('/login','AuthController@login')->name('login');
Route::get('/logout','AuthController@logout');
Route::post('/postlogin','AuthController@postlogin');


Route::group(['middleware' => ['auth','checkRole:admin,client']],function(){
	// Route::get('/dashboard','DashboardController@client');
	Route::get('/dashboard','DashboardController@index');
	Route::get('/datarsud','DashboardController@datarsud');
	Route::get('/index1','DashboardController@index1');
	Route::get('/index2','DashboardController@index2');
	Route::get('/index3','DashboardController@index3');
	Route::get('/input','DashboardController@input');
	Route::get('/profile','DashboardController@profile');
	Route::post('/rsud/create','RsudController@create');
	Route::get('/rsud/{id}/edit','RsudController@edit');
	Route::get('/covid/{id}/edit','LayoutController@covid');
	Route::post('/rsud/{id}/update','RsudController@update');
	Route::post('/covid/{id}/update','LayoutController@updatecovid');
	Route::get('/rsud/{id}/delete','RsudController@delete');
	Route::get('/rsud/{id}/profile','RsudController@profile');
});

// Route::group(['middleware' => ['auth','checkRole:client']],function(){

	Route::get('/rsud/{id}/detail','RsudController@detail');
	Route::get('/home','ClientController@home');
	Route::get('/about','ClientController@about');
	Route::get('/detail','RsudController@detail');
	Route::post('/client/create','ClientController@create');
	Route::get('/client','ClientController@client');
	Route::get('/client/{id}/edit','ClientController@edit');
	Route::post('/client/{id}/update','ClientController@update');
	Route::get('/client/{id}/delete','ClientController@delete');
	Route::get('/client/{id}/profile','ClientController@profile');
	Route::get('/cari','ClientController@client');
	Route::get('/covid','RsudController@covid');
	// Route::get('/rsud','RsudController@index');
	Route::get('/learn','RsudController@learn');



	Route::get('/layout/direktori','LayoutController@direktori');
	Route::get('/layout/about','LayoutController@about');
	Route::get('/layout/contact','LayoutController@contact');
	Route::get('/direktori/{id}/detail','LayoutController@detail');
	Route::get('/direktori','LayoutController@index');



	Route::get('/directory', function () {
	    return view('directory');
	});


	Route::get('/more', function () {
	    return view('more');
	});

// });
	Route::get('/sigin', function () {
	    return view('sigin');
	});



// Route::get('/input', function () {
//     return view('input');
// });

// Route::get('/profile', function () {
//     return view('profile');
// });
 