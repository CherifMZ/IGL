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
/*'uses'=>'logController@connecter',
    'as' => 'login.redirect'*/

//route du debut
Route::get('/', function () {
    return view('login');
});

Route::post('/connecter','logController@connecter');
/*Route::post('/connecter', function (){
    echo "it works";
});*/
Route::post('/ajouter','EtudController@ajouteretud');

Route::post('/rediriger',[
    'uses'=>'logController@connecter',
    'as' => 'login.redirect'
]);

//route 02 : home pour rediriger admin quand il se connecte, vers ajout des etudiants et pouvoir voir la liste des etudiants

Route::get('/home', function () {
    return view('index');
})->name('home');
