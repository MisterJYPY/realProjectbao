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
    return view('homeContent');
});
/**
 * Home Route
 */
Route::get('home', 'homeController@index')->name('home');
//==========================ROUTE POUR LES SERVICES=================//

/**
 * QUI SOMMES NOUS? ROUTE
 */
Route::get('apropos', 'aproposController@index')->name('apropos');
/**
 * Pour Tout les Services
 */
Route::get('allServices', 'servicesController@index')->name('allServices');

/**
 * Route pour la serigraphie
 */
Route::get('serigraphie', 'serigraphieController@index')->name('serigraphie');

/**
 * Route pour imprimerie
 */
Route::get('imprimerie', 'imprimerieController@index')->name('imprimerie');

/**
 * Route pour bonerie
 */
Route::get('bonerie', 'bonerieController@index')->name('bonerie');

/**
 * Route pour evenementiel
 */
Route::get('evenementiel', 'evenementielController@index')->name('evenementiel');

/**
 * Route pour ingenierie dematerialisation
 */
Route::get('dematerialisation', 'dematerialisationController@index')->name('dematerialisation');

/**
 * Route pour ingenierie dematerialisation
 */
Route::get('projet', 'projetController@index')->name('projet');


//***========================FIN ROUTE POUR LES SERVICES===============***//

//==========================ROUTE POUR LES BLOGS=================//

/**
 *Route pour la page d'acceuil
 */
Route::get('bao_blog', 'blogController@index')->name('bao_blog');

/**
 * Route pour la page d'accueil pour les contacts
 */

Route::get('bao_contact', 'contactController@index')->name('bao_contact');

//***========================FIN ROUTE POUR LES SERVICES===============***//

//==========================ROUTE POUR L'ADMINISTRATION=================//
Route::get('dashbao', 'dashbaoController@index')->name('dashbao');
