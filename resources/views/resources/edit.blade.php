@extends('layouts.app')

@section('content')

<header class="header text-white" style="background-image: url(/img/bg.jpg)" data-overlay="8">
    <div class="container text-center">
        <h1>
            Edit {{ $resource->name }}
        </h1>
    </div>
</header>
<div class="container">

    <form action="/resources/{{ $resource->id }}" method="POST">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" value="{{ $resource->name }}">
        </div>

        <div class="form-group">
            <label for="image">Image Link:</label>
            <input type="text" class="form-control" name="image" value="{{ $resource->image }}">
        </div>

        <div class="form-group">
            <label for="link">Website Link:</label>
            <input type="text" class="form-control" name="link" value="{{ $resource->link }}">
        </div>
        
        <div class="form-group">
            <label for="promoted">Promoted:</label>
            <input type="text" class="form-control" name="promoted" value="{{ $resource->promoted }}">
        </div>


        <div class="form-group">
            <button type="submit" class="btn btn-success">Update</button>
        </div>
    </form>
    <form action="/resources/{{ $resource->id }}" method="POST">
        {{method_field('DELETE')}}
        {{ csrf_field() }}
        <input type="submit" class="btn btn-danger" value="Delete" />
    </form>
</div>
@endsection
