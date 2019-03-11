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
Route::get('/buzanom_security', 'AdminController@index');

Route::post('/login', 'AdminController@login');
Route::get('/logout', 'AdminController@logout');

Route::get('/profile', 'AdminController@profile');
Route::post('/changepassword','AdminController@changepassword');
Route::post('/adminemailcheck', 'AdminController@adminemailcheck');
Route::post('/adminmobilecheck', 'AdminController@adminmobilecheck');
Route::post('/adminusernamecheck', 'AdminController@adminusernamecheck');
Route::post('/adminoldpwdcheck', 'AdminController@adminoldpwdcheck');
Route::post('/uploadadminprofilepic', 'AdminController@uploadadminprofilepic');

Route::get('/site_settings', 'AdminController@site_settings');
Route::post('/site_settings', 'AdminController@site_setting_update');

Route::get('/dashboard', 'AdminController@dashboard');

Route::get('/edashboard', 'AdminController@edashboard');
Route::post('/facetrack', 'AdminController@facetrack');

Route::get('/career', 'CareerController@index');
Route::get('/career_all_list', 'CareerController@career_all');
Route::get('/career_pending_list', 'CareerController@career_pending');
Route::get('/career_completed_list', 'CareerController@career_completed');

Route::get('/employee', 'EmployeeController@index');
Route::get('/employee_all_list', 'EmployeeController@employee_all');
Route::get('/employee_current_list', 'EmployeeController@employee_current');
Route::get('/employee_previous_list', 'EmployeeController@employee_previous');
Route::get('/contact', 'ContactController@index');
Route::get('/contact_list', 'ContactController@contact');