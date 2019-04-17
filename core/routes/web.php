<?php

//admin Auth
Route::get('/admin', 'Admin\DashboardController@index')->name('admin.login');
Route::post('admin', 'Admin\DashboardController@login')->name('admin.login.post');

Route::get('/test', 'Admin\DashboardController@test');

Route::middleware(['Admin.Auth'])->prefix('admin')->namespace('Admin')->name('admin.')->group(function () {

    //dashboard
    Route::get('dashboard', 'DashboardController@dashboard')->name('dashboard');

    //Profile
    Route::get('profile', 'DashboardController@AdminProfile')->name('profile');
    //profile update
    Route::post('profile', 'DashboardController@AdminProfileUpdate')->name('profile');


    //Change Password
    Route::get('changePassword', 'DashboardController@changePassword')->name('changePassword');
    //change password
    Route::post('changePassword', 'DashboardController@PasswordUpdate')->name('changePassword');


    //logout
    Route::post('logout', 'DashboardController@logout')->name('logout');


    //basic settings
    Route::get('basicSettings', 'BasicSettingsController@basicSettings')->name('basicSettings');
    //basic pro
    Route::post('basicSettings', 'BasicSettingsController@BasicSettingsPro')->name('basicSettingsPro');



    //SMS settings
    Route::get('smsSettings', 'SmsController@SmsSettings')->name('SmsSettings');
    //SMS Settings pro
    Route::post('smsSettings', 'SmsController@SmsSettingsPro')->name('SmsSettingsPro');


    //Email settings
    Route::get('emailSettings', 'EmailSettingsController@EmailSettings')->name('emailSettings');
    //Email Settings pro
    Route::post('emailSettings', 'EmailSettingsController@EmailSettingsPro')->name('emailSettingsPro');


});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
