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




Route::resource('comptes', 'CompteAPIController');





Route::resource('articles', 'ArticleAPIController');

Route::resource('commentaires', 'CommentaireAPIController');

Route::resource('rendezvouses', 'RendezvousAPIController');

Route::resource('rvs', 'RvAPIController');

Route::resource('newsletters', 'NewsletterAPIController');

Route::resource('inscriptions', 'InscriptionAPIController');

Route::resource('todos', 'TodoAPIController');

Route::resource('todolists', 'TodolistAPIController');