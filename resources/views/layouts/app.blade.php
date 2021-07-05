<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ config('app.name', 'Laravel') }}</title> -->
    <title>Varatia-Vara(ভাড়াটিয়া-ভাড়া)</title>
        <!-- Title Logo -->
    <link rel="icon" href="/rent.png" type="image/gif/png">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
            <!-- Font Awesome -->
            <script src="https://kit.fontawesome.com/caf4fd03c7.js" crossorigin="anonymous"></script>
            <!-- Boostrap 4.0.0 -->
            <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
            <link rel="stylesheet" type="text/css" href="{{url('/bootstrap/dist/css/bootstrap.min.css')}}" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            {{-- Icofont --}}
            <link rel="stylesheet" href="{{url('/icofont/icofont.min.css')}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
            .buttonCustomLogin {
                background-color:#5cb85c;
                display: inline-block;
                transition: 0.5s;
                color: white;
                font-size: 12px;
                font-weight: bold;
            }

            .buttonCustomLogin:hover {
                background-color: #58D68D;
                color: white;
                }

                .buttonCustomRegister {
                background-color:#0275d8;
                display: inline-block;
                transition: 0.5s;
                color: white;
                font-size: 12px;
                font-weight: bold;
            }

            .buttonCustomRegister:hover {
                background-color: #58D68D;
                color: white;
                }

                html, body {
                background-color: #8E44AD;
                /* color: #636b6f; */
                color: gray;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .navBar{
                
                color:white;
            }
            .navBar:hover{
                
                color:white;
            }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-primary shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <!-- {{ config('app.name', 'Laravel') }} -->
                    <img src="/navbarBrand.png" width="30" height="30" class="d-inline-block align-top" alt="">
                    Varatia-Vara(ভাড়াটিয়া-ভাড়া)
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <!-- <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a> -->
                                <a class="nav-link" href="{{ route('login') }}"><button type="button" class="btn buttonCustomLogin">Login</button></a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}"><button type="button" class="btn buttonCustomRegister">Register</button></a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a  id="navbarDropdown" class="nav-link dropdown-toggle navBar" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    {{-- Welcome --}}
                                    <a class="dropdown-item" href="{{ url('/') }}">
                                        {{ __('Home') }}
                                       </a>
                                    {{-- Dasboard --}}
                                    <a class="dropdown-item" href="{{ route('home') }}">
                                     {{ __('Dasboard') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

</div>
</body>
</html>
