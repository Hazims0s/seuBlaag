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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', 'reporter_controller@showall')->name('dashboard');

//Route::get('refresh_captcha', 'reporter_controller@refreshCaptcha')->name('refresh_captcha');
Route::get('/repo', 'HomeController@reporter')->name('Report');
Route::get('/repo/orderno/{id}','HomeController@reportno')->name('ReportNumber');
Route::post('/repo/add', 'HomeController@addReport');
Route::get('/dashboard/{id}','reporter_controller@getDetails')->name('Details');
Route::post('/dashboard/update', 'ReportUpdateController@addUpdate');

Route::get('/home', 'HomeController@home')->name('Home');

Route::get('/track', 'HomeController@track')->name('Track');
Route::post('/track/get', 'HomeController@getDetails');

Route::get('/categories', 'categoriesController@showall')->name('Category');
Route::post('/categories/add', 'categoriesController@add');


Route::get('/branches', 'branchesController@showall')->name('branches');
Route::post('/branches/add', 'branchesController@add');

