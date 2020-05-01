<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', "AppController@index");
Route::get('/installer', "AppController@installer");
Route::group(['prefix'=>'recettes', 'where'=>['recette', '[0-9]+']], function() {
    Route::get('/', "RecetteController@index");
    Route::get('/create', "RecetteController@create");
    Route::post('/create', "RecetteController@store");
    Route::get('/{recette}', "RecetteController@show");
    Route::get('/{recette}/edit', "RecetteController@edit");
    Route::post('/{recette}/edit', "RecetteController@update");
    Route::get('/{recette}/delete', "RecetteController@delete");
    Route::post('/{recette}/delete', "RecetteController@destroy");
});
