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
///Api routes

///Post API
/// Authentification utilisateur
Route::post('/login','UserController@Login');

///Post API
///Ajouter etudiant
Route::post('/etudiant/add','EtudiantController@add');

///Post API
///Ajouter Enseignant
Route::post('/enseignent/add','EnseignentController@add');
