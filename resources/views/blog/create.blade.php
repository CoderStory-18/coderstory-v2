@extends('layouts.app')
@section('content')

<header class="header text-white" style="background-image: url(../img/bg.jpg)" data-overlay="8">
    <div class="container text-center">
        <h1>Write Blog Post</h1>
    </div>
</header>

<div class="container pt-4">
    <form action="/posts" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Blog Title</label>
            <input type="text" class="form-control" name="title">
        </div>

        <div class="form-group">
            <label for="image">Blog Image</label>
            <input type="text" class="form-control" name="image">
        </div>

        <div class="form-group">
            <label for="summary">Blog Summary</label>
            <input type="textarea" class="form-control" id="summary" name="summary">
        </div>

        <div class="form-group">
            <label for="body">Blog Body</label>
            <input type="textarea" class="form-control" id="create" name="body">
        </div>

        <div class="form-group">
            <select class="form-control" placeholder="Select input" name="author">
                <option value="Jess Wallace">Jess Wallace</option>
                <option value="Ben Wallace">Ben Wallace</option>
                <option value="Guest">Guest</option>
            </select>
        </div>

        <div class="form-group">
            <label for="author_link">Author Link</label>
            <input type="text" class="form-control" name="author_link">
        </div>

        <div class="form-group">
            <label for="categories">Categories</label>
            <select class="form-control select2-multi" name="categories[]" multiple="multiple" data-placeholder="select main category">
                @foreach($categories as $category)
                <option value='{{$category->id}}'>{{$category->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>
</div>


@endsection
