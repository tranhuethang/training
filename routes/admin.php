<?php

Route::get('admin/login', 'Auth\LoginController@getLoginAdmin')->name('getLoginAdmin');
Route::post('admin/login', 'Auth\LoginController@postLoginAdmin')->name('postLoginAdmin');

Route::get('admin/logout', 'Auth\LoginController@getLogoutAdmin')->name('getLogoutAdmin');

Route::get('admin/index', 'HomeAdminController@indexAdmin')->name('admin.index');

Route::get('staff/list', 'StaffController@listStaff')->name('liststaff');
Route::get('staff/add', 'StaffController@getAddStaff')->name('staff.getAddStaff');
Route::post('staff/add', 'StaffController@postAddStaff')->name('staff.postAddStaff');
Route::get('staff/edit/{id}', 'StaffController@getEditStaff')->name('staff.getEditStaff');
Route::post('staff/edit/{id}', 'StaffController@postEditStaff')->name('staff.postEditStaff');
Route::get('staff/delete/{id}', 'StaffController@getDelete')->name('staff.deleteStaff');

Route::get('config', 'ConfigController@getConfig')->name('getConfig');
Route::get('config/edit/{id}', 'ConfigController@getEdit')->name('getEdit');
Route::post('config/edit/{id}', 'ConfigController@postEdit')->name('postEdit');