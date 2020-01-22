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


// InfyOm
Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder')->name('io_generator_builder');

Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate')->name('io_field_template');

Route::get('relation_field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@relationFieldTemplate')->name('io_relation_field_template');

Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate')->name('io_generator_builder_generate');

Route::post('generator_builder/rollback', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@rollback')->name('io_generator_builder_rollback');

Route::post(
    'generator_builder/generate-from-file',
    '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generateFromFile'
)->name('io_generator_builder_generate_from_file');

// My routes ===================================================================

Route::get('/', 'LandingController@index')->name('landing');
Route::get('/about', 'LandingController@about')->name('about');
Route::get('/services', 'LandingController@services')->name('services');
Route::get('/news', 'LandingController@news')->name('news');
Route::get('/contact', 'LandingController@contact')->name('contact');

Route::get('/help', 'LandingController@contact')->name('help');

// Réseaux sociaux
Route::get('facebook', function(){
  return redirect('https://web.facebook.com/?_rdc=1&_rdr');
})->name('facebook');
Route::get('twitter', function(){
  return url('http://localhost:8000');
})->name('twitter');
Route::get('linkedin', function(){
  return url('http://localhost:8000');
})->name('linkedin');

// =============================================================================


Route::resource('commentaires', 'CommentaireController');
