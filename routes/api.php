<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get("confGET","App\Http\Controllers\ConfigurationController@index");
Route::get("peopleGET","App\Http\Controllers\PeopleController@index");
Route::get("rolGET","App\Http\Controllers\RoleController@index");






Route::post("confPOST","App\Http\Controllers\ConfigurationController@store");
Route::post("peoplePOST","App\Http\Controllers\PeopleController@store");
Route::post("rolPOST","App\Http\Controllers\RoleController@store");




Route::patch("confPATCH/{id}","App\Http\Controllers\ConfigurationController@update");
Route::patch("peoplePATCH/{id}","App\Http\Controllers\PeopleController@update");
Route::patch("rolPATCH/{id}","App\Http\Controllers\RoleController@update");





Route::delete("confDELETE/{id}","App\Http\Controllers\ConfigurationController@destroy");
Route::delete("peopleDELETE/{id}","App\Http\Controllers\PeopleController@destroy");
Route::delete("rolDELETE/{id}","App\Http\Controllers\RoleController@destroy");