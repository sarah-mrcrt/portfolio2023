<?php

use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjetsController;


// Modele crud / https://www.akilischool.com/cours/laravel-crud-avec-upload-dimage

// Accueil
Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);

// Services
Route::get('/services', function () {
    return view('pages/services/services');
});

// Projet
Route::get('/projets', [ProjetsController::class, 'index']);
Route::get('/projet_{id}', [ProjetsController::class, 'show'])->where('id','[0-9]+');



// Pages d'administration
// Route::group(['middleware' => ['auth']], function () { 
//   Route::get('/admin', 'AdminController@index');
//   Route::get('projet/add', 'AdminController@create');
//   Route::post('projet/store', 'AdminController@store');
//   // non fonctionnel
//   Route::get('projet/edit/{id}','AdminController@edit');
//   Route::patch('projet/update/{id}', 'AdminController@update');
//   // fonctionnel
//   Route::delete('projet/delete/{id}','AdminController@destroy');
// });
// Auth::routes();

// redirect All 404 Errors to Homepage
// Route::any('{query}', function() { return redirect('/'); })->where('query', '.*');
