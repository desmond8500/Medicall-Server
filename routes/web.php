<?php

// ==================================================================================
// Landing page
// ==================================================================================
Route::get('/', 'HealthController@index')->name('health');
Route::get('/healthlogin', 'HealthController@login')->name('healthlogin');
Route::get('/healthregister', 'HealthController@register')->name('healthregister');
Route::post('/registering', 'HealthController@registering')->name('registering');
Route::get('/quit', 'HealthController@logout')->name('quit');

// ==================================================================================
// Admin page
// ==================================================================================
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/admininit', 'AdminController@admininit')->name('admininit');
Route::get('/adminlist/{categorie?}', 'AdminController@adminlist')->name('adminlist');




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

Route::get('/new', 'LandingController@new')->name('new');
Route::get('/about', 'LandingController@about')->name('about');
Route::get('/services', 'LandingController@services')->name('services');
Route::get('/news', 'LandingController@news')->name('news');
Route::get('/contact', 'LandingController@contact')->name('contact');

Route::get('/connect', 'LandingController@login')->name('connect');
Route::get('/registering', 'LandingController@register')->name('registering');
Route::get('/help', 'LandingController@contact')->name('help');
Route::get('/choix/{service?}', 'ServiceController@servicesChoose')->name('servicesChoose');

// Réseaux sociaux
Route::get('facebook', function(){
  return redirect('https://web.facebook.com/?_rdc=1&_rdr');
})->name('facebook');
Route::get('twitter', function(){
  return redirect('https://twitter.com/MedicallSuivi');
})->name('twitter');
Route::get('linkedin', function(){
  return redirect('https://www.linkedin.com/in/medicall-sant%C3%A9-suivi-3809021a0/');
})->name('linkedin');

// =============================================================================


Route::resource('comptes', 'CompteController');
Route::resource('articles', 'ArticleController');

// ====================================================================================
// User routes
// ====================================================================================
Route::get('/patient', 'PatientController@index')->name('patient');
Route::get('/rv', 'PatientController@rv')->name('rv');
Route::get('/message', 'PatientController@message')->name('message');
Route::get('/bilan', 'PatientController@bilan')->name('bilan');
Route::get('/profile', 'PatientController@profile')->name('profile');
Route::get('/document', 'PatientController@document')->name('document');

// ====================================================================================
// Doctor routes
// ====================================================================================
Route::get('/dashboard', 'PatientController@dashboard')->name('dashboard');
Route::get('/patients', 'PatientController@patients')->name('patients');
Route::get('/programme', 'PatientController@programme')->name('programme');
Route::get('/analyse', 'PatientController@analyse')->name('analyse');
Route::get('/rapports', 'PatientController@rapports')->name('rapports');
Route::get('/facturation', 'PatientController@facturation')->name('facturation');
Route::get('/reglages', 'PatientController@reglages')->name('reglages');




Route::resource('commentaires', 'CommentaireController');


Route::resource('rendezvouses', 'RendezvousController');
