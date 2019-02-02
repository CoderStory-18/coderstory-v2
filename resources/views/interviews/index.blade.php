@extends('layouts.app')
@section('content')

<header class="header text-white" style="background-image: url(../img/bg.jpg)" style="padding-top: 0.5rem; padding-bottom: 0.5rem;">
    <div class="overlay opacity-95" style="background-color: #0D1F2D"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 py-3 flex-grow ">
                <h2><strong> 💻 Creator Interviews </strong></h2>
                <p class="mt-3 lead">
                Everyone has a story and now you can learn about the evolving creators of our community here. 
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
                    <p class="font-sm pt-3">If you are a developer and would like to share your story,
                        <strong><a href="/contribute">we would love to hear from you!</a></p></strong>
                </small>


            </div>
        </div>
</header>


<section id="image" class="section bg-gray" style="padding-top: 2rem;">
    <div class="container">

        <div class="row mb-3">
            <div class="gap-multiline-items-1 align-center pb-3">
                <a href="/interviews" class="badge badge-secondary ml-3 p-3">All</a>

                @foreach($tags as $tag)

                <a href=" @if(in_array($tag, $selected_tags)){{
            			'/interviews/by_tags?' .
            			join('&', array_map(function($item) { return 'tags[]=' . $item; }, array_diff($selected_tags, [$tag])))
          				}}@else{{
						'/interviews/by_tags?tags[]=' . $tag . '&' .
						join('&', array_map(function($item) { return 'tags[]=' . $item; }, $selected_tags))
						}}
						@endif
						"
                    class=" @if(in_array($tag, $selected_tags))
							  badge badge-primary
							  ml-3
							  p-3
							@else
							badge badge-secondary
							ml-3
							p-3
        					@endif">

                    {{ $tag }}
                </a>
                @endforeach

                <a href="/interviews" class="badge badge-dark ml-3 p-3"><i class="fa fa-times"></i>  Clear Filter</a>
            </div>
        </div>

        <div class="row">
            @foreach ($interviews as $interview)
            <div class="col-md-3">
                <div class="card d-block shadow-4">
                    <div class="card-img-top">
                        <img src="{{ $interview->interview_profile }}" height="100" alt="Card image cap">
                        <div class="badges badges-right">
                            @foreach($interview->tags as $tag)
                            <a class="badge badge-glass badge-primary" href="/tags/{{ $tag->name }}}">{{ $tag->name }}</a>
                            @endforeach
                        </div>

                    </div>

                    <div class="card-body pb-1">

                        <h5 class="card-title">{{ $interview->name }}</h5>
                        <p>{{ $interview->summary }}</p>


                    </div>

                    <div class="card-footer">
                        <a class="fs-12 fw-600" href="/interviews/{{ $interview->slug }}">Read more <i class="fa fa-angle-right pl-1"></i></a>
                    </div>
                </div>
            </div>
            @endforeach


        </div>

    </div>
</section>

<style type="text/css" data-typed-js-css="true">
    .typed-cursor {
        opacity: 1;
    }

    .typed-cursor.typed-cursor--blink {
        animation: typedjsBlink 0.7s infinite;
        -webkit-animation: typedjsBlink 0.7s infinite;
        animation: typedjsBlink 0.7s infinite;
    }

    @keyframes typedjsBlink {
        50% {
            opacity: 0.0;
        }
    }

    @-webkit-keyframes typedjsBlink {
        0% {
            opacity: 1;
        }

        50% {
            opacity: 0.0;
        }

        100% {
            opacity: 1;
        }
    }

</style>
@endsection
