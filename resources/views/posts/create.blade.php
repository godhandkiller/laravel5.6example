@extends('layout.master')

@section('content')
    
    <div class="container">
        <div class="row">
            <div class="col-sm-8 blog-main">
                <div class="blog-post">
                    <h2 class="blog-post-title">
                        Create a post
                    </h2>
                    <hr>
                    <form method="POST" action="{{ url('posts') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Body</label>
                            <textarea name="body" id="body" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Publish</button>
                        </div>
                        @include('layout.errors')
                    </form>
                </div>
            </div>
            @include('layout.sidebar')
        </div>
    </div>
@endsection

