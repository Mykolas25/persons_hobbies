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
//
//Route::get('/', function ()
//{
//    return view("form");
//});
//
//
//Route::get('/create',function()
//{
//    return view('form');
//});

//Routes for city input

Route::group(['prefix' => 'cities'], function () {

    Route::post('/create/', [

        'as' => 'app.cities.create', 'uses' => 'PPHCityController@create'

    ]);

    Route::get('/create/', [

        'uses' => 'PPHCityController@showCreate'
    ]);

});

//Routes for hobbies input

Route::group(['prefix' => 'hobbies'], function () {

    Route::post('/create/', [

        'as' => 'app.hobbies.create', 'uses' => 'PPHHobbiesController@create'

    ]);

    Route::get('/create/', [

        'uses' => 'PPHHobbiesController@showCreate'
    ]);

});




Route::get('/generate-fake-data/peoples/{count?}/',[

    'uses' => 'PPHFakeDataController@generatePeoples'
]);

Route::get('/generate-fake-data/cities/hobbies/{count?}/',[

    'uses' => 'PPHFakeDataController@generateHobbies'
]);

Route::get('/generate-fake-data/cities/{count?}/', [
    'uses' => 'PPHFakeDataController@generateCities'

]);

Route::get('/', function () {
    view('welcome');
});

