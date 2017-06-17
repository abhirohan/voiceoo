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
    return view('access-login');
})->name('basepath');

Auth::routes();

/*Route::get('/signin','SessionController@index')->name('signin');
Route::post('/signin','SessionController@authenticate')->name('signinenter');

Route::get('/home{id}', 'HomeController@index')->name('home');*/

Route::group(['middleware' => 'auth'],function(){


	Route::get('/profile',function(){return view('profile');})->name('profile');
	Route::get('/newsfeed',function(){return view('newsfeed');})->name('newsfeed');
	Route::get('/setting/personal', 'SettingpageController@personal')->name('personalSetting');
	Route::get('/setting/account', 'SettingpageController@account')->name('accountSetting');
	Route::get('/setting/changepassword', 'SettingpageController@changePassword')->name('changePasswordSetting');
	Route::get('/setting/hobbies', 'SettingpageController@hobbies')->name('hobbiesSetting');
	Route::get('/setting/education', 'SettingpageController@education')->name('educationSetting');

	Route::get('/setting/notification', 'SettingpageController@notification')->name('notificationSetting');
	Route::get('/setting/followrequest', 'SettingpageController@followrequest')->name('followrequestSetting');
});
