<?php

use Illuminate\Support\Facades\Route;

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

Route::get('books', 'Api\BookController@getAllBooks');
Route::get('books/{id}', 'Api\BookController@getBook');
Route::post('books', 'Api\BookController@createBook');
Route::put('books/{id}', 'Api\BookController@updateBook');
Route::delete('books/{id}','Api\BookController@deleteBook');
