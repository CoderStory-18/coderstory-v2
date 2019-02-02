@extends('layouts.app') 

@section('content')

<header class="header text-white" style="background-image: url(/img/bg.jpg)" data-overlay="8">
	<div class="container text-center">
        <h1>
            Edit {{ $interview->title }}
        </h1>
	</div>
</header>
    <div class="container">

        <form action="/interviews/{{ $interview->slug }}" method="POST">
            {{ method_field('PATCH') }}
            {{ csrf_field() }}

            <div class="form-group">
                <label for="title">Interview Title</label>
                <input type="text" class="form-control" name="title" value="{{ $interview->title }}">
            </div> 

            <div class="form-group">
                <label for="interview_name">Interviewee Name</label>
                <input type="text" class="form-control" name="interview_name" value="{{ $interview->interview_name }} ">
            </div> 

            <div class="form-group">
                <label for="interview_profile">Interviewee Profile Image</label>
                <input type="text" class="form-control" name="interview_profile" value="{{ $interview->interview_profile }}">
            </div> 

            <div class="form-group">
                <label for="interview_location">Interviewee Location</label>
                <input type="text" class="form-control" name="interview_location" value="{{ $interview->interview_location }}">
            </div> 

            <div class="form-group">
                <label for="twitter">Twitter</label>
                <input type="text" class="form-control" name="twitter" value=" {{ $interview->twitter }}">
            </div> 

            <div class="form-group">
                <label for="website">Website</label>
                <input type="text" class="form-control" name="website" value="{{ $interview->website }}">
            </div> 

            <div class="form-group">
                <label for="summary">Interview Summary</label>
                <input type="textarea" class="form-control"  id="summary" name="summary" value="{{ $interview->summary }}">
            </div>

            <div class="form-group">
                <label for="body">Interview Body</label>
                <input type="textarea" class="form-control" id="create" name="body" value="{{ $interview->body }}">
            </div>

            <div class="form-group">
                <label for="body">Interview Status</label>
                <input type="dropdown" class="form-control" name="featured"  id="interviewcreate"  value="{{ $interview->featured }}">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </form>
        <form action="/interviews/{{ $interview->slug }}" method="POST">
            {{method_field('DELETE')}}
            {{ csrf_field() }}
                <input type="submit" class="btn btn-danger" value="Delete"/>
        </form>
    </div>
@endsection
