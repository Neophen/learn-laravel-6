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

Route::get('/articles', 'ArticlesController@index');
Route::get('/articles/{id}', 'ArticlesController@show');

Route::get('posts/{post}', 'PostsController@show');
