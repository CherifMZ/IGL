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

Route::get('/', function () {
    return view('login');
});

Route::post('/connecter','logController@connecter');
/*Route::post('/connecter', function (){
    echo "it works";
});*/
Route::post('/ajouter','EtudController@ajouteretud');
