<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
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

    function newArticle() {
        // todo
    }

    function updateArticle() {
        // todo
    }

    function deleteArticle() {
        // todo
    }

    function save()
    {
        // todo
    }
}
