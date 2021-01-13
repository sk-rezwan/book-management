<?php
use Illuminate\Support\Facades\Route;

Route::get('/test', function(){
  return view('test');
});

Route::get('/booksList', 'BooksController@index');
Route::get('/addBooks', 'BooksController@create');
Route::post('/addBooks', 'BooksController@store');

Route::get('/categoriesList','BooksCategoryController@index');
Route::get('/addCategories', 'BooksCategoryController@create');
Route::post('/addCategories', 'BooksCategoryController@store');


Route::get('/', function () {
    return view('welcome');
});


Route::get('/main', function () {
    return view('layouts.sidebar');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
