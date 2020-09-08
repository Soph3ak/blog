<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog | {{$title}}</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    @yield('style')
    <link href="https://fonts.googleapis.com/css?family=Muli:300" rel="stylesheet">
    <script src="https://use.fontawesome.com/6cc74c7db7.js"></script>
</head>
<body>
    <div class="containerr">
        <div class="header">
            <div class="header-top">
                <h1>CAMBODIA <span>TRIP</span><small>EVERYTHING ABOUT CAMBODIA YOU NEED</small></h1>
                <div class="menu-icon"><i class="fa fa-bars"></i></div>
            </div>
            <div class="nav">
                <ul>
                    <li><a href="{{route('home')}}" class="{{ (request()->is('/')) ? 'active' : '' }}">Home</a></li>
                    <li><a href="{{route('about')}}" class="{{ (request()->is('about')) ? 'active' : '' }}">About</a></li>
                    <li><a href="{{route('contact')}}" class="{{ (request()->is('contact')) ? 'active' : '' }}">Contact</a></li>
                </ul>
            </div>
        </div>
        @yield('content')
        <div class="footer">
            footer
        </div>
    </div>
    @yield('script')
</body>
</html>
