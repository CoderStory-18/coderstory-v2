@extends('layouts.app')
@section('content')

<header class="header text-white" style="background-image: url(../img/bg.jpg)" data-overlay="8">
    <div class="container text-center">

        <div class="row">
            <div class="col-lg-8 mx-auto">

                <h1>Blog</h1>
                <p class="lead-2 mt-5">
                    Get behind the scenes with CoderStory.
                </p>

            </div>
        </div>
    </div>
</header>

<section class="section">
        <div class="container">
          <div class="card-columns">

          @foreach($posts as $post)
          
            <div class="card text-center text-white bg-img" style="background-image: url({{ $post->image }});">
              <div class="overlay opacity-55" style="background-color: #0D1F2D"></div>
              <div class="card-body px-6 py-8">
                <p><a class="text-uppercase small-4 ls-2 fw-600" href="#">Marketing</a></p>
                <h4><a href="/blog/{{ $post->slug }}">{{ $post->title }}</a></h4>
              </div>
            </div>
           
          @endforeach

          </div>
        </div>
      </section>    


@endsection
