@extends('layouts.app')
@section('content')


<header class="header text-white" style="background-color: #0D1F2D;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>See All Categories</h1>
            </div>
        </div>
    </div>
</header>

<div class="container">
    <section class="section p-0">
        <div class="container-fluid px-0">
            <div class="row pt-3">
                <div class="col-md-8">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Category Name</th>
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

                <div class="col-md-4">
                    <form action="/categories" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name"> Category Name</label>
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
