<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $keyword = request()->keyword;

        if ($keyword) {
            $articles = Article::with('Category')
                        ->whereStatus(1)
                        ->where('title', 'like', '%' .$keyword. '%')
                        ->latest()
                        ->paginate(4);
        } else {
            $articles = Article::with('Category')->whereStatus(1)->latest()->paginate(6);
        }

        return view('front.article.index', [
            'articles' => $articles,
            'keyword' => $keyword,
            'config' => [
                'footer' => 'BacaYuk' // bisa diganti sesuai kebutuhanmu
            ]
        ]);

    }

    public function show($slug)
    {
        $article = Article::whereSlug($slug)->firstOrFail();
        $article->increment('views');

        return view('front.article.show', [
            'article' => $article,
            'config' => [
                'footer' => 'BacaYuk'
            ]
        ]);
    }
}
