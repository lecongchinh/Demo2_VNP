<?php


Route::get('/login', ['as' => 'welcome','uses' =>'LoginController@getLogin']);

Route::get('/create', 'CrudController@getCreate');
Route::post('/create', ['as' => 'create', 'uses' => 'CrudController@postCreate']);

Route::post('/login',['as'=> 'login', 'uses' => 'LoginController@postLogin']);


Route::group(['middleware' => ['checklogin']], function () {

    Route::get('/', function() {
        return view('index');
    });

    Route::get('/logout', ['as' => 'logout', 'uses' => 'LoginController@postLogOut']);    
    Route::group(['middleware' => ['checkadmin']], function(){
        Route::get('/data', ['as' => 'admin', 'uses' => 'CrudController@getDataForAdmin']);
    });
    Route::get('/read', ['as' => 'user', 'uses' => 'CrudController@getDataForUser']);
});

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
