<?php

// ==================================================================================
// Landing page
// ==================================================================================
Route::get('/health',           'HealthController@index')->name('health');
Route::get('/healthlogin',      'HealthController@login')->name('healthlogin');
Route::get('/healthregister',   'HealthController@register')->name('healthregister');
Route::post('/registering',     'HealthController@registering')->name('registering');
Route::get('/quit',             'HealthController@logout')->name('quit');

// ==================================================================================
// Admin page
// ==================================================================================
Route::get('/admin',                    'AdminController@index')->name('admin');
Route::get('/admininit',                'AdminController@admininit')->name('admininit');
Route::get('/adminlist/{categorie?}',   'AdminController@adminlist')->name('adminlist');
Route::get('/admintest',                'HealthController@loginValidate')->name('admintest');

// ==================================================================================
// Vacation
// ==================================================================================
Route::get('/',                         'VacationController@index')->name('vacation');
Route::get('/vacation/apropos',         'VacationController@apropos')->name('apropos');
Route::get('/vacation/services',        'VacationController@services')->name('services');
Route::get('/vacation/blog/{topic?}',   'VacationController@blog')->name('blog');
Route::get('/vacation/blogpage/{id?}',  'VacationController@blogpage')->name('blogpage');
Route::get('/vacation/contact',         'VacationController@contact')->name('contact');
Route::get('/vacation/login',           'VacationController@login')->name('v-login');
Route::get('/vacation/register',        'VacationController@register')->name('v-register');
Route::post('/vacation/registering',    'VacationController@registering')->name('v-registering');
Route::view('/vacation/rv',             '0 vacation.pages.rv')->name('v-rv');
Route::get('/vacation/logout',          'VacationController@logout')->name('v-logout');

Route::get('/vacation/admin/index',     'VacationController@adminIndex')->name('admin.index');
Route::get('/vacation/admin/userlist',  'VacationController@adminUserList')->name('admin.userlist');
Route::get('/vacation/admin/newsletter','VacationController@adminNewsletter')->name('admin.newsletter');
Route::get('/vacation/admin/rv',        'VacationController@adminRv')->name('admin.rv');
Route::get('/vacation/admin/inscription',       'VacationController@adminInscription')->name('admin.inscription');
Route::get('/vacation/admin/todo',              'VacationController@adminTodo')->name('admin.todo');
Route::get('/vacation/admin/todolist/{id?}',    'VacationController@adminTodolist')->name('admin.todolist');
Route::post('/vacation/admin/userupdate',       'VacationController@adminUserUpdate')->name('admin.user.update');
Route::get('/vacation/admin/userdelete/{id}',   'VacationController@adminUserDelete')->name('admin.user.delete');
// Comments
Route::get('/canvas')->name('canvas');

// ==================================================================================
// InfyOm
// ==================================================================================
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder')->name('io_generator_builder');
Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate')->name('io_field_template');
Route::get('relation_field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@relationFieldTemplate')->name('io_relation_field_template');
Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate')->name('io_generator_builder_generate');
Route::post('generator_builder/rollback', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@rollback')->name('io_generator_builder_rollback');
Route::post('generator_builder/generate-from-file','\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generateFromFile')->name('io_generator_builder_generate_from_file');


// ====================================================================================
// Réseaux sociaux
// ====================================================================================
Route::get('linkedin', function(){ return redirect('https://www.linkedin.com/in/medicall-sant%C3%A9-suivi-3809021a0/'); })->name('linkedin');
Route::get('facebook', function(){ return redirect('https://web.facebook.com/?_rdc=1&_rdr'); })->name('facebook');
Route::get('twitter', function() { return redirect('https://twitter.com/MedicallSuivi'); })->name('twitter');

// ====================================================================================
// User routes
// ====================================================================================
Route::get('/patient/patient',  'PatientController@index')->name('patient.index');
Route::get('/patient/rv',       'PatientController@rv')->name('patient.rv');
Route::get('/patient/message',  'PatientController@message')->name('patient.message');
Route::get('/patient/bilan',    'PatientController@bilan')->name('patient.bilan');
Route::get('/patient/profile',  'PatientController@profile')->name('patient.profile');
Route::get('/patient/document', 'PatientController@document')->name('patient.document');

// ====================================================================================
// Doctor routes
// ====================================================================================


// ====================================================================================
// REssources routes
// ====================================================================================
Route::resource('commentaires', 'CommentaireController');
Route::resource('articles', 'ArticleController');
Route::resource('rendezvouses', 'RendezvousController');
Route::resource('comptes', 'CompteController');
Route::resource('rvs', 'RvController');
Route::resource('newsletters', 'NewsletterController');
Route::resource('inscriptions', 'InscriptionController');
Route::resource('todos', 'TodoController');
Route::resource('todolists', 'TodolistController');
