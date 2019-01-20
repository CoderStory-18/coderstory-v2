@extends('layouts.app')

@section('content')

<header class="header text-white" style="background-image: url(../img/bg.jpg)" style="padding-top: 0.5rem; padding-bottom: 0.5rem;">
    <div class="overlay opacity-95" style="background-color: #0D1F2D"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 py-3 flex-grow ">
                <h2><strong>Dashboard</strong></h2>
            </div>
        </div>
</header>
<section class="section bg-gray" style="padding-top: 2rem; padding-bottom: 2rem;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="accordion">

                    <!-- Dashboard -->
                    <!-- <div class="card">
                        <div class="card-header">Dashboard</div>

                        <div class="card-body">
                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                            @endif

                            You are logged in!
                        </div>
                    </div> -->
                    <!-- Interviews -->
                    <div class="card mt-4">
                        <div class="card-header">
                            Interviews
                        </div>

                        <div class="card-body">
                            <a href="/interviews/create" class="pb-3">
                                <button type="button" class="btn btn-round btn-primary">Add New</button>
                            </a>

                            <table class="table table-hover mt-3">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Interview With</th>
                                        <th>Interview Title</th>
                                        <th>Featured</th>
                                        <th>Manage</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($interviews as $interview)
                                    <tr>
                                        <th scope="row">{{ $interview->id }}</th>
                                        <td>{{ $interview->interview_name }}</td>
                                        <td>{{ $interview->title }}</td>
                                        <td>{{ $interview->featured }}</td>
                                        <td>
                                            <a href="/interviews/{{ $interview->slug }}/edit">
                                                <button type="submit" class="btn btn-warning">Edit</button>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Blog -->
                    <div class="card mt-4">
                        <div class="card-header">
                            Blog Posts
                        </div>

                        <div class="card-body">
                            <a href="/posts/create" class="pb-3">
                                <button type="button" class="btn btn-round btn-primary">Add New</button>
                            </a>

                            <table class="table table-hover mt-3">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Post Title</th>
                                        <th>Author</th>
                                        <th>Featured</th>
                                        <th>Manage</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($posts as $post)
                                    <tr>
                                        <th scope="row">{{ $post->id }}</th>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ $post->author }}</td>
                                        <td>{{ $post->featured }}</td>
                                        <td>
                                            <a href="/post/{{ $post->slug }}/edit">
                                                <button type="submit" class="btn btn-warning">Edit</button>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Resources -->
                    <div class="card mt-4">
                        <div class="card-header">
                            Resources
                        </div>

                        <div class="card-body">
                            <a href="/resources/create" class="pb-3">
                                <button type="button" class="btn btn-round btn-primary">Add New</button>
                            </a>

                            <table class="table table-hover mt-3">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Link</th>
                                        <th>Type</th>
                                        <th>Manage</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($resources as $resource)
                                    <tr>
                                        <th scope="row">{{ $resource->id }}</th>
                                        <td>{{ $resource->name }}</td>
                                        <td>{{ $resource->link }}</td>
                                        <td>{{ $resource->type }}</td>
                                        <td>
                                            <a href="/resources/{{ $resource->id }}/edit">
                                                <button type="submit" class="btn btn-warning">Edit</button>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Tags -->
                    <div class="card mt-4">
                        <div class="card-header">
                            Tags
                        </div>

                        <div class="card-body">
                            <a href="/tags" class="pb-3">
                                <button type="button" class="btn btn-round btn-primary">Add New</button>
                            </a>

                            <table class="table table-hover mt-3">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($tags as $tag)
                                    <tr>
                                        <th scope="row">{{ $tag->id }}</th>
                                        <td>{{ $tag->name }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Categories -->
                    <div class="card mt-4">
                        <div class="card-header">
                            Categories
                        </div>

                        <div class="card-body">
                            <a href="/categories" class="pb-3">
                                <button type="button" class="btn btn-round btn-primary">Add New</button>
                            </a>

                            <table class="table table-hover mt-3">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($categories as $category)
                                    <tr>
                                        <th scope="row">{{ $category->id }}</th>
                                        <td>{{ $category->name }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
