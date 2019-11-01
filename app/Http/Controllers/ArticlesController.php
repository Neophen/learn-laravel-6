<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Tag;

class ArticlesController extends Controller
{
    // Render a list of a resources
    public function index()
    {
        if (request('tag')) {
            $articles = Tag::where('name', request('tag'))->firstOrFail()->articles;
        } else {
            $articles = Article::latest()->get();
        }

        return view('articles.index', [
            'articles' => $articles
        ]);
    }

    // Show a single resource
    public function show(Article $article)
    {
        return view('articles.show', [
            'article' => $article
        ]);
    }

    // Shows a view to create a new resource
    public function create()
    {
        return view('articles.create');
    }

    // Persist the new resource
    public function store()
    {
        Article::create($this->validateArticle());
        return redirect(route('articles.index'));
    }

    // Show a view to edit an existing resource
    public function edit(Article $article)
    {
        return view('articles.edit', [
            'article' => $article,
        ]);
    }

    // Persist the edited resource
    public function update(Article $article)
    {
        $article->update($this->validateArticle());
        return redirect($article->path());
    }

    // Delete the resource
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect(route('articles.index'));
    }

    protected function validateArticle()
    {
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
        ]);
    }
}
