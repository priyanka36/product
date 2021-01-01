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


Route::get('product/create', 'Product\ProductController@create')->name('product.create');
Route::post('product/index', 'Product\ProductController@store')->name('product.store');
Route::post('product/update/{id}', 'Product\ProductController@update')->name('product.update');
Route::get('product/delete/{id}', 'Product\ProductController@delete')->name('product.delete');
Route::get('product/edit/{id}', 'Product\ProductController@edit')->name('product.edit');
Route::get('product/index', 'Product\ProductController@index')->name('product.index');


Route::get('user/index', 'User\UserController@index')->name('user.index');
Route::get('user/welcome', 'User\UserController@welcome')->name('user.welcome');
Route::get('user/create', 'User\UserController@create')->name('user.create');
Route::get('user/edit/{id}', 'User\UserController@edit')->name('user.edit');
Route::post('user/index', 'User\UserController@store')->name('user.store');
Route::post('user/update/{id}', 'User\UserController@update')->name('user.update');
Route::get('user/delete/{id}', 'User\UserController@delete')->name('user.delete');
Route::get('user/login', 'User\UserController@login')->name('user.login');
Route::post('user/check', 'User\UserController@checkUser')->name('user.checkUser');
Route::get('dashboard', 'User\UserController@dashboard')->name('user.dashboard');
Route::get('logout', 'User\UserController@logout')->name('user.logout');
Route::get('name', 'User\UserController@name')->name('user.name');


Route::get('student/index', 'Student\StudentController@index')->name('student.index');
Route::get('student/create', 'Student\StudentController@create')->name('student.create');
Route::get('student/edit/{id}', 'Student\StudentController@edit')->name('student.edit');
Route::post('student/index', 'Student\StudentController@store')->name('student.store');
Route::post('student/update/{id}', 'Student\StudentController@update')->name('student.update');
Route::get('student/delete/{id}', 'Student\StudentController@delete')->name('student.delete');


Route::get('teacher/index', 'Teacher\TeacherController@index')->name('teacher.index');
Route::get('teacher/create', 'Teacher\TeacherController@create')->name('teacher.create');
Route::get('teacher/edit/{id}', 'Teacher\TeacherController@edit')->name('teacher.edit');
Route::post('teacher/index', 'Teacher\TeacherController@store')->name('teacher.store');
Route::post('teacher/update/{id}', 'Teacher\TeacherController@update')->name('teacher.update');
Route::get('teacher/delete/{id}', 'Teacher\TeacherController@delete')->name('teacher.delete');


Route::get('staff/index', 'Staff\StaffController@index')->name('staff.index');
Route::get('staff/create', 'Staff\StaffController@create')->name('staff.create');
Route::get('staff/edit/{id}', 'Staff\StaffController@edit')->name('staff.edit');
Route::post('staff/index', 'Staff\StaffController@store')->name('staff.store');
Route::post('staff/update/{id}', 'Staff\StaffController@update')->name('staff.update');
Route::get('staff/delete/{id}', 'Staff\StaffController@delete')->name('staff.delete');


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

//to be deleted
Route::get('test', function () {

    $name = 'Hello priyanka';

    $number = '25.0';

    return str_replace('priyanka', 'poudel', $name);
});


