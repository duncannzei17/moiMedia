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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/preference','PagesController@preference');

Route::get('/landing','PagesController@landing');

Route::get('/publisher','PagesController@publisher');

Route::get('/home1','PagesController@home1');

Route::get('/home1','PagesController@single');

Route::get('/report','PagesController@report');

Route::get('/edit','PagesController@edit');

Route::get('/welcome','PagesController@welcome');

Route::get('single/{id}',['as'=> 'single', 'uses'=>'PagesController@single']);

Route::resource('Preference', 'PreferencesController');

Route::resource('Article', 'ArticlesController');

Route::resource('Feedback', 'FeedbackController');

Route::get('Article/{id}', 'ArticlesController@show');

Route::get('/addlike', 'LikesController@actOnLike');

Route::post('/articles/{id}/act', 'LikesController@actOnLike');

 