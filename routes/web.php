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

Route::resource('classes', 'ClassesController');

//Components of the classes.
Route::resource('classes.labs', 'LabsController');
Route::resource('classes.labs.assignments', 'AssignmentsController');

//Users of the classes:
Route::resource('classes.teachers', 'TeachersController');
Route::resource('classes.teachers.assistants', 'AssistantsController');
Route::resource('classes.students', 'StudentsController');
