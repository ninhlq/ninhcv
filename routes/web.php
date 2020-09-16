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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'CvController@cv')->name('index');
Route::get('/create', 'CvController@create')->name('create');
Route::post('/them', 'CvController@store')->name('store');

Route::get('/resume', 'CvController@resume')->name('resume');
Route::post('/edit_resume', 'CvController@add')->name('add');

Route::get('/portfolio', 'CvController@portfolio')->name('portfolio');
Route::post('/portfolios', 'CvController@ad')->name('ad');

Route::get('/blog', 'CvController@blog')->name('blog');
Route::post('/blog', 'CvController@ass')->name('ass');

Route::get('/admin/edit/{id}', 'CvController@edit')->name('cv_edit');
Route::get('/admin/list', 'CvController@index')->name('cv_list');

Route::get('/edit/{id}', 'CvController@edit')->name('edit');

Route::get('/admin/resume/edit_resume/{id}', 'CvController@edit_resume')->name('edit_resume');
Route::post('/save/{id}', 'CvController@save')->name('save');
Route::post('/save_resume/{id}', 'CvController@save_resume')->name('save_resume');

Route::get('/admin/portfolio/edit_portfolio/{id}', 'CvController@edit_portfolio')->name('edit_portfolio');
Route::post('/save_portfolio/{id}', 'CvController@save_portfolio')->name('save_portfolio');

Route::get('/admin/blog/edit_blog/{id}', 'CvController@edit_blog')->name('edit_blog');
Route::post('/save_blog/{id}', 'CvController@save_blog')->name('save_blog');

Route::get('/admin/contact/edit_contact/{id}', 'CvController@edit_contact')->name('edit_contact');
Route::post('/save_contact/{id}', 'CvController@save_contact')->name('save_contact');
Route::get('/contact', 'CvController@contact')->name('contact');
Route::post('/contact', 'CvController@moi')->name('moi');
