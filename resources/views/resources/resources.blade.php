@extends('layouts.app') 

@section('content')


<header class="header text-white" style="background-image: url(../img/bg.jpg)" data-overlay="1">
<div class="overlay opacity-95" style="background-color: #0D1F2D"></div>
      <div class="container">
        <div class="row align-items-center h-100">

          <div class="col-md-9 pb-1">
            <h1 class="display-3">Resources</h1>
            <p class="lead-2 fw-400 mb-7">Most Recommended Books, Podcasts, Software &amp; more.</p>
          </div>

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
                <a class="nav-link" href="#" data-shuffle="button" data-group="book">Book</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" data-shuffle="button" data-group="podcast">Podcast</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" data-shuffle="button" data-group="software">Software</a>
              </li>
            </ul>


            <div class="row shuffle" data-shuffle="list" style=" overflow: hidden; height: 616.25px; transition: height 500ms cubic-bezier(0.4, 0, 0.2, 1) 0s;">

              <div class="col-6 col-lg-3 shuffle-item shuffle-item--visible" data-shuffle="item" data-groups="bag,box">
                <a class="card shadow-1 hover-shadow-6" href="#" data-toggle="modal" data-target="#modal-portfolio">
                <img class="card-img-top" src="https://images.unsplash.com/photo-1546886225-ddb4c885e17e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60g" alt="screenshot">

                  <div class="card-body">
                    <h6 class="mb-0">Phone Bag</h6>
                    <small class="small-5 text-lightest text-uppercase ls-2">Bag, Box</small>
                  </div>
                </a>
              </div>


              <div class="col-6 col-lg-3 shuffle-item shuffle-item--visible" data-shuffle="item" data-groups="bag,box">
                <a class="card shadow-1 hover-shadow-6" href="#" data-toggle="modal" data-target="#modal-portfolio">
                  <img class="card-img-top" src="https://images.unsplash.com/photo-1546886225-ddb4c885e17e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60g" alt="screenshot">
                  <div class="card-body">
                    <h6 class="mb-0">Phone Bag</h6>
                    <small class="small-5 text-lightest text-uppercase ls-2">Bag, Box</small>
                  </div>
                </a>
              </div>


              <div class="col-6 col-lg-3 shuffle-item shuffle-item--visible" data-shuffle="item" data-groups="bag,box">
                <a class="card shadow-1 hover-shadow-6" href="#" data-toggle="modal" data-target="#modal-portfolio">
                <img class="card-img-top" src="https://images.unsplash.com/photo-1546886225-ddb4c885e17e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60g" alt="screenshot">
<!-- <img class="card-img-top" src="../assets/img/portfolio/1.jpg" alt="screenshot"> -->
                  <div class="card-body">
                    <h6 class="mb-0">Phone Bag</h6>
                    <small class="small-5 text-lightest text-uppercase ls-2">Bag, Box</small>
                  </div>
                </a>
              </div>


              <div class="col-6 col-lg-3 shuffle-item shuffle-item--visible" data-shuffle="item" data-groups="bag,box">
                <a class="card shadow-1 hover-shadow-6" href="#" data-toggle="modal" data-target="#modal-portfolio">
                <img class="card-img-top" src="https://images.unsplash.com/photo-1546886225-ddb4c885e17e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60g" alt="screenshot">

                  <div class="card-body">
                    <h6 class="mb-0">Phone Bag</h6>
                    <small class="small-5 text-lightest text-uppercase ls-2">Bag, Box</small>
                  </div>
                </a>
              </div>

              <div class="col-6 col-lg-3 shuffle-item shuffle-item--visible" data-shuffle="item" data-groups="bag,box">
                <a class="card shadow-1 hover-shadow-6" href="#" data-toggle="modal" data-target="#modal-portfolio">
                <img class="card-img-top" src="https://images.unsplash.com/photo-1546886225-ddb4c885e17e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60g" alt="screenshot">

                  <div class="card-body">
                    <h6 class="mb-0">Phone Bag</h6>
                    <small class="small-5 text-lightest text-uppercase ls-2">Bag, Box</small>
                  </div>
                </a>
              </div>



              


            </div>
          </div>


        </div>
      </section>

@endsection