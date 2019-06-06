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

//Courses
Route::resource('courses', 'CoursesController');

//Course Components
Route::resource('courses.labs', 'LabsController');
Route::resource('courses.labs.assignments', 'AssignmentsController');

//Users
Route::resource('courses.teachers', 'TeachersController');
Route::resource('courses.teachers.assistants', 'AssistantsController');
Route::resource('courses.students', 'StudentsController');

//Contact
Route::get('contact', 'ContactFormController@create')->name('contact.create');
Route::post('contact', 'ContactFormController@store')->name('contact.store');
