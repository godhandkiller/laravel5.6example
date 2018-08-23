@extends('layout.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-8 blog-main">
                <h1>
                    {{ $posts->title }}
                </h1>
                {{ $posts->body }}
                <hr>
                <div class="comments">
                    <ul class="list-group">
                        @foreach ($posts->comments as $comment)
                            <li class="list-group-item">
                                <strong>
                                    {{ $comment->created_at->diffForHumans() }} &nbsp;
                                </strong>
                                {{ $comment->body }}
                            </li>
                        @endforeach
                    </ul>
                </div>
                <hr>
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('addComment', $posts) }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <textarea class="form-control" name="body" placeholder="Your comment here"></textarea>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary float-right" type="submit">Add Comment</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-body">
                        @include('layout.errors')
                    </div>
                </div>
            </div>
            @include('layout.sidebar')
        </div>
    </div>
@endsection