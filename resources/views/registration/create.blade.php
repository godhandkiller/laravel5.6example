@extends('layout.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-8 blog-main">
                <h2>Register</h2>
                <hr>
                <form method="POST" action="{{ route('registerUser') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                    @include('layout.errors')  
                </form>
            </div>
            @include('layout.sidebar')
        </div>
    </div>
@endsection
