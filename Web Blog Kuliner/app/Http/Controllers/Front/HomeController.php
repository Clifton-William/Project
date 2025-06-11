<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('front.home.index', [
            'latest_post' => Article::with(['User', 'Category'])->latest()->first(),
            'articles' => Article::with(['User', 'Category'])->whereStatus(1)->latest()->paginate(4)
            // 'categories' => Category::latest()->get(),
            // 'category_navbar' => Category::latest()->take(4)->get()
        ]);
    }

    public function about()
    {
        return view('front.home.about', [
            'config' => [
                'footer' => 'BacaYuk'
            ]
        ]);
            // 'categories' => Category::latest()->get(),
            // 'category_navbar' => Category::latest()->take(4)->get()
    }
}
