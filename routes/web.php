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
Route::get('/test/{id?}/{name?}', function ($id,$name) {
    return 'ID='.$id.' Name = '.$name;
})->where(['id' => '[0-9]{5,}','name' => '[a-z]{2,}']);

Route::get('/test/show', 'TestController@show');

Route::get('/pages/show/{id}', 'Page@showOne')->where('id','[0-9]+');

Route::get('/pages/all/', 'Page@showAll');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
