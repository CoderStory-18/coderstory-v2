@extends('layouts.app') 

@section('content')
    <div class="container">
        <h1>Create Tag</h1>

        <form action="/tags" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name"> Tag Name</label>
                <input type="text" class="form-control" name="name">
            </div> 

            <div class="form-group">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>
@endsection