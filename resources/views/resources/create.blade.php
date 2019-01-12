@extends('layouts.app')
@section('content')

<header class="header text-white" style="background-image: url(../img/bg.jpg)" data-overlay="8">
    <div class="container text-center">
        <h1>Add Resource</h1>
    </div>
</header>

<div class="container pt-4">
    <form action="/resources" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name">
        </div>

        <div class="form-group">
            <label for="image">Image Link:</label>
            <input type="text" class="form-control" name="image">
        </div>

        <div class="form-group">
            <label for="link">Website Link:</label>
            <input type="text" class="form-control" name="link">
        </div>

        <div class="form-group">
            <select class="form-control" placeholder="Select input" name="type">
                <option value="Book">Book</option>
                <option value="Podcast">Podcast</option>
                <option value="Software">Software</option>
                <option value="Education">Education</option>
                <option value="Community">Community</option>
            </select>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>
</div>


@endsection
