<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Environmentalist') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        .navbar{
            background-color: #7CB9E8 !important;
        }

        .nav-link{
            color: black !important;
            font-size: 20px;            
        }

        a:hover { 
            background-color: none;
            text-decoration: none;
        }

        a:visited { 
            color: black !important;
        }

        body {
            background-image: url("images/bg.png");
            background-size: 100% 700px;
            background-repeat: no-repeat;
        }
    </style>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <img src="/images/logo.png" width="50px" height="50px">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        &nbsp &nbsp &nbsp
                        <li> <a href="{{ route('welcome') }}"> Home &nbsp | &nbsp </a> </li>
                        <li> <a href="{{ route('abouts.index') }}"> About Us &nbsp | &nbsp   </a> </li>
                        <li> <a href="{{ route('events.index') }}"> View Events &nbsp | &nbsp   </a> </li>
                        <li> <a href="{{ route('items.index') }}"> View Items &nbsp | &nbsp  </a> </li>
                        <li> <a href="{{ route('contacts.index') }}"> Contact Us </a> </li>
                    </ul> 

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('volunteers.index') }}">
                                       Go To Admin Panel
                                    </a>
                                    
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                    <ul>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

        <div class="row" style="background-color:#7CB9E8;">
            <div class="col-md-6 col-sm-12" style="float:left; padding-left:100px; padding-top;50px;">
                <br>
                <b> Address: </b> No.20, Pyay Road, Sanchaung, Yangon, Myanmar.
                <br>
                <b> E-mail: </b> helper-office@gmail.com
                <br>
                <b> Phone: </b> +959 779 921 001

            </div>
            <div class="col-md-1 col-sm-12" style="float:left;"></div>
            <div class="col-md-5 col-sm-12" style="float:left; padding-top:10px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.416682855847!2d96.13330701434573!3d16.80567242374536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1eb45fceefc75%3A0xe212bff0f1a5c596!2sGusto%20College!5e0!3m2!1sen!2smm!4v1568437162264!5m2!1sen!2smm" width="500" height="100" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
        @stack("script")
</body>
</html>
