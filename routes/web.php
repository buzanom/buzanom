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

// Route::get('/', function () {
//     return view('welcome');
// });

// User
Route::get('/', 'MainController@index');
Route::get('/careers', 'MainController@career');
Route::post('/careerpost', 'MainController@careerpost');
Route::post('/contactsubmit', 'MainController@contactus');

// admin
Route::get('/admin', 'AdminController@index');
Route::post('/login', 'AdminController@login');
Route::get('/logout', 'AdminController@logout');
Route::get('/profile', 'AdminController@profile');
Route::get('/adminemailcheck', 'AdminController@adminemailcheck');
Route::get('/adminmobilecheck', 'AdminController@adminmobilecheck');
Route::get('/adminusernamecheck', 'AdminController@adminusernamecheck');
Route::get('/adminoldpwdcheck', 'AdminController@adminoldpwdcheck');
Route::post('/uploadadminprofilepic', 'AdminController@uploadadminprofilepic');
Route::get('/site_settings', 'AdminController@site_settings');
Route::get('/dashboard', 'AdminController@dashboard');
Route::get('/edashboard', 'AdminController@edashboard');
Route::post('/facetrack', 'AdminController@facetrack');
Route::get('/career', 'CareerController@index');
Route::get('/career_all_list', 'CareerController@career_all');
Route::get('/career_pending_list', 'CareerController@career_pending');
Route::get('/career_completed_list', 'CareerController@career_completed');
Route::get('/contact', 'ContactController@index');
Route::get('/contact_list', 'ContactController@contact');