<?php

Route::get('dashboard', 'DashboardController@index')->name('admin.dashboard');

Route::get('logochange', 'DashboardController@logochange')->name('admin.logochange');

Route::get('footerchange', 'DashboardController@footerchange')->name('admin.footerchange');
