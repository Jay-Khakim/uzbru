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
    Route::get('/checkmembers', 'PageController@checkmembers')->name('checkmembers');
    Route::get('/check', 'PageController@check')->name('check');

    // Information
    Route::get('/partners', 'PageController@partners')->name('partners');
    Route::get('/faq', 'PageController@faq')->name('faq');

    //News
    Route::get('/news', 'PageController@news')->name('news');
    Route::get('/news/{id}', 'PageController@singlenews')->name('single-news');
    Route::get('/association-news', 'PageController@associationnews')->name('association-news');

    // Media
    Route::get('/photos', 'PageController@photos')->name('photos');
    Route::get('/videos', 'PageController@videos')->name('videos');

    // Contacts
    Route::get('/contacts', 'PageController@contacts')->name('contacts');



});
