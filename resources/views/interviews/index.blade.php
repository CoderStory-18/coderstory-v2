@extends('layouts.app')
@section('content')

<header class="header text-white" style="background-image: url(../img/bg.jpg)" data-overlay="8">
    <div class="container text-center">

        <div class="row">
            <div class="col-lg-8 mx-auto">

                <h1>Interviews with Developers.</h1>
                <p class="lead-2 mt-5">
                    Read stories from developers about their experiences.
                </p>

                <hr class="w-60px my-7">

                <a class="btn btn-lg btn-round btn-white" href="#">Submit Your Interview</a>

            </div>
        </div>
    </div>
</header>

<section id="image" class="section bg-gray" style="padding-top: 2rem;"> 
    <div class="container">

        <div class="row mb-3">
            <div class="gap-multiline-items-1 align-center pb-3">
				<a href="/interviews" class="badge badge-secondary ml-3
							p-3">All</a>

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
        .typed-cursor{
          opacity: 1;
        }
        .typed-cursor.typed-cursor--blink{
          animation: typedjsBlink 0.7s infinite;
          -webkit-animation: typedjsBlink 0.7s infinite;
                  animation: typedjsBlink 0.7s infinite;
        }
        @keyframes typedjsBlink{
          50% { opacity: 0.0; }
        }
        @-webkit-keyframes typedjsBlink{
          0% { opacity: 1; }
          50% { opacity: 0.0; }
          100% { opacity: 1; }
        }
      </style>
@endsection
