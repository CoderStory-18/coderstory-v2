@extends('layouts.app')

@section('content')

<header class="header text-white" style="background-color: #0D1F2D;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="display-4">{{ $interview->title }}</h1>
                <p class="lead-2 opacity-90 mt-6">
                    {{ $interview->created_at }}
                </p>
            </div>
        </div>
    </div>
</header>

<div class="section" id="section-content bg-gray">
    <div class="container">

        <div class="row">
            <div class="col-lg-3 mx-auto">
                <div class="team-2 bg-white">
                    <a href="#">
                        <img src="{{ $interview->interview_profile }}" alt="..." class="avatar-xl" height="100">
                    </a>
                    <h5>{{ $interview->interview_name }}</h5>
                    <small>{{ $interview->interview_location }}</small>
                    <p>Signs you'll a, life itself to in signs seed under fruitful good open behold Our of stars whales
                        forth.</p>
                    <br>
                    <div class="social social-brand">
                        <a class="social-twitter" href="#"><i class="fa fa-twitter"></i></a>
                        <a class="social-instagram" href="#"><i class="fa fa-instagram"></i></a>
                        <a class="social-website" href="#"><i class="fa fa-link"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 mx-auto">
                <p>
                    {!! $interview->body !!}
                </p>

                <div class="gap-xy-2 mt-6">
                    <a class="badge badge-pill badge-secondary" href="#">Record</a>
                    <a class="badge badge-pill badge-secondary" href="#">Progress</a>
                    <a class="badge badge-pill badge-secondary" href="#">Customers</a>
                    <a class="badge badge-pill badge-secondary" href="#">News</a>
                </div>

            </div>
        </div>



    </div>
</div>


</div>
</div>



@endsection
