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
})->name('basepth');

/*Route::get('/css',function(){
	return "http://127.0.0.1/";
})->name('basepth');*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/setting/personal', 'SettingpageController@personal')->name('personalSetting');
Route::get('/setting/account', 'SettingpageController@account')->name('accountSetting');
Route::get('/setting/changepassword', 'SettingpageController@changePassword')->name('changePasswordSetting');
Route::get('/setting/hobbies', 'SettingpageController@hobbies')->name('hobbiesSetting');
Route::get('/setting/education', 'SettingpageController@education')->name('educationSetting');

Route::get('/setting/notification', 'SettingpageController@notification')->name('notificationSetting');
Route::get('/setting/followrequest', 'SettingpageController@followrequest')->name('followrequestSetting');
