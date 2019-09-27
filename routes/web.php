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
Route::get('/signUp', function() {
  return view('signup');
})->name('signUp');
Route::get('/emil', function() {
  return view('email');
})->name('email');
Route::get('/reset_password', 'userController@resetpassword')->name('resetpassword');
Route::post('/send_email', 'userController@sendEmail')->name('sendEmail');
Route::post('/users', 'userController@add')->name('userverify');
Route::post('/email_varify', 'userController@emailVarify')->name('emailVarify');
Route::post('/forgotPassword', 'userController@forgotPassword')->name('forgotPassword');

Route::get('/post','PostController@index')->name('posts.index');
Route::get('/post/add','PostController@add')->name('posts.add');
Route::post('/post/insert','PostController@insert')->name('posts.insert');
Route::get('/post/edit/{id}','PostController@edit')->name('posts.edit');
Route::post('/post/update','PostController@update')->name('posts.update');
Route::get('/post/delete/{id}','PostController@delete')->name('posts.delete');
Route::get('/login','PostController@login')->name('posts.login');
// Route::get('/signUp','PostController@signUp')->name('signUp');
Route::get('/','PostController@home')->name('posts.home');
Route::get('/logout','PostController@logout')->name('posts.logout');
Route::post('/verify','userController@verify')->name('posts.verify');


Route::get('/service', 'PatientController@index')->name('patients');
Route::post('/service/insert','PatientController@insert')->name('patientInsert');
Route::get('/service/edit/{id}','PatientController@edit')->name('patientEdit');
Route::get('/service/delete/{id}','PatientController@delete')->name('patientDelete');
Route::get('/service/detail/{id}','PatientController@detail')->name('patientDetail');
Route::get('/service/add','PatientController@add')->name('patientAdd');
Route::get('/service/add/{id}','PatientController@addPrescription')->name('patientprescription');
Route::post('/service/update','PatientController@update')->name('patientUpdate');
Route::post('/service/search', 'PatientController@search')->name('patientSearch');
Route::post('/service/add', 'PatientController@prescriptionAdd')->name('prescriptionAdd');


// Route::get('/', function () {
//     return view('welcome');
// });
//
// Auth::routes();  

Route::get('/home', 'HomeController@index')->name('home');
