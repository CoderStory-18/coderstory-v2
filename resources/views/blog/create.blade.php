@extends('layouts.app')
@section('content')

<header class="header text-white" style="background-image: url(../img/bg.jpg)" data-overlay="8">
    <div class="container text-center">
        <h1>Write Interview</h1>
    </div>
</header>

<div class="container pt-4">
    <form action="/blog" method="POST">
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
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>
</div>


@endsection
