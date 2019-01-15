<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        $categories = Category::all();
        $selected_categories = [];
        return view('blog.index', compact('posts', 'categories', 'selected_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Category $category)
    {
        $categories = Category::all();
        return view('blog.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = Post::create([
            'title' => request('title'), 
            'image' => request('image'),
            'slug' => str_slug(request('title'), '-'),
            'summary' => request('summary'), 
            'body' => request('body'), 
            'author' => request('author'), 
            'author_link' => request('author_link'), 
            'featured' => 0
        ]);

        $post->categories()->sync($request->categories, false);

        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $post = Post::where('slug',$post->slug)->first();
        return view('blog.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $post = Post::where('slug', $post->slug)->first();
        return view('blog.edit', compact('post'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $post = Post::where('slug', $post->slug)->first();

        // Update selected interview fields
        $post->title = request('title');
        $post->image = request('image');
        $post->slug = str_slug(request('title'), '-');
        $post->summary = request('summary');
        $post->body = request('body');
        $post->featured = request('featured');
        $post->author = request('author');
        $post->author_link = request('author_link'); 

        $post->save();

        return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post = Post::where('slug', $post->slug)->delete();
    }

    public function byCategory(Request $request)
    {
        $selected_categories = $request->get('categories') ? $request->get('categories') : [];

        $ids = Post::all()->pluck('id')->all();

        foreach ($selected_categories as $selected_category) {
    
            $category = Category::get()->where('name', $selected_category)->first();

           
            $cat_posts_ids = $category->posts()->pluck('id')->toArray();

            
            $ids = array_intersect($ids, $cat_posts_ids);
        }

        $posts = Post::find($ids);

        // render the view
        return view('blog.index', compact('posts', 'selected_categories'));
    }
}
