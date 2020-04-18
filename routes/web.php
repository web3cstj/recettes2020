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
Route::get('/recettes', "RecetteController@index");
Route::get('/recettes/{recette}', "RecetteController@show")->where(["recette", '[0-9]+']);
Route::get('/categories', "CategorieController@index");
