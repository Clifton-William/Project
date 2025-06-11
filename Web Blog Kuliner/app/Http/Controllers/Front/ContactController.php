<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('front.contact.index'
            // 'category_navbar' => Category::latest()->take(4)->get()
            // 'categories' => Category::latest()->get(),
        );
    }
}
