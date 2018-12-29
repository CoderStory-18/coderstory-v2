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

<section class="section overflow-hidden bg-gray">
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


            <div class="row shuffle" data-shuffle="list" style="position: relative; overflow: hidden; height: 616.25px; transition: height 500ms cubic-bezier(0.4, 0, 0.2, 1) 0s;">

              <div class="col-6 col-lg-3 shuffle-item shuffle-item--visible" data-shuffle="item" data-groups="bag,box" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transition-duration: 500ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity; transform: translate(0px, 0px) scale(1);">
                <a class="card shadow-1 hover-shadow-6" href="#" data-toggle="modal" data-target="#modal-portfolio">
                  <!-- <img class="card-img-top" src="../assets/img/portfolio/1.jpg" alt="screenshot"> -->
                  <div class="card-body">
                    <h6 class="mb-0">Phone Bag</h6>
                    <small class="small-5 text-lightest text-uppercase ls-2">Bag, Box</small>
                  </div>
                </a>
              </div>


              <div class="col-6 col-lg-3 shuffle-item shuffle-item--visible" data-shuffle="item" data-groups="book" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transform: translate(282px, 0px) scale(1); transition-duration: 500ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
                <a class="card shadow-1 hover-shadow-6" href="#" data-toggle="modal" data-target="#modal-portfolio">
                  <!-- <img class="card-img-top" src="../assets/img/portfolio/2.jpg" alt="screenshot"> -->
                  <div class="card-body">
                    <h6 class="mb-0">Mockup Book</h6>
                    <small class="small-5 text-lightest text-uppercase ls-2">Book</small>
                  </div>
                </a>
              </div>


              <div class="col-6 col-lg-3 shuffle-item shuffle-item--visible" data-shuffle="item" data-groups="box" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transform: translate(563px, 0px) scale(1); transition-duration: 500ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
                <a class="card shadow-1 hover-shadow-6" href="#" data-toggle="modal" data-target="#modal-portfolio">
                  <!-- <img class="card-img-top" src="../assets/img/portfolio/3.jpg" alt="screenshot"> -->
                  <div class="card-body">
                    <h6 class="mb-0">T-shirt</h6>
                    <small class="small-5 text-lightest text-uppercase ls-2">Box</small>
                  </div>
                </a>
              </div>


              <div class="col-6 col-lg-3 shuffle-item shuffle-item--visible" data-shuffle="item" data-groups="bottle" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transform: translate(845px, 0px) scale(1); transition-duration: 500ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
                <a class="card shadow-1 hover-shadow-6" href="#" data-toggle="modal" data-target="#modal-portfolio">
                  <!-- <img class="card-img-top" src="../assets/img/portfolio/4.jpg" alt="screenshot"> -->
                  <div class="card-body">
                    <h6 class="mb-0">Coffee</h6>
                    <small class="small-5 text-lightest text-uppercase ls-2">Bottle</small>
                  </div>
                </a>
              </div>


              <div class="col-6 col-lg-3 shuffle-item shuffle-item--visible" data-shuffle="item" data-groups="bottle" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transform: translate(0px, 308px) scale(1); transition-duration: 500ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
                <a class="card shadow-1 hover-shadow-6" href="#" data-toggle="modal" data-target="#modal-portfolio">
                  <!-- <img class="card-img-top" src="../assets/img/portfolio/5.jpg" alt="screenshot"> -->
                  <div class="card-body">
                    <h6 class="mb-0">Shampoo</h6>
                    <small class="small-5 text-lightest text-uppercase ls-2">Bottle</small>
                  </div>
                </a>
              </div>


              <div class="col-6 col-lg-3 shuffle-item shuffle-item--visible" data-shuffle="item" data-groups="bag" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transform: translate(282px, 308px) scale(1); transition-duration: 500ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
                <a class="card shadow-1 hover-shadow-6" href="#" data-toggle="modal" data-target="#modal-portfolio">
                  <!-- <img class="card-img-top" src="../assets/img/portfolio/6.jpg" alt="screenshot"> -->
                  <div class="card-body">
                    <h6 class="mb-0">Paper Bag</h6>
                    <small class="small-5 text-lightest text-uppercase ls-2">Bag</small>
                  </div>
                </a>
              </div>


              <div class="col-6 col-lg-3 shuffle-item shuffle-item--visible" data-shuffle="item" data-groups="bottle" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transform: translate(563px, 308px) scale(1); transition-duration: 500ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
                <a class="card shadow-1 hover-shadow-6" href="#" data-toggle="modal" data-target="#modal-portfolio">
                  <!-- <img class="card-img-top" src="../assets/img/portfolio/7.jpg" alt="screenshot"> -->
                  <div class="card-body">
                    <h6 class="mb-0">Elixir</h6>
                    <small class="small-5 text-lightest text-uppercase ls-2">Bottle</small>
                  </div>
                </a>
              </div>


              <div class="col-6 col-lg-3 shuffle-item shuffle-item--visible" data-shuffle="item" data-groups="book" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transform: translate(845px, 308px) scale(1); transition-duration: 500ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
                <a class="card shadow-1 hover-shadow-6" href="#" data-toggle="modal" data-target="#modal-portfolio">
                  <!-- <img class="card-img-top" src="../assets/img/portfolio/8.jpg" alt="screenshot"> -->
                  <div class="card-body">
                    <h6 class="mb-0">Magazine</h6>
                    <small class="small-5 text-lightest text-uppercase ls-2">Book</small>
                  </div>
                </a>
              </div>


            </div>
          </div>


        </div>
      </section>

@endsection