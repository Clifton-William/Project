<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Article;
use App\Models\Config;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class SideWidgetProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {

        View::composer('front.layout.side-widget', function ($view) {
            $category = Category::whereHas('Articles', function (Builder $query) {
                $query->where('status', 1);
            })->withCount(['Articles' => function ($query) {
                $query->where('status', 1);
            }])->take(4)->latest()->get();

            $view->with('categories', $category);
        });

        View::composer('front.layout.side-widget', function ($view) {
            $posts = Article::orderBy('views', 'desc')->take(3)->get();
            $config = Config::where('name', 'ads_widget')->pluck('value', 'name');

            $view->with('popular_posts', $posts);
            $view->with('config', $config);
        });

        View::composer('front.layout.navbar', function ($view) {
            $category = Category::latest()->take(4)->get();

            $view->with('category_navbar', $category);
        });
    }

}

//tutor 25 menit 1 - 12 ahirnya aku buat cara sendiri (why i am so damn great!!!)
