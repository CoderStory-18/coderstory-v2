@extends('layouts.app')
@section('content')

<header class="header text-white" style="background-image: url(../img/bg.jpg)" data-overlay="8">
    <div class="container text-center">

        <div class="row">
            <div class="col-lg-8 mx-auto">

                <h1>Read the latest interviews from <span class="text-primary" data-typing="Pat Walls, Jessica Wallace, Steph Smith, & many more..."></span>Pat
                    Walls<span class="typed-cursor">|</span></h1>
                <p class="lead-2 mt-5">You have got the change to work and thrive with us. We are a small group of
                    developers who wants to make a family!</p>

                <hr class="w-60px my-7">

                <a class="btn btn-lg btn-round btn-white" href="#">Submit Your Interview</a>

            </div>
        </div>
    </div>
</header>

<section id="image" class="section bg-gray">
    <div class="container">

        <div class="row gap-y">
            <div class="gap-multiline-items-1">

                @foreach($tags as $tag)

                <a href="
          @if(in_array($tag, $selected_tags)){{
            '/posts/by_tags?' .
            join('&', array_map(function($item) { return 'tags[]=' . $item; }, array_diff($selected_tags, [$tag])))
          }}@else{{
            '/posts/by_tags?tags[]=' . $tag . '&' .
            join('&', array_map(function($item) { return 'tags[]=' . $item; }, $selected_tags))
          }}
          @endif
          "
                    class="
          @if(in_array($tag, $selected_tags))
		  	badge badge-primary
          @else
		  badge badge-secondary
          
          @endif
          
          ">

                    {{ $tag }}


                    @endforeach
            </div>
        </div>

        <div class="row">
            @foreach ($interviews as $interview)
            <div class="col-md-3">
                <div class="card d-block shadow-4">
                    <div class="card-img-top">
                        <img src="{{ $interview->interview_profile }}" height="100" alt="Card image cap">

                    </div>

                    <div class="card-body">
                        <h5 class="card-title">{{ $interview->name }}</h5>
                        <p>{{ $interview->summary }}</p>
                        <a class="fs-12 fw-600" href="/interviews/{{ $interview->slug }}">Read more <i class="fa fa-angle-right pl-1"></i></a>
                    </div>
                </div>
            </div>
            @endforeach


        </div>

    </div>
</section>
@endsection
