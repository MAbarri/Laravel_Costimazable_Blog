<?php

Route::get('/', ['as' => 'root', 'uses' => 'DashboardController@getIndex']);
Route::get('setting', ['as' => 'setting.index', 'uses' => 'SettingController@getSettings']);
Route::post('language/change', ['as' => 'language.change' , 'uses' => 'LanguageController@postChange']);
Route::post('page/order', ['as' => 'page.order' , 'uses' => 'PageController@postOrder']);
Route::patch('setting/{setting}', ['as' => 'setting.update', 'uses' => 'SettingController@patchSettings']);
Route::resource('article', 'ArticleController');
Route::resource('category', 'CategoryController');
Route::resource('language', 'LanguageController');
Route::resource('page', 'PageController');
Route::resource('subscribers', 'SubscriberController');
Route::get('subscribers/create', function($user_path) {
    return redirect('subscribers' . $user_path);
});
Route::resource('user', 'UserController');
Route::resource('slide', 'SlideController');
Route::resource('home_section', 'HomeSectionController');
