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

//Route::get('/', function () {
  //  return view('welcome');
//});
//スラッシュの後ろに何か付け足した場合URLの後ろにその情報を書けば画面が表示される
Route::get('/','DiaryController@index')//DiaryControllerの中にあるindexというメソッドを呼び起こす
    ->name('diary.index');
    
Route::get('diary/create','DiaryController@create');

Route::POST('diary/create','DiaryController@store')->name('diary.create');