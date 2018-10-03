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

Route::get('/admin/categories/create', 'CategoriesController@create')->name('admin.categories.create');
Route::get('/admin/categories/{id}/show', 'CategoriesController@create')->name('admin.categories.id.show');
Route::post('/admin/categories/store', 'CategoriesController@store')->name('admin.categories.store');

Route::get('/admin/candidates/create', 'CandidatesController@create')->name('admin.candidates.create');

Route::get('/admin/teams/create', 'TeamsController@create')->name('admin.teams.create');

Route::get('/admin/criteria/new', function () {
  return view('/admin/criteria/new');
});

