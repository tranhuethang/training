<?php

Route::get('staff/login', 'Auth\LoginController@getLoginStaff')->name('getLoginStaff');
Route::post('staff/login', 'Auth\LoginController@postLoginStaff')->name('postLoginStaff');

Route::get('staff/logout', 'Auth\LoginController@getLogoutStaff')->name('getLogoutStaff');

Route::get('staff/index', 'HomeStaffController@indexStaff')->name('staff.index');

Route::get('timesheet/list', 'TimesheetController@getListTimesheet')->name('getListTimesheet');
Route::get('timesheet/add', 'TimesheetController@getAddTimesheet')->name('getAddTimesheet');
Route::post('timesheet/add', 'TimesheetController@postAddTimesheet')->name('postAddTimesheet');
Route::get('timesheet/edit/{id}', 'TimesheetController@getEditTimesheet')->name('getEditTimesheet');
Route::post('timesheet/edit/{id}', 'TimesheetController@postEditTimesheet')->name('postEditTimesheet');
Route::get('timesheet/detail/{id}', 'TimesheetController@getDetailTimesheet')->name('getDetailTimesheet');

Route::get('mail', 'SendMailController@getMail')->name('getMail');
Route::post('mail', 'SendMailController@postMail')->name('postMail');