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
Route::get('/', 'acceuilController@index')->name('home');
/**
 * Home Route
 */
Route::get('home', 'acceuilController@index')->name('home');
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
 * route definissant le chemein pour le traitement des messages
 */

Route::post('UserMessage', 'PublicationsController@store')->name('UserMessage');

/**
 * route pour la lecture d'un message
 */

Route::get('viewMessage/{id}', 'PublicationsController@viewUserMessage')->name('viewMessage');
/**
 * route pour l'affichage des routes
 */

Route::get('viewAllMessages', 'PublicationsController@viewAllMessages')->name('viewAllMessages');

Route::get('messageReceived', 'PublicationsController@giveAllMessage')->name('messageReceived');


/**
 * Route pour la page d'accueil pour les contacts
 */

Route::get('bao_contact', 'contactController@index')->name('bao_contact');

/**
 * route pour l'archivage des messages
 */
Route::get('delMessage/{id}', 'PublicationsController@archiveMessage')->name('delMessage');
//***========================FIN ROUTE POUR LES SERVICES===============***//

//==========================ROUTE POUR L'ADMINISTRATION=================//

/**
 * route pour la page d'acceuille de la partie administration
 */
//Route::get('dashbao', 'dashbaoController@index')->name('dashbao');

/**
 * route pour l'insertion de nouvelles articles
 */
Route::get('insertNewArticle', 'articlesController@index')->name('insertNewArticle');

/**
 * Route pour l'enregistrement d'un nouveau article depuis un formulaire
 */
Route::post('productRegister', 'articlesController@store')->name('productRegister');

/**
 * route pour l'ajout de nouvelles videos et le changement de statut
 */

Route::get('configvideo', 'videosController@index')->name('configvideo');

/**
 * route pour la mise a jour de la video
 */
Route::post('admin.videoRegister', 'videosController@store')->name('admin.videoRegister');

/**
 * Route pour la modification de videos
 */
Route::get('videoModif.html/{id}', 'videosController@destroy')->name('videoModif.html');

//==========================ROUTE POUR LA CONNEXION=================//

/**
 * Routes pour les connections
 */
Auth::routes();

Route::get('/dashbao', 'HomeController@index')->name('dashbao');

/**
 * route pour le deconnexion
 */
Route::get('deconnect', 'HomeController@logout')->name('deconnect');

