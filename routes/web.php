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
Route::resource('teachers', 'TeachersController');
Route::resource('assistants', 'AssistantsController');
Route::resource('students', 'StudentsController');

//Contact
Route::get('contact', 'ContactFormController@create')->name('contact.create');
Route::post('contact', 'ContactFormController@store')->name('contact.store');

//Download
Route::get('/givefile/{assignment}', 'AssignmentsController@fileDownload');

//Manual
Route::get('/user_manual/manual_Index', function () {
    return view('user_manual/manual_Index');
})->name('manual_Index');
Route::get('/user_manual/manual_Login', function () {
    return view('user_manual/manual_Login');
})->name('manual_Login');
Route::get('/user_manual/manual_Register', function () {
    return view('user_manual/manual_Register');
})->name('manual_Register');
Route::get('/user_manual/manual_Guest_Permissions', function () {
    return view('user_manual/manual_Guest_Permissions');
})->name('manual_Guest_Permissions');
Route::get('/user_manual/manual_Student_Permissions', function () {
    return view('user_manual/manual_Student_Permissions');
})->name('manual_Student_Permissions');
Route::get('/user_manual/manual_Teacher_Permissions', function () {
    return view('user_manual/manual_Teacher_Permissions');
})->name('manual_Teacher_Permissions');
