<?php

use Illuminate\Support\Facades\Route;


Route::group(['namespace' => 'Admin'], function () {
    Route::get('login', 'LoginController@getLogin')->name('get.admin.login')->middleware('guest:admin');
    Route::post('login', 'LoginController@login')->name('admin.login');
});


Route::group(['namespace' => 'Admin', 'middleware' => 'auth:admin'], function () {
    Route::get('home', 'DashboardController@index')->name('admin.dashboard');
    Route::get('profile', 'ProfileController@show')->name('profile');
    Route::get('profile/edit/{id}', 'SettingController@edit')->name('profile.edit');
    Route::put('profile/update/{id}', 'SettingController@update')->name('admin.profile.update');
    Route::get('team/all', 'TeamController@show')->name('team');
    Route::get('team/create', 'TeamController@create')->name('team.create');
    Route::post('team/store', 'TeamController@store')->name('team.store');



});

//services table =>pages_name,id
//page table =>id,pagename,dis,image
//enable-disable =>enum('activity',[])
//select=>open,
