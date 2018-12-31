@extends('layouts.app') 
@section('content')

<header class="header text-white" style="background-image: url(../img/bg.jpg)" data-overlay="8">
	<div class="container text-center">

		<div class="row">
			<div class="col-lg-8 mx-auto">

				<h1>Read the latest interviews from <span class="text-primary" data-typing="Pat Walls, Jessica Wallace, Steph Smith, & many more..."></span>Pat Walls<span class="typed-cursor">|</span></h1>
				<p class="lead-2 mt-5">You have got the change to work and thrive with us. We are a small group of developers who wants to make a family!</p>

				<hr class="w-60px my-7">

				<a class="btn btn-lg btn-round btn-white" href="#">Submit Your Interview</a>

			</div>
		</div>
	</div>
</header>

<section id="image" class="section bg-gray">
	<div class="container">

		<div class="row gap-y">
		<div class="col-12 align-right">
		<div class="dropdown">
                <span class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Right aligned</span>
                <div class="dropdown-menu dropdown-menu-right" x-placement="top-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(98px, -1px, 0px);">
                  <h6 class="dropdown-header">Select a plan</h6>
                  <a class="dropdown-item" href="#">Weekly</a>
                  <a class="dropdown-item" href="#">Monthly</a>
                  <a class="dropdown-item" href="#">Yearly</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">See all</a>
                </div>
              </div>
		</div>
		</div>
		
		<div class="row">
			@foreach ($interviews as $interview)
			<div class="col-md-3">
				<div class="card d-block shadow-4">
					<div class="card-img-top">
						<img src="{{ $interview->interview_profile }}" height="100" alt="Card image cap">
						<div class="badges badges-right">
							<a class="badge badge-warning" href="#">Product</a>
						</div>
					</div>

					<div class="card-body">
						<h5 class="card-title">{{ $interview->name }}</h5>
						<p>{!! str_limit($interview->body, 350) !!}</p>
						<a class="fs-12 fw-600" href="/interviews/{{ $interview->slug }}">Read more <i class="fa fa-angle-right pl-1"></i></a>
					</div>
				</div>
      </div>
			@endforeach
		

		</div>

	</div>
</section>
@endsection