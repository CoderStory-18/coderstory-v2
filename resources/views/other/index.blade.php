@extends('layouts.app')
@section('content')
<header class="header text-white pswp__scroll-wrap" style="background-image: url(../img/bg.jpg)" style="padding-top: 0.5rem; padding-bottom: 0.5rem;">
    <div class="overlay opacity-95" style="background-color: #0D1F2D"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 py-3 flex-grow ">
                <h2><strong>We are CoderStory.</strong></h2>
                <p class="mt-3">
                    We are a community full of developers and indie hackers. We have interviews with experienced and
                    inexperienced developers, articles about programming and curated resources to make you a better
                    developer.
                </p>
                <p>
                    Subscribe to our weekly newsletter to get our latest interviews & articles straight to your inbox.
                </p>
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

                <p class="font-sm pt-3">If you are a developer and would like to share your story, 
                    <strong><a href="/contribute">we would love to hear from you!</a></p></strong>
                        
            </div>
        </div>
</header>

<!-- Interviews Featured -->
<section class="section text-black border-bottom p-0" style="background-color: #fff;">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-12 pt-8 pb-2">
                <h3> 👩🏽‍💻 Interviews with developers</h3>
                <p class="lead">
                    Instrument cultivated alteration any favourable expression law far nor. Both new like tore but
                    year. An from mean on with when sing pain.
                </p>
            </div>
        </div>

        <div class="row gap-y mb-3">
            @foreach ($interviews as $interview)
            <div class="col-md-6 col-xl-4 ">
                <a class="product-1" href="/interviews/{{ $interview->slug }}">
                    <span class="badge badge-pill badge-danger badge-pos-left">Featured</span>

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
    </div>
</section>

<!-- Blog -->
<section class="section bg-dark text-white p-0" style="background-color: #fff;">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-12 pt-7 pb-2">
                <h3> 📚 Tech Blog </h3>
                <p class="lead">
                    Instrument cultivated alteration any favourable expression law far nor. Both new like tore but
                    year. An from mean on with when sing pain.
                </p>
            </div>
        </div>
        <div class="row gap-y mt-2 mb-3">

            <div class="col-md-6 col-lg-4">
                <div class="card card-inverse border hover-shadow-6 d-block">
                    <a href="#"><img class="card-img-top" src="../assets/img/thumb/1.jpg" alt="Card image cap"></a>
                    <div class="card-body">
                        <h5 class="card-title"><a href="#">We relocated to a new garage</a></h5>
                        <p>Some quick example text to build on the card title and make up the bulk of the card's
                            content. Some quick example text to build on the card title.</p>
                    </div>
                </div>
            </div>


            <div class="col-md-6 col-lg-4">
                <div class="card card-inverse border hover-shadow-6 d-block">
                    <a href="#"><img class="card-img-top" src="../assets/img/thumb/2.jpg" alt="Card image cap"></a>
                    <div class="card-body">
                        <h5 class="card-title"><a href="#">Top 5 content marketing strategies</a></h5>
                        <p>Some quick example text to build on the card title and make up the bulk of the card's
                            content. Some quick example text to build on the card title.</p>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 d-none d-lg-flex">
                <div class="card card-inverse border hover-shadow-6 d-block">
                    <a href="#"><img class="card-img-top" src="../assets/img/thumb/3.jpg" alt="Card image cap"></a>
                    <div class="card-body">
                        <h5 class="card-title"><a href="#">Best practices for minimalist design</a></h5>
                        <p>Some quick example text to build on the card title and make up the bulk of the card's
                            content. Some quick example text to build on the card title.</p>
                    </div>
                </div>
            </div>

        </div>

        <nav class="flexbox mb-5">
            <a class="btn btn-dark disabled"></a>
            <a class="btn btn-dark border" href="/blog"> 👉🏽 Read More</a>
        </nav>


    </div>

    </div>
    </div>
</section>


@endsection
