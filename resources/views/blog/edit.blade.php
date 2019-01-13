@extends('layouts.app')

@section('content')

<header class="header text-white" style="background-image: url(/img/bg.jpg)" data-overlay="8">
    <div class="container text-center">
        <h1>
            Edit {{ $post->title }}
        </h1>
    </div>
</header>
<div class="container">

    <form action="//blog/{{ $post->slug }}" method="POST">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}

        <div class="form-group">
            <label for="title">Blog Title</label>
            <input type="text" class="form-control" name="title" value="{{ $post->title }}">
        </div>

        <div class="form-group">
            <label for="image">Blog Image</label>
            <input type="text" class="form-control" name="image" value="{{ $post->image }}">
        </div>

        <div class="form-group">
            <label for="summary">Blog Summary</label>
            <input type="textarea" class="form-control" id="summary" name="summary" value="{{ $post->summary }}">
        </div>

        <div class="form-group">
            <label for="body">Blog Body</label>
            <input type="textarea" class="form-control" id="create" name="body" value="{{ $post->body }}">
        </div>

        <div class="form-group">
            <label for="body">Post Status</label>
            <input type="dropdown" class="form-control" name="featured" value="{{ $post->featured }}">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Update</button>
        </div>
    </form>
    <form action="/blog/{{ $post->slug }}" method="POST">
        {{method_field('DELETE')}}
        {{ csrf_field() }}
        <input type="submit" class="btn btn-danger" value="Delete" />
    </form>
</div>
@endsection
