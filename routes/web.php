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

Route::redirect('/', '/en');

Route::group(['prefix' => '{language}'], function () {
    // Route::get('/', function () {
    //     return view('welcome');
    // });

    Route::get('/', 'PageController@index')->name('home');

    // Association
    Route::get('/association', 'PageController@association')->name('association');
    Route::get('/about', 'PageController@about')->name('about');
    Route::get('/services', 'PageController@services')->name('services');
    Route::get('/team', 'PageController@team')->name('team');
    Route::get('/branches', 'PageController@branches')->name('branches');

    // Membership
    Route::get('/bemember', 'PageController@bemember')->name('bemember');
    Route::get('/members', 'PageController@members')->name('members');
    Route::get('/members/{id}', 'PageController@singlemember')->name('single-member');

});
