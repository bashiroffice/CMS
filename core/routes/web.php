<?php

//admin Auth
Route::get('/admin', 'Admin\DashboardController@index')->name('admin.login');
Route::post('admin', 'Admin\DashboardController@login')->name('admin.login.post');

Route::get('/test', 'Admin\DashboardController@test');

Route::middleware(['Admin.Auth'])->prefix('admin')->group(function () {

    //dashboard
    Route::get('dashboard', 'Admin\DashboardController@dashboard')->name('admin.dashboard');

    //Profile
    Route::get('profile', 'Admin\DashboardController@AdminProfile')->name('admin.profile');
    //profile update
    Route::post('profile', 'Admin\DashboardController@AdminProfileUpdate')->name('admin.profile');


    //Change Password
    Route::get('changePassword', 'Admin\DashboardController@changePassword')->name('admin.changePassword');
    //change password
    Route::post('changePassword', 'Admin\DashboardController@PasswordUpdate')->name('admin.changePassword');


    //logout
    Route::post('logout', 'Admin\DashboardController@logout')->name('admin.logout');


    //basic settings
    Route::get('basicSettings', 'Admin\BasicSettingsController@basicSettings')->name('admin.basicSettings');
    //basic pro
    Route::post('basicSettings', 'Admin\BasicSettingsController@BasicSettingsPro')->name('admin.basicSettingsPro');



    //SMS settings
    Route::get('smsSettings', 'Admin\SmsController@SmsSettings')->name('admin.SmsSettings');
    //SMS Settings pro
    Route::post('smsSettings', 'Admin\SmsController@SmsSettingsPro')->name('admin.SmsSettingsPro');


    //Email settings
    Route::get('emailSettings', 'Admin\EmailSettingsController@EmailSettings')->name('admin.emailSettings');
    //Email Settings pro
    Route::post('emailSettings', 'Admin\EmailSettingsController@EmailSettingsPro')->name('admin.emailSettingsPro');


});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
