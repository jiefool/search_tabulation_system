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


Route::get('admin/categories', function () {
    return view('admin.categories.list');
})->name('admin.categories');

Route::get('/admin/categories/new', function () {
  return view('/admin/categories/new');
})->name('admin.categories.new');

