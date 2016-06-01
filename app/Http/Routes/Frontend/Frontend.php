<?php

/**
 * Frontend Controllers
 */
Route::get('/', 'FrontendController@index')->name('frontend.index');
Route::get('macros', 'FrontendController@macros')->name('frontend.macros');
Route::get('newsfeed', 'FrontendController@newsfeed')->name('frontend.newsfeed');
Route::get('about', 'FrontendController@about')->name('frontend.about');
Route::get('contact', 'FrontendController@contact')->name('frontend.contact');
/**
 * These frontend controllers require the user to be logged in
 */
Route::group(['middleware' => 'auth'], function () {
    Route::group(['namespace' => 'User'], function() {
        Route::get('dashboard', 'DashboardController@index')->name('frontend.user.dashboard');
        Route::get('profile/edit', 'ProfileController@edit')->name('frontend.user.profile.edit');
        Route::patch('profile/update', 'ProfileController@update')->name('frontend.user.profile.update');
        Route::get('profile/messages', 'ProfileController@messages')->name('frontend.user.profile.messages');
        Route::get('profile', 'ProfileController@myprofile')->name('frontend.user.profile.myprofile');
        Route::get('profile/search', 'ProfileController@search')->name('frontend.user.profile.search');


        Route::get('profile/{id}', 'ProfileController@userprofile')->name('frontend.user.profile.userprofile');        
        Route::get('profile/report/{id}', 'ProfileController@reportuser')->name('frontend.user.profile.reportuser');
        Route::get('profile/message/{id}', 'ProfileController@sendmessage')->name('frontend.user.profile.sendmessage');
        Route::get('profile/chat/{id}', 'ProfileController@chat')->name('frontend.user.profile.chat');

       

        Route::post('profile/report', 'ProfileController@reportsave')->name('frontend.user.profile.reportsave');

        Route::post('profile/message', 'ProfileController@messagesend')->name('frontend.user.profile.messagesend');
    });
});
