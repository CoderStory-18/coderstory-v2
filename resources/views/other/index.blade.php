@extends('layouts.app')
@section('content')
<header class="header text-white pswp__scroll-wrap" style="background-image: url(../img/bg.jpg)" style="padding-top: 0.5rem; padding-bottom: 0.5rem;">
    <div class="overlay opacity-95" style="background-color: #0D1F2D"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-9 py-3 flex-grow ">
                <h2><strong>We are CoderStory.</strong></h2>
                <p class="mt-3">
                Finding your feet in technology? Or established and expanding your knowledge library? We are a platform to share every story. With exclusive interviews from creators, we aim to bring you a new way of learning. Everyone has a story to tell, and you can find or start yours here. 
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
                                <button class="btn btn-glass btn-light" type="submit">Subscribe<i class="ti-arrow-right fs-9 ml-3"></i></button>
                            </span>
                        </div>
                    </form>
                </div>

                <small class="font-sm pt-3">If you are a developer and would like to share your story,
                    <strong><a href="/contribute">we would love to hear from you!</a></strong>
                </small>

            </div>
        </div>
    </div>
</header>

<main class="main-content">
<!-- Interviews Featured -->
<section class="section text-black border-bottom p-0" style="background-color: #fff;">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-12 pt-7 pb-2">
                <h3 class="mb-3"> 👩🏽‍💻 Featured Interviews</h3>
            </div>
        </div>

        <div class="row gap-y mb-3">
            @foreach ($interviews as $interview)
            <div class="col-md-6 col-xl-4 ">
                <a class="product-1" href="/interviews/{{ $interview->slug }}">
                    <!-- <span class="badge badge-pill badge-danger badge-pos-left">Featured</span> -->

                    <img src="{{ $interview->interview_profile }}" alt="product">

                    <div class="product-detail">
                        <div>
                            <h6>{{ $interview->interview_name }}</h6>
                            <p>{{ $interview->title }}</p>
                        </div>
                        <!-- <div class="product-price"><span class="unit">$</span>1,299</div> -->
                    </div>
                </a>
            </div>
            @endforeach
        </div>

        <nav class="flexbox mb-5">
            <a class="btn btn-white disabled"></a>
            <a class="btn btn-white border" href="/interviews"> 👉🏽 Read More</a>
        </nav>

    </div>
</section>

<!-- Blog -->
<section class="section text-white pb-5 pt-8" style="background-color: #0D1F2D;">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-12 pt-0 pb-2">
                <h3> 📚 Community Blog </h3>
                <p class="lead">
                    There are different ways to tell a story. Our blog aims to bring you the insights and opinions 
                    from within the industry to cultivate and expand your knowledge base.
                </p>
            </div>
        </div>
        <div class="row gap-y mt-2 mb-3">
            @foreach ($posts as $post)
            <div class="col-md-6 col-lg-4">
                <div class="card card-inverse border hover-shadow-6 d-block">
                    <a href="/posts/{{ $post->slug }}"><img class="card-img-top" src="{{ $post->image }}" alt="Card image cap"></a>
                    <div class="card-body flexbox">
                        <h6 class="mb-0">
                            <a class="small" href="#">{{ $post->title }}</a>
                        </h6>
                        <a class="text-inherit small-2" href="#">
                            <!-- {{ $post->created_at }} -->
                        </a>
                    </div>
                </div>
            </div>

            @endforeach

        </div>

        <nav class="flexbox">
            <a class="btn disabled"></a>
            <a class="btn border text-white" href="/posts"> 👉🏽 Read More</a>
        </nav>

    </div>
</section>

<!-- Resources -->
<section class="section text-black pb-5 pt-8" style="background-color: #fff;">

    {{-- <section class="section text-black border-bottom p-0" style="background-color: #fff;"> --}}
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-12 pt-0 pb-2">
                <h3> 🎒 Top Resources </h3>
                <p class="lead">
                    Your one stop shop for knowledge. Here, we highlight the best resources to maximise your potential as a creator. 
                </p>
            </div>
        </div>
        <div class="row gap-y mt-2 mb-3">
            @foreach ($resources as $resource)
            <div class="col-md-6 col-lg-3">
                <div class="card border hover-shadow-6 d-block">
                    <a href="{{ $resource->link }}" target="_blank"><img class="card-img-top" src="{{ $resource->image }}" alt="{{$resource->name}} Thumbnail"></a>
                    <div class="card-body">
                        <h6 class="mb-0">
                            <a class="small" href="#">{{ $resource->name }}</a>
                        </h6>
                        <small class="small-5 text-light text-uppercase ls-2">{{$resource->type}}</small>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

        <nav class="flexbox">
            <a class="btn disabled"></a>
            <a class="btn btn-white border" href="/resources"> 👉🏽 See More</a>
        </nav>

    </div>
</section>


</main>
@endsection
