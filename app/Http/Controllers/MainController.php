<?php


namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function index()
    {
        $articles = Article::paginate(4);
        $category = Category::All();
        return view('articles', compact('articles', 'category'));
    }

    public function show(Article $article)
    {
        return view('article', 
        ['article' => $article]);
    }
}
