<?php

use App\Category;

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

    $categories = Category::get();
    $subcategories = \App\Subcategory::get();
    return view('welcome', compact('categories', 'subcategories'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => 'auth'], function () {

    Route::get('category/new', 'CategoryController@newCategory');
    Route::post('category/create', 'CategoryController@store')->name('category.store');

    Route::post('sub/store', 'SubcategoryController@store')->name('subcategory.store');

    Route::get('/category/{id}', 'SubcategoryController@display')->name('subcategory.display');

    Route::get('/thread/create', 'ThreadController@newThread')->name('thread.create');
});