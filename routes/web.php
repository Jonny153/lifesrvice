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


Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'PagesController@main')->name('main');

Route::get('services/{category?}/{service?}', 'ServicesController@index')
    ->where(['category' => '[a-z-_]+', 'service' => '[a-z-_]+']);

Route::get('{page}', 'PagesController@pages')
    ->where(['page' => '[a-z]+']);


Route::post('/call', 'FeedbackController@call')->name('call');
Route::post('/feedback', 'FeedbackController@feedback')->name('feedback');