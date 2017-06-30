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
Route::group(['middleware' => 'guest'],function(){

	Route::get('/', function () {
	    return view('access-login');
	})->name('basepath');

	Auth::routes();
	Route::get('/newuser','RegisterController@index')->name('registerview');
	Route::post('/newuser','RegisterController@store')->name('registerhit');

});

/*---------------------------------Auth Middleware---------------------------------*/

Route::group(['middleware' => 'auth'],function(){


	//Profile Route
	Route::get('/profile',function(){
		$currentUserId = Auth::User()->id;
			return redirect()->route('profile',['id' => $currentUserId]);
	});
	Route::get('/profile/{id?}','UserController@index')->name('profile');
	Route::get('/aboutme/{id?}','UserController@aboutIndex')->name('aboutme');
	Route::get('/newsfeed','UserController@newsfeed')->name('newsfeed');
	Route::get('/setting/personal', 'SettingpageController@personal')->name('personalSetting');
	Route::get('/setting/account', 'SettingpageController@account')->name('accountSetting');
	Route::get('/setting/changepassword', 'SettingpageController@changePassword')->name('changePasswordSetting');
	Route::get('/setting/hobbies', 'SettingpageController@hobbies')->name('hobbiesSetting');
	Route::get('/setting/education', 'SettingpageController@education')->name('educationSetting');
	Route::post('/avatarupload/', 'UserController@uploadAvatar')->name('avatarupload');
	Route::post('/coverupload/', 'UserController@uploadCover')->name('coverupload');
	Route::post('/tinystatus/', 'UserController@uploadTinyStatus')->name('tinyStatusUplaod');
	Route::post('/note-upload/', 'PostnoteController@noteStore')->name('newnoteUplaod');

	Route::get('/setting/notification', 'SettingpageController@notification')->name('notificationSetting');
	Route::get('/setting/followrequest', 'SettingpageController@followrequest')->name('followrequestSetting');

	//Setting Save
	Route::post('/settingsave', 'SettingpageController@storePersonal')->name('savePersonalSetting');
	Route::post('/changepassword', 'SettingpageController@storePassword')->name('saveNewPasswordSetting');
	Route::post('/settingsocial', 'SettingpageController@storeSocial')->name('saveSocialSetting');
	Route::post('/settinginterest', 'SettingpageController@storeInterest')->name('saveinterestSetting');
	Route::post('/settingeducation', 'SettingpageController@storeEducation')->name('saveEducationSetting');
	Route::post('/settingWork', 'SettingpageController@storeWork')->name('saveWorkSetting');



	//Logout
	Route::post('logout', 'Auth\LoginController@logout')->name('logout');
});
