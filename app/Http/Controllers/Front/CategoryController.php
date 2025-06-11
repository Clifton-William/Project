<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($slugCategory)
    {
        return view('front.category.index', [
            'articles' => Article::with('Category')->whereHas('Category', function ($q) use ($slugCategory) {
                $q->where('slug', $slugCategory);
            })->latest()->paginate(4),
            'category' => $slugCategory
            // 'category_navbar' => Category::latest()->take(4)->get()
        ]);
    }

    // public function allCategory()
    // {
    //     $category = Category::whereHas('Articles', function (Builder $query) {
    //         $query->where('status', 1);
    //     })->withCount(['Articles' => function ($query) {
    //         $query->where('status', 1);
    //     }])->take(4)->latest()->get();

    //     return view('front.category.all-category', [
    //         'category' => $category
    //     ]);
    // }

    public function allCategory()
    {
        $category = Category::whereHas('Articles', function (Builder $query) {
            $query->where('status', 1);
        })->withCount(['Articles' => function ($query) {
            $query->where('status', 1);
        }])->latest()->get();

        return view('front.category.all-category', [
            'category' => $category
        ]);
    }
}
