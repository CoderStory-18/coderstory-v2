@extends('layouts.app')

@section('content')

<header class="header text-white" style="background-image: url(../img/bg.jpg)" style="padding-top: 0.5rem; padding-bottom: 0.5rem;">
    <div class="overlay opacity-95" style="background-color: #0D1F2D"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 py-3 flex-grow ">
                <h2><strong>🎒 Resources</strong></h2>
                <p class="mt-3">
                    Curated lists of resources & tools for entrepreneurs. From hosting providers for your business
                    websites to tools to monetize your startup, find out the best entrepreneurial links!
                </p>
            </div>
        </div>
</header>

<section class="section overflow-hidden bg-gray pt-7">
    <div class="container">
        <div data-provide="shuffle">
            <ul class="nav nav-center nav-bold nav-uppercase nav-pills mb-7" data-shuffle="filter">
                <li class="nav-item">
                    <a class="nav-link active" href="#" data-shuffle="button">All</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-shuffle="button" data-group="Book">Book</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-shuffle="button" data-group="Podcast">Podcast</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-shuffle="button" data-group="Software">Software</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#" data-shuffle="button" data-group="Education">Education</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#" data-shuffle="button" data-group="Community">Communities</a>
                </li>
            </ul>


            <div class="row shuffle" data-shuffle="list" style=" overflow: hidden; transition: height 500ms cubic-bezier(0.4, 0, 0.2, 1) 0s;">
                @foreach($resources as $resource)
                <div class="col-6 col-lg-3 mt-3 shuffle-item shuffle-item--visible" data-shuffle="item" data-groups="{{$resource->type}}">
                    <a class="card shadow-1 hover-shadow-6" data-toggle="modal"
                        data-target="#modal-portfolio" target="_blank">
                        <img class="card-img-top shadow-1" src="{{ $resource->image }}" alt="screenshot">

                        <div class="card-body shadow-3 border">
                            <a href="{{ $resource->link }}" target="_blank"><h6 class="mb-0">{{ $resource->name }}</h6> </a>
                            <p class="lead">{{ $resource->summary }}</p>
                            <small class="small-5 text-lightest text-uppercase ls-2">{{$resource->type}}</small>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>


    </div>
</section>

@endsection
