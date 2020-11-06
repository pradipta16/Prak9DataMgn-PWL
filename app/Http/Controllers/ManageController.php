<?php

namespace App\Http\Controllers;
use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ManageController extends Controller
{

    public function __construct() 
    {
        //$this->middleware('auth');
        $this->middleware(function($request, $next) {
            if(Gate::allows('manage')) return $next($request);
            abort(403, 'Anda tidak memiliki hak akses');
        });
    }
    public function manage()
    {
    $article = Article::all();
    return view('manage',['article' => $article]);
    }

    public function add()
    {
    return view('addArticle');
    }

    public function create(Request $request)
    {
        Article::create(['title' => $request->title,
                        'excerpt' => $request->excerpt,
                        'body' => $request->body
        ]);
        return redirect('/manage');
    }   

    public function edit($id)
    {
        $article = Article::find($id);
        return view('editArticle',['article'=>$article]);
    }
    public function update($id, Request $request)
    {
        $article = Article::find($id);
        $article->title = $request->title;
        $article->excerpt = $request->excerpt;
        $article->body = $request->body;
        $article->save();
        return redirect('/manage');
    }
    public function delete($id)
    {
        $article = Article::find($id);
        $article->delete();
        return redirect('/manage');
    }

   
}
