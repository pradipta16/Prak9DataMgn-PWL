<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Gate;

class HomeController1 extends Controller
{

    public function __construct(){
        $this->middleware('auth');
       
    }
    public function index()
    {
    $article = Article::all();
    return view('home1',['article' => $article]);
    }

}
