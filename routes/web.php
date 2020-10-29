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

 /Route::get('/', function () {
    return view('welcome');
}); 


Route::get('/','HomeController@index');
Auth::routes();

Route::get('home', 'HomeController@index');

// marques resultats apis (crud operations)
Route::get('inscrits','InscritsController@index');
Route::get('inscrits/create','InscritsController@create');
Route::post('inscrits','InscritsController@store');
Route::get('inscrits/edit/{inscrit}','InscritsController@edit');
Route::put('inscrits/{inscrit}','InscritsController@update');
Route::post('inscrits/destroy/{inscrit}','InscritsController@destroy');


// marques resultats apis (crud operations)
Route::get('cours','CoursController@index');
Route::get('cours/create','CoursController@create');
Route::get('cours/edit/{cour}','CoursController@edit');
Route::get('cours/{cour}','CoursController@show');
Route::post('cours','CoursController@store');
Route::post('cours/destroy/{cour}','CoursController@destroy');
Route::put('cours/{cour}','CoursController@update');


Route::get('formateurs','FormateursController@index');
Route::get('formateurs/create','FormateursController@create');
Route::post('formateurs','FormateursController@store');
Route::get('formateurs/edit/{formateur}','FormateursController@edit');
Route::put('formateurs/{formateur}','FormateursController@update');
Route::post('formateurs/destroy/{formateur}','FormateursController@destroy');


Route::get('salles','sallesController@index');
Route::get('salles/create','sallesController@create');
Route::post('salles','sallesController@store');
Route::get('salles/edit/{salle}','sallesController@edit');
Route::put('salles/{salle}','sallesController@update');
Route::post('salles/destroy/{salle}','sallesController@destroy');


// marques resultats apis (crud operations)
Route::get('certificats','CertificatsController@index');
Route::get('certificats/create','CertificatsController@create');
Route::post('certificats','CertificatsController@store');
Route::get('certificats/edit/{certificat}','CertificatsController@edit');
Route::put('certificats/{certificat}','CertificatsController@update');
Route::post('certificats/destroy/{certificat}','CertificatsController@destroy');

// marques resultats apis (crud operations)
Route::get('adresses','AdressesController@index');
Route::get('adresses/create','AdressesController@create');
Route::post('adresses','AdressesController@store');
Route::get('adresses/edit/{adresse}','AdressesController@edit');
Route::put('adresses/{adresse}','AdressesController@update');
Route::post('adresses/destroy/{adresse}','AdressesController@destroy');


// marques resultats apis (crud operations)
Route::get('typeformations','typeformationsController@index');
Route::get('typeformations/create','typeformationsController@create');
Route::post('typeformations','typeformationsController@store');
Route::get('typeformations/edit/{typeformation}','typeformationsController@edit');
Route::put('typeformations/{typeformation}','typeformationsController@update');
Route::post('typeformations/destroy/{typeformation}','typeformationsController@destroy');


// marques resultats apis (crud operations)
Route::get('participations','ParticipationsController@index');
Route::get('participations/create','ParticipationsController@create');
Route::post('participations','ParticipationsController@store');
Route::get('participations/edit/{participation}','ParticipationsController@edit');
Route::put('participations/{participation}','ParticipationsController@update');
Route::post('participations/destroy/{participation}','ParticipationsController@destroy');
