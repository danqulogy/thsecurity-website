<?php

use Illuminate\Support\Facades\Route;
use Mailgun\Mailgun;


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

Route::get('/', 'SiteController@welcome')->name('home');

Route::get('/about', 'SiteController@about')->name('about');

Route::get('/services','SiteController@services')->name('services');

Route::get('/track-package', 'SiteController@getTrackPackage')->name('track');

Route::post('/track-package', 'SiteController@postFindPackage');

Route::get('contact-us', 'SiteController@getContactForm')->name('contact.get')->name('contact');
Route::post('contact-us', 'SiteController@postContactForm')->name('contact.post');

