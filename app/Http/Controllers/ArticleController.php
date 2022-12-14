<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    function all()
    {
        $articles = Article::all();
        // ...
        return $articles;
    }

    function show(Article $article)
    {
        return $article;
    }
}
