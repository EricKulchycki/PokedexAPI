<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//http://pokedex.test/api/----

//List Pokemon
Route::get('pokemon', 'PokedexController@index');

//Get single Pokemon
Route::get('pokemon/{id}', 'PokedexController@show');

//POST new trainer register
Route::post('register', 'TrainerController@store');

//PUT
Route::put('capture/{email}', 'TrainerController@update');

Route::get('trainer_pokemon/{email}', 'TrainerController@show');