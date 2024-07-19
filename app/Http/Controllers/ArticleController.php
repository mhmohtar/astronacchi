<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('check.membership');
    }

    public function index(Request $request)
    {
        $allowedArticles = $request->get('allowedArticles');
        // $articles = Article::limit($allowedArticles)->get();
        if ($allowedArticles == 'all') {
            $articles = Article::paginate(8);
        } else {
            $articles = Article::limit($allowedArticles)->get();
        }

        return view('apps.artikel', compact('articles','allowedArticles'));
    }
}
