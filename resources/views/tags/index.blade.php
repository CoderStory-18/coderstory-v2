@extends('layouts.app')
@section('content')
<div class="container">
    <h1>See All Tags</h1>

    <section class="section p-0">
        <div class="container-fluid px-0">
            <div class="row">
                <div class="col-md-8">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tag Name</th>
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

                <div class="col-md-4">
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

            </div>
        </div>
    </section>




</div>
@endsection
