<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [
    'uses'=>'MainController@index'
]);
Route::get('/contact', [
    'uses'=>'MainController@contact',
    'as'=> 'main.contact'
]);
Route::get('/chesses/{slag}', [
    'uses'=>'MainController@chess',
    'as'=> 'main.chess'
]);
Route::get('/show/{id}', [
    'uses'=>'MainController@show',
    'as'=> 'main.show'
]);

Route::group([
    'middleware' => 'roles',
    'roles' => ['Admin', 'Moderator']
], function () {

    Route::get('/photos', [
        'uses' => 'PhotosController@index',
        'as' => 'photos.index'
    ]);

    Route::get('/photos/create', [
        'uses' => 'PhotosController@create',
        'as' => 'photos.create'
    ]);

    Route::post('/photos/store', [
        'uses' => 'PhotosController@store',
        'as' => 'photos.store'
    ]);

    Route::get('/photos/edit/{photo}', [
        'uses' => 'PhotosController@edit',
        'as' => 'photos.edit'

    ]);

    Route::post('/photos/{photo}', [
        'uses' => 'PhotosController@update',
        'as' => 'photos.update'
    ]);

    Route::get('photos/delete/{photo}', [
        'uses' => 'PhotosController@destroy',
        'as' => 'photos.delete'
    ]);

///////////////
    Route::get('/chess', [
        'uses' => 'ChessController@index',
        'as' => 'chess.index'
    ]);

    Route::get('/chess/create', [
        'uses' => 'ChessController@create',
        'as' => 'chess.create'
    ]);

    Route::post('/chess/store', [
        'uses' => 'ChessController@store',
        'as' => 'chess.store'
    ]);

    Route::get('/chess/edit/{chess}', [
        'uses' => 'ChessController@edit',
        'as' => 'chess.edit'

    ]);

    Route::post('/chess/{chess}', [
        'uses' => 'ChessController@update',
        'as' => 'chess.update'
    ]);

    Route::get('chess/delete/{chess}', [
        'uses' => 'ChessController@destroy',
        'as' => 'chess.delete'
    ]);

///////////////

    Route::get('/categories', [
        'uses' => 'CategoriesController@index',
        'as' => 'categories.index'
    ]);

    Route::get('/categories/create', [
        'uses' => 'CategoriesController@create',
        'as' => 'categories.create'
    ]);

    Route::post('/categories/store', [
        'uses' => 'CategoriesController@store',
        'as' => 'categories.store'
    ]);

    Route::get('/categories/edit/{category}', [
        'uses' => 'CategoriesController@edit',
        'as' => 'categories.edit'

    ]);

    Route::post('/categories/{category}', [
        'uses' => 'CategoriesController@update',
        'as' => 'categories.update'
    ]);

    Route::get('categories/delete/{category}', [
        'uses' => 'CategoriesController@destroy',
        'as' => 'categories.delete'
    ]);

});


Auth::routes();

Route::get('/home', 'HomeController@index');
