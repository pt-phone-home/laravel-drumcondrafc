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

Route::get('/', 'PagesController@index');
Route::get('/news', 'PagesController@news');
Route::get('/newsitem/{id}', 'PagesController@newsitem');
Route::get('/about', 'PagesController@about');
Route::get('/findus', 'PagesController@findus');
Route::get('/fixtures', 'PagesController@fixtures');
Route::get('/fixtureitem/{id}', 'PagesController@fixtureitem');
Route::get('/results', 'PagesController@results');
Route::get('/resultsitem/{id}', 'PagesController@resultsitem');
Route::get('/members', 'PagesController@members');
Route::get('/gallery', 'PagesController@gallery');
Route::get('/contact', 'PagesController@contact');
Route::post('/contact', 'PagesController@sendEmail');

Route::get('/admin', 'AdminController@index')->middleware('auth');
Route::get('/login', 'AdminController@loginview')->name('auth.login.get');
Route::post('/login', 'AdminController@login')->name('auth.login.post');
Route::get('/logout', 'AdminController@logout')->name('auth.logout.get');

Route::get('admin/createarticle', 'AdminController@create')->middleware('auth');
Route::post('admin/create', 'AdminController@store')->middleware('auth');
Route::get('admin/{id}/edit', 'AdminController@edit')->middleware('auth');
Route::put('admin/{id}', 'AdminController@update')->middleware('auth');
Route::delete('admin/{id}', 'AdminController@destroy')->middleware('auth');


Route::get('admin/createfixtures', 'FixturesController@create')->middleware('auth');
Route::post('admin/createfixtures', 'FixturesController@store')->middleware('auth');
Route::get('admin/fixtures/{id}/editfixtures', 'FixturesController@edit')->middleware('auth');
Route::put('admin/fixtures/{id}', 'FixturesController@update')->middleware('auth');
Route::delete('admin/fixtures/{id}', 'FixturesController@destroy')->middleware('auth');

