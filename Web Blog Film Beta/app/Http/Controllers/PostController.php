<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\post;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;

// use App\Models\post;
// use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

        $categories = Cache::remember('categories', Carbon::now()->addDays(2), function(){
            return Category::whereHas('posts', function ($query) {
                $query->published();
            })->take(10)->get();
        });

        return view(
            'posts.index',
            [
                'categories' => $categories
            ]
        );
    }

    public function show(post $post)
    {
        return view(
            'posts.show',
            [
                'post' => $post
            ]
        );
    }
}
