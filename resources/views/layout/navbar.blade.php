<div class="blog-masthead">
    <div class="container">
        <nav class="nav blog-nav">
            <a class="nav-link active" href="{{ route('home') }}">Home</a>
            @if (Auth::check())
                <a class="nav-link" href="#">{{ Auth::user()->name }}</a>
                <a class="nav-link" href="{{ route('logout') }}">Logout</a>
            @else
                <a class="nav-link" href="{{ route('registerView') }}">Register</a>
                <a class="nav-link" href="{{ route('loginView') }}">Login</a>
            @endif
        </nav>
    </div>
</div>