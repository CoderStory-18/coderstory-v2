@extends('layouts.app')
@section('content')

<header class="header text-white" style="background-image: url(../img/bg.jpg)" data-overlay="8">
    <div class="container text-center">
        <h1>Write Interview</h1>
    </div>
</header>

<div class="container pt-4">
    <form action="/interviews" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Interview Title</label>
            <input type="text" class="form-control" name="title">
        </div>

        <div class="form-group">
            <label for="interview_name">Interviewee Name</label>
            <input type="text" class="form-control" name="interview_name">
        </div>

        <div class="form-group">
            <label for="interview_profile">Interviewee Profile Image</label>
            <input type="text" class="form-control" name="interview_profile">
        </div>

        <div class="form-group">
            <label for="interview_location">Interviewee Location</label>
            <input type="text" class="form-control" name="interview_location">
        </div>

        <div class="form-group">
            <label for="twitter">Twitter</label>
            <input type="text" class="form-control" name="twitter">
        </div>

        <div class="form-group">
            <label for="instagram">Instagram</label>
            <input type="text" class="form-control" name="instagram">
        </div>

        <div class="form-group">
            <label for="website">Website</label>
            <input type="text" class="form-control" name="website">
        </div>

        <div class="form-group">
            <label for="summary">Interview Summary</label>
            <input type="textarea" class="form-control" id="summary" name="summary">
        </div>

        <div class="form-group">
            <label for="body">Interview Body</label>
            <input type="textarea" class="form-control" id="create" name="body">
        </div>

        <div class="form-group">
            <label for="tags">Tags</label>
            <select class="form-control select2-multi" name="tags[]" multiple="multiple" data-placeholder="select main category">
                @foreach($tags as $tag)
                <option value='{{$tag->id}}'>{{$tag->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>
</div>


@endsection
