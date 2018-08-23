
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">
        <title>Blog Template for Bootstrap</title>
        <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/blog/">
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <!-- Custom styles for this template -->
        <link href="{{ url('css/app.css') }}" rel="stylesheet">
    </head>

    <body>

        @include('layout.navbar')

        <div class="blog-header">
            <div class="container">
                <h1 class="blog-title">The Bootstrap Blog</h1>
                <p class="lead blog-description">An example blog template built with Bootstrap.</p>
            </div>
        </div>
    
    @yield('content')
    
    @include('layout.footer')
    </body>
</html>
