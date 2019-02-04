@extends('layouts.app')
@section('content')

<header class="header text-white" style="background-image: url(../img/bg.jpg)" style="padding-top: 0.5rem; padding-bottom: 0.5rem;">
    <div class="overlay opacity-95" style="background-color: #0D1F2D"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-9 py-3 flex-grow ">
                <h2><strong>📚 Community Blog</strong></h2>
                <p class="mt-3">
                There are different ways to tell a story. Our blog aims to bring you the insights and opinions from within the industry to cultivate and expand your knowledge base. 
                </p>
                <small>
                    Subscribe to our weekly newsletter to get our latest interviews & articles straight to your inbox.
                </small>
                <div class="row mt-3">
                    <form action="https://builtbyher.us19.list-manage.com/subscribe/post?u=3757dc73cf7e45a04dddc18bd&amp;id=70b2a3e203"
                        method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate col-md-12 input-glass"
                        target="_blank" novalidate="">
                        <div class="input-group">
                            <input type="text" name="EMAIL" class="form-control border-left-1" placeholder="Enter Email Address">
                            <span class="input-group-append">
                                <button class="btn btn-glass btn-primary" type="submit">Subscribe<i class="ti-arrow-right fs-9 ml-3"></i></button>
                            </span>
                        </div>
                    </form>
                </div>
                <small>
                    <p class="font-sm pt-3">If you want to write a guest post, you can read the instructions <strong><a
                                href="/contribute#guestpost"">here!</a></p></strong>

                </small>


            </div>
        </div>
</header>
<section class="section" style="padding-top: 2rem;">
    <div class="container">
        <div class="row mb-3">
            <div class="gap-multiline-items-1 align-center pb-3">
                <a href="/posts" class="badge badge-secondary ml-3 p-3">All</a>
                @foreach($categories as $category)

                <a href="@if(in_array($category, $selected_categories)){{
                '/posts/by_category?' .
                join('&', array_map(function($item) { return 'categories[]=' . $item; }, array_diff($selected_categories, [$category->name])))
                }}@else{{
                '/posts/by_category?categories[]=' . $category->name . '&' .
                join('&', array_map(function($item) { return 'categories[]=' . $item; }, $selected_categories))
                }}
                @endif
                "
                            class=" @if(in_array($category->name, $selected_categories))
                            badge badge-primary
                    ml-3
                    p-3
                    mb-3
                    @else
                    badge badge-secondary
                    ml-3
                    p-3
                    mb-3
                    @endif">

                    {{ $category->name }}
                </a>


                @endforeach

                <a href="/posts" class="badge badge-dark ml-3 p-3"><i class="fa fa-times"></i> Clear Filter</a>
            </div>
        </div>
        <div class="card-columns">

            @foreach($posts as $post)

            <div class="card text-center text-white bg-img" style="background-image: url({{ $post->image }});">
                <div class="overlay opacity-55" style="background-color: #0D1F2D"></div>
                <div class="card-body px-6 py-8">
                    @foreach($post->categories as $category)
                    <p><a class="text-uppercase small-4 ls-2 fw-600" href="/posts/by_category?categories[]={{ $category->name }}">{{
                            $category->name }}</a></p>
                    @endforeach
                    <h4><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h4>
                </div>
            </div>

            @endforeach

        </div>
    </div>
</section>

@endsection
