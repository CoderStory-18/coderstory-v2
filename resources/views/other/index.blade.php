@extends('layouts.app')
@section('content')
<header class="header text-white pswp__scroll-wrap" style="background-image: url(../img/bg.jpg)" style="padding-top: 0.5rem;">
    <div class="overlay opacity-95" style="background-color: #0D1F2D"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 py-8 flex-grow ">
                <h1><strong>We are CoderStory.</strong></h1>
                <p class="lead mt-5">
                    We are a community full of developers and indie hackers. We have interviews with experienced and
                    inexperienced developers, articles about programming and curated resources to make you a better
                    developer.
                </p>
                <p>
                    Subscribe to our weekly newsletter to get our latest interviews & articles straight to your inbox.
                </p>
                <div class="row mt-5">
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
            </div>
        </div>
</header>

<section class="section text-black p-0" style="background-color: #fff;">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-12 pt-8 pb-8">
                <h1> 👩🏽‍💻 Interviews with developers</h1>
                <p class="lead">
                    Instrument cultivated alteration any favourable expression law far nor. Both new like tore but
                    year. An from mean on with when sing pain.
                </p>
                <div class="card shadow-7 my-5">
                    <div class="row">
                        <div class="col-md-2">
                            <a href="blog-single.html"><img class="pt-4 pb-4 ml-4" style="width:100px; border-radius:100%;" src="https://pbs.twimg.com/profile_images/1067193262501449729/KzfPUhH6_400x400.jpg"
                                    alt="..."></a>
                        </div>

                        <div class="col-md-10">
                            <div class="pt-4 pl-0">
                                <p class="mb-0"><strong>Interview Title</strong></p>
                                <p class="mb-0">With <strong>Jess Wallace</strong></p>
                                <p class="mb-0">Section for Tags</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
