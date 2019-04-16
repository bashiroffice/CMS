<?php

//admin Auth
Route::get('/admin', 'Admin\DashboardController@index')->name('admin.login');
Route::post('admin', 'Admin\DashboardController@login')->name('admin.login.post');

Route::get('/test', 'Admin\DashboardController@test');

Route::middleware(['Admin.Auth'])->prefix('admin')->group(function () {

    //dashboard
    Route::get('dashboard', 'Admin\DashboardController@dashboard')->name('admin.dashboard');

    //logout
    Route::post('logout', 'Admin\DashboardController@logout')->name('admin.logout');

    //basic settings
    Route::get('basicSettings', 'Admin\BasicSettingsController@basicSettings')->name('admin.basicSettings');

    //basic pro
    Route::post('basicSettings', 'Admin\BasicSettingsController@BasicSettingsPro')->name('admin.basicSettingsPro');


});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
