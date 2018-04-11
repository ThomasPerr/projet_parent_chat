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
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('accueil', 'AccueilController@index')->name('accueil');

Route::get('chat', 'ChatController@index')->name('chat');

/*
Route::get('sujet', 'SujetController@index')->name('sujet');*/

Route::resource('channel', 'ChannelController');

Route::middleware('auth')->group(function () {
    Route::resource('profile', 'UserController', [
        'only' => ['edit', 'update'],
        'parameters' => ['profile' => 'user']
    ]);
});