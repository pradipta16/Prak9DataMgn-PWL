<?php

namespace App\Http\Controllers;
use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(Article $article) {
        $article = Article::findOrFail($article->id);
        return view('detailPost',compact('article'));
    }
}
