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
    return view('welcome');
});

// Route::get('/articles', function () {
//     // $articles = \App\Article::latest()->get();
//     // $articles = \App\Article::take(2)->get();
//     // $articles = \App\Article::paginate(2);

//     return view('articles.index', [
//         'articles' => \App\Article::latest()->get()
//     ]);
// });

Route::get('/articles', 'ArticlesController@index')->name('articles.index');
Route::get('/articles/create', 'ArticlesController@create')->name('articles.create');
Route::get('/articles/{article}/edit', 'ArticlesController@edit')->name('articles.edit');
Route::get('/articles/{article}', 'ArticlesController@show')->name('articles.show');

Route::post('/articles', 'ArticlesController@store')->name('articles.store');
Route::put('/articles/{article}', 'ArticlesController@update')->name('articles.update');
Route::delete('/articles/{article}', 'ArticlesController@destroy')->name('articles.destroy');
