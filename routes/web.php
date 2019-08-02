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

//Backend
Route::get('uplaod_quations','BackendController@index');
Route::post('uplaod_quations','BackendController@saveUpload');
Route::post('uplaod_quations_img','BackendController@saveimgUpload');
//Note
Route::get('note','BackendController@getNote');
Route::post('note','BackendController@saveNote');

Route::get('program-note','BackendController@getprogramNote');
Route::post('program-note','BackendController@saveprogramNote');

Route::get('stud_list','BackendController@studList');
Route::get('edit_stud','BackendController@editStud');
Route::post('edit_stud/{id}','BackendController@updateStud');

Route::get('stud_mark','BackendController@marksDetail');
Route::post('stud_answer','BackendController@reprotDetail');

Route::get('progaming_quetions','BackendController@getPquetions');
Route::post('progaming_quetions','BackendController@savePquetions');

Route::get('activation_link','BackendController@activeTest');
Route::post('activation_link','BackendController@saveActiveTest');

//Frontend
Route::get('test','FrontendController@index');
Route::get('welcome','FrontendController@getWelcome');
Route::get('thank_you','FrontendController@getLast');
Route::post('test','FrontendController@testSubmit');

Route::get('programing_questions','FrontendController@getQuestions');