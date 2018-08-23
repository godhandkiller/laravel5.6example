@extends('layout.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-8 blog-main">
                <h2>
                    Sign In
                </h2>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                    @include('layout.errors')
                </form>
                <hr>
            </div>
            @include('layout.sidebar')
        </div>
    </div>
@endsection