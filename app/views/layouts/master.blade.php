<html>

    <head>

        <!-- Title -->
        <title>Castel Domain Manager</title>

        <!-- Meta Characters -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Jquery -->
        {{ HTML::script('js/jquery.1.10.2.js'); }}

        <!-- Bootstrap Core CSS -->
        {{ HTML::style('css/bootstrap.min.css'); }}
        {{ HTML::style('css/freelancer.css'); }}

        <!-- Fonts -->
        {{ HTML::style('freelancer/font-awesome/css/font-awesome.min.css'); }}
        {{ HTML::style('http://fonts.googleapis.com/css?family=Montserrat:400,700'); }}

    </head>

    <body>

        <div class="container">

            <h1>Castel Domain Manager</h1>
            @if(Auth::check())
                <a class="btn btn-mini btn-warning text-right" href="{{URL::action('UserController@destroy')}}">Logout</a>
            @endif

            <p>Yes we have a small application to check our domain names automatically...</p>

            @yield('content')

        </div>

        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

    </body>

</html>