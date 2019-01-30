<?php

namespace App\Http\Controllers;

use App\Interview;
use App\Post;
use App\Tag;
use App\Category;
use App\Resource;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $interviews = Interview::all();
        $posts = Post::all();
        $tags = Tag::all();
        $categories = Category::all();
        $resources = Resource::all();

        return view('admin.home', compact('interviews', 'posts', 'resources' ,'tags', 'categories'));
    }
}
