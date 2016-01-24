<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Request;

use App\Http\Requests;
use App\Article;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{

    public function index()
    {
        $articles = Article::latest('published_at')->get();

        return view('articles.index', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::findorfail($id);

        return view('articles.show', compact('article'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store()
    {
        Article::create(Request::all());

        return redirect('articles');
    }
}
