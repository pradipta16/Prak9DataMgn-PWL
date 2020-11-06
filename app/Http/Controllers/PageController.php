<?php

namespace App\Http\Controllers;

use App\Article;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(Article $article){
        $article = Article::all();
        return view('home',compact('article'));
    }
    public function home() {
        return view('welcome');
    }

    public function about() {
        return view('about');
    }

    public function contact() {
        return view('contact');
    }
}
