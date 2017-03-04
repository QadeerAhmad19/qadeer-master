<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Work Finder</title>

    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Admin Dashboard</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/') }}">Home</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li><a href="{{ url('/auth/login') }}">Login</a></li>
                    <li><a href="{{ url('/auth/register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

@yield('content')

<!-- Scripts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>--}}
<script src="https://js.pusher.com/4.0/pusher.min.js"></script>
<script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('a4cf9788f64a498f7d68', {
        cluster: 'ap2',
        encrypted: true
    });
    var channel = pusher.subscribe('my-channel');
    channel.bind('App\\Events\\BroadCastChat', addMessage);

    function addMessage(data) {
        alert(data);
        var listItem = $("<li class='list-group-item'></li>");
        listItem.html(data);
        $('#messages').prepend(listItem);
    }
</script>
    {{--//instantiate a Pusher object with our Credential's key--}}
{{--//--}}
{{--//    var pusher = new Pusher('a4cf9788f64a498f7d68', {--}}
{{--//       cluster:''--}}
{{--//        encrypted: true--}}
{{--//    });--}}
{{--//--}}
{{--//    //Subscribe to the channel we specified in our Laravel Event--}}
{{--//    var channel = pusher.subscribe('broad-cast');--}}
{{--//--}}
{{--//    //Bind a function to a Event (the full Laravel class)--}}
{{--//    channel.bind('App\\Events\\ChatEventBroadCast', addMessage);--}}
{{--//--}}
{{--//    function addMessage(data) {--}}
{{--//        var listItem = $("<li class='list-group-item'></li>");--}}
{{--//        listItem.html(data.message);--}}
{{--//        $('#messages').prepend(listItem);--}}
{{--//    }--}}
{{--//</script>--}}
</body>
</html>
