@extends('layouts.app')

@section('content')

<header class="header text-white" style="background-image: url(../img/bg.jpg)" data-overlay="1">
    <div class="overlay opacity-95" style="background-color: #0D1F2D"></div>
    <div class="container">
        <div class="row align-items-center h-100">

            <div class="col-md-12 pb-1">
                <h1 class="display-3">🕶 About</h1>
            </div>

        </div>
    </div>
</header>

<!--
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      | Breadcrumbs
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      !-->
<nav class="bb-1 bg-gray" aria-label="breadcrumb">
    <div class="container">
        <ol class="breadcrumb px-0">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item">About</li>
        </ol>
    </div>
</nav>

<main class="main-content">

    <section class="section" style="padding-top:4rem; padding-bottom: 4rem;">
        <div class="container">
            <div class="row gap-y align-items-center">

                <div class="col-md-10 mx-auto">
                    <p class="lead">
                            CoderStory is a platform to share every story. With exclusive interviews from creators; 
                            we aim to bring you a new way of learning. We believe everyone has a story to tell, and 
                            you can find or start yours here. 
                    </p>
                    <p>
                            By sharing your stories we want to create conversations that will not only 
                            provide knowledge and support for the makers of today, but for those who want 
                            to be inspired as the creators of tomorrow. The industry is always expanding and 
                            by detailing your journey there is an opportunity to provide a blueprint for the 
                            community that will bring to the forefront; products and creations that need to 
                            be shared with the world. 
                    </p>
                    <p>         
                            Coderstory was born from the mind of Jessica Wallace, an evolving maker who wanted 
                            to challenge the norm and find a way to make the community more tight-knit. 
                            In a sea of platforms where creators can come together, her mission is to invite people 
                            from all walks of life to share, educate and celebrate their hard work.     
                    </p>
                </div>

            </div>
        </div>
    </section>

    <h6 class="divider"></h6>


    {{-- <section class="section bg-gray" style="padding-top:4rem; padding-bottom: 4rem;">
        <div class="container">
            <div class="row gap-y">

                <div class="col-md-4">
                    <div class="row">
                        <div class="col-6">
                            <h4 class="lead-7 text-right counted" data-provide="countup" data-from="0" data-to="42">42</h4>
                        </div>

                        <div class="col-6">
                            <p class="small text-uppercase ls-2 mb-2">Interviews</p>
                            <p><i class="icon-briefcase lead-4 mb-0"></i></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="row">
                        <div class="col-6">
                            <h4 class="lead-7 text-right counted" data-provide="countup" data-from="0" data-to="3500">3,500</h4>
                        </div>

                        <div class="col-6">
                            <p class="small text-uppercase ls-2 mb-2">Blog Posts</p>
                            <p><i class="icon-profile-male lead-4 mb-0"></i></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="row">
                        <div class="col-6">
                            <h4 class="lead-7 text-right counted" data-provide="countup" data-from="0" data-to="100"
                                data-prefix="%">%100</h4>
                        </div>

                        <div class="col-6">
                            <p class="small text-uppercase ls-2 mb-2">Satisfaction</p>
                            <p><i class="icon-happy lead-4 mb-0"></i></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> --}}

    <section class="section">
        <div class="container">
            <header class="section-header">
                <small>People</small>
                <h3>The Team</h3>
                <hr>
                <p>We are a family focusing on bringing great content to your screen. </p>

            </header>

            <div class="row gap-y">
                <div class="col-md-6 team-2">
                    <a href="#">
                        <img src="https://pbs.twimg.com/profile_images/1067193262501449729/KzfPUhH6_400x400.jpg" class="rounded-circle"
                            style="height:100px" alt="...">
                    </a>
                    <h5>Jess Wallace</h5>
                    <small>The Creator.</small>
                    <p>
                    A creator on a journey to expand and celebrate the maker community.
                    </p>
                    <div class="social social-brand">
                        <a class="social-twitter" href="https://twitter.com/jesswallaceuk"><i class="fa fa-twitter"></i></a>
                        <a class="social-instagram" href="https://www.instagram.com/jesswallaceuk/"><i class="fa fa-instagram"></i></a>
                        <a class="social-github" href="https://github.com/jesswallace94"><i class="fa fa-github"></i></a>
                    </div>
                </div>


                <div class="col-md-6 team-2">
                    <a href="#">
                        <img src="https://pbs.twimg.com/profile_images/1064489270331740160/TmgqA2cx_400x400.jpg" class="rounded-circle"
                            style="height:100px" alt="...">
                    </a>
                    <h5>Ben Wallace</h5>
                    <small>The Creative.</small>
                    <p>
                    With your voice, he’s on a mission to tell your story. 
                    </p>
                    <div class="social social-brand">
                        <a class="social-facebook" href="https://www.facebook.com/bennobasanez"><i class="fa fa-facebook"></i></a>
                        <a class="social-twitter" href="https://twitter.com/benwallaceuk"><i class="fa fa-twitter"></i></a>
                        <a class="social-instagram" href="https://www.instagram.com/coderstory_io/"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </section>


</main>

@endsection
