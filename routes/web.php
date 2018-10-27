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
  return redirect('login');
});


// Delete this route after creating a controller for categories

Route::get('judging/categories','JudgingController@index')->name('judging.categories.index');
Route::get('judging/categories/{id}/candidates','JudgingController@judgingCategory')->name('judging.categories.id.candidates');


Auth::routes();


Route::get('admin/categories','CategoriesController@index')->name('admin.categories.index');
Route::post('admin/categories/store', 'CategoriesController@store')->name('admin.categories.store');
Route::get('admin/categories/create', 'CategoriesController@create')->name('admin.categories.create');
Route::get('admin/categories/{id}/show', 'CategoriesController@show')->name('admin.categories.id.show');
Route::get('admin/categories/{id}/edit', 'CategoriesController@edit')->name('admin.categories.id.edit');
Route::post('admin/categories/{id}/update', 'CategoriesController@update')->name('admin.categories.id.update');
Route::get('admin/categories/{id}/criteria/create', 'CriteriaController@create')->name('admin.categories.id.criteria.create');
Route::get('admin/categories/{cid}/criteria/{id}/edit', 'CriteriaController@edit')->name('admin.categories.cid.criteria.id.edit');
Route::post('admin/categories/{id}/criteria/store', 'CriteriaController@store')->name('admin.categories.cid.criteria.store');
Route::post('admin/categories/{cid}/criteria/{id}/update', 'CriteriaController@update')->name('admin.categories.cid.criteria.id.update');
Route::post('admin/categories/{cid}/criteria/{id}/delete', 'CriteriaController@delete')->name('admin.categories.cid.criteria.id.delete');


Route::get('admin/candidates','CandidatesController@index')->name('admin.candidates.index');
Route::post('admin/candidates/store','CandidatesController@store')->name('admin.candidates.store');
Route::get('admin/candidates/create', 'CandidatesController@create')->name('admin.candidates.create');
Route::get('admin/candidates/{id}/edit', 'CandidatesController@edit')->name('admin.candidates.id.edit');
Route::post('admin/candidates/{id}/delete', 'CandidatesController@delete')->name('admin.candidates.id.delete');
Route::post('admin/candidates/{id}/update', 'CandidatesController@update')->name('admin.candidates.id.update');


Route::get('admin/judges','JudgesController@index')->name('admin.judges.index');
Route::get('admin/judges/{id}/edit','JudgesController@edit')->name('admin.judges.id.edit');
Route::post('admin/judges/{id}/delete','JudgesController@delete')->name('admin.judges.id.delete');
Route::post('admin/judges/{id}/update','JudgesController@update')->name('admin.judges.id.update');
Route::get('admin/judges/create','JudgesController@create')->name('admin.judges.create');
Route::post('admin/judges/store','JudgesController@store')->name('admin.judges.store');






Route::get('/admin/teams/create', 'TeamsController@create')->name('admin.teams.create');

Route::get('/admin/criteria/new', function () {
  return view('/admin/criteria/new');
});

