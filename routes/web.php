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

Route::get('/judge/categories', function () {
  return view('judge/categories');
});

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



Route::get('/admin/candidates/create', 'CandidatesController@create')->name('admin.candidates.create');

Route::get('/admin/teams/create', 'TeamsController@create')->name('admin.teams.create');

Route::get('/admin/criteria/new', function () {
  return view('/admin/criteria/new');
});

