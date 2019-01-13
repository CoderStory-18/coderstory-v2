<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\BlogPost;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = BlogPost::all();
        return view('blog.index', compact('posts'));
        // dd($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = BlogPost::create([
            'title' => request('title'), 
            'image' => request('image'),
            'slug' => str_slug(request('title'), '-'),
            'summary' => request('summary'), 
            'body' => request('body'), 
            'featured' => 0
        ]);

        return redirect('/blog');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function show(BlogPost $blogPost)
    {
        $blogPost = BlogPost::where('slug',$blogPost->slug)->first();

        // $blogPost = BlogPost::where('slug', $blogPost->slug)->first();
        dd($blogPost);
        return view('blog.show', compact('blogPost'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogPost $blogPost)
    {
        $post = BlogPost::where('slug', $post->slug)->first();
        return view('blog.edit', compact('post'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlogPost $blogPost)
    {
        // Find selected interview
        $post = BlogPost::where('slug', $post->slug)->first();

        // Update selected interview fields
        $post->title = request('title');
        $post->image = request('image');
        $post->slug = str_slug(request('title'), '-');
        $post->summary = request('summary');
        $post->body = request('body');
        $post->featured = request('featured');

        $post->save();

        return redirect('/blog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogPost $blogPost)
    {
        $post = BlogPost::where('slug', $post->slug)->delete();
    }

    public function featured()
    {
        $posts = BlogPost::all();
        return view('other.index', compact('posts'));
    }

}
