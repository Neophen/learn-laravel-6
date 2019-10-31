<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticlesController extends Controller
{
    public function index()
    {
        return view('articles.index', [
            'articles' => \App\Article::latest()->get()
        ]);
    }

    public function show($id)
    {
        $article = Article::find($id);
        return view('articles.show', [
            'article' => $article
        ]);
    }
}
