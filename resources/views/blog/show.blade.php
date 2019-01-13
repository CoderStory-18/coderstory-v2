@extends('blog.post-head')
@section('content')

<header class="header text-white" style="background-color: #0D1F2D;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center mt-2">
                    <h2>{{ $blogPost->title}}</h2>
                    <p>[DATE]<a href="#"> - [Category]</a></p>
                </div>
            </div>
        </div>
    </div>
</header>

<nav class="bb-1 bg-gray" aria-label="breadcrumb">
    <div class="container">
        <ol class="breadcrumb px-0">
            <li class="breadcrumb-item"><a href="/blog">Blog</a></li>
            <li class="breadcrumb-item">Blog Title</li>
        </ol>
    </div>
</nav>

<div class="section bg-gray">
    <div class="container">
        <div class="text-center my-2">
            <img class="rounded-md" src="../assets/img/thumb/5.jpg" alt="...">
        </div>


        <div class="row">
            <div class="col-lg-8 mx-auto">
                <p>Post Text</p>
                <div class="gap-xy-2 mt-3">
                    <a class="badge badge-pill badge-secondary" href="#">Record</a>
                    <a class="badge badge-pill badge-secondary" href="#">Progress</a>
                    <a class="badge badge-pill badge-secondary" href="#">Customers</a>
                    <a class="badge badge-pill badge-secondary" href="#">News</a>
                </div>

            </div>
        </div>


    </div>
</div>

@endsection
