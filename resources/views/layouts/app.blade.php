<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ config('app.name', 'Laravel') }}</title> -->
    <link rel="icon" href="url('/rent.png')}}" type="image/gif/png">
    <title>Varatia-Vara</title>
    <!-- Title Logo -->

    {{--
    <link rel="icon" href="/rent.png" type="image/gif/png"> --}}
    <link rel="icon" href="url('/rent.png')}}" type="image/gif/png">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/caf4fd03c7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ url('/fontawesome/css/all.min.css') }}">
    <!-- Boostrap 4.0.0 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ url('/bootstrap/dist/css/bootstrap.min.css') }}"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- SB Template --}}
    <link href="{{ asset('sb/css/app.css') }}" rel="stylesheet" />
    <script src="sb/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    {{-- chart.js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
    </script>
</head>

<style>
    .myShadow {
        /* -webkit-box-shadow: 11px 23px 14px 8px rgba(0, 0, 0, 0.67);
        box-shadow: 11px 23px 14px 8px rgba(0, 0, 0, 0.67); */
        /* -webkit-box-shadow: 11px 12px 4px 8px rgba(0, 0, 0, 0.67);
        box-shadow: 11px 12px 4px 8px rgba(0, 0, 0, 0.67); */
        -webkit-box-shadow: 5px 10px 12px 1px rgba(0, 0, 0, 0.47);
        box-shadow: 5px 10px 12px 1px rgba(0, 0, 0, 0.47);
    }

    .myShadow2 {
        /* -webkit-box-shadow: 11px 23px 14px 8px rgba(0, 0, 0, 0.67);
        box-shadow: 11px 23px 14px 8px rgba(0, 0, 0, 0.67); */
        /* -webkit-box-shadow: 11px 12px 4px 8px rgba(0, 0, 0, 0.67);
        box-shadow: 11px 12px 4px 8px rgba(0, 0, 0, 0.67); */
        -webkit-box-shadow: 7px 4px 20px -3px #000000;
        box-shadow: 7px 4px 20px -3px #000000;
    }

    .buttonCustomLogin {
        background-color: #5cb85c;
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
        background-color: #0275d8;
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

    html,
    body {
        /* background-color: #B2BEB5; */
        background-color: #8E44AD;
        /* color: #636b6f; */
        color: gray;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
    }

    .navBar {

        color: white;
    }

    .navBar:hover {

        color: white;
    }

    .icofont {
        padding: 20px;
        font-size: 30px;
        width: 30px;
        text-align: center;
        text-decoration: none;
        border-radius: 50%;
    }

    .icofont:hover {
        opacity: 0.7;
    }

    .icofont-facebook {
        background: #3B5998;
        color: white;
    }

    .Metallic-Silver {
        background: #BCC6CC
    }

    .textColor {
        color: white;
    }

    .form-group.required .control-label:after {
        content: "***";
        color: red;
    }

    .noticeHeader {
        background-color: #cbb8d4;
        color: black;
    }

    .noticeBody {
        background-color: #f3eef5;
        color: black;
    }

    .noticeFooter {
        background-color: #dfdc5b;
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
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
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
                        {{-- <li class="nav-item">
                            <!-- <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a> -->
                            <a class="nav-link" href="{{ route('login') }}"><button type="button"
                                    class="btn buttonCustomLogin">Login</button></a>
                        </li> --}}
                        @if (Route::has('register'))
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}"><button type="button"
                                    class="btn buttonCustomRegister">Register</button></a>
                        </li> --}}
                        @endif
                        @else

                        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Search for..."
                                    aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i
                                        class="fas fa-search"></i></button>
                            </div>
                        </form>
                        <li class="nav-item">
                            <a href="{{ route('message') }}" type="button" class="btn btn-success">Message
                                <span class="badge badge-small"><i class="fas fa-envelope-square fa-2x"
                                        style="color: lightgreen"></i></span>
                                <span style="font-size: 16px;color: #FFFF00 "><sup><b>4</b></sup></span>
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle navBar" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                {{-- Welcome --}}
                                <a class="dropdown-item" href="{{ url('/') }}">
                                    {{ __('Home') }}
                                </a>
                                {{-- Dasboard --}}
                                <a class="dropdown-item" href="{{ route('selectDashboard') }}">
                                    {{ __('Dasboard') }}
                                </a>
                                {{-- Tenant --}}
                                <a class="dropdown-item" href="{{ route('tenant') }}">
                                    {{ __('Tenant Details') }}
                                </a>
                                {{-- Tenant Create --}}
                                <a class="dropdown-item" href="{{ route('tenant.create') }}">
                                    {{ __('Tenant Create') }}
                                </a>
                                {{-- Report --}}
                                <a class="dropdown-item" href="{{ route('report.generate') }}">
                                    {{ __('Report') }}
                                </a>
                                {{-- Notice --}}
                                <a class="dropdown-item" href="{{ route('notice') }}">
                                    {{ __('Notice') }}
                                </a>
                                {{-- Leave Notice --}}
                                <a class="dropdown-item" href="{{ route('notice') }}">
                                    {{ __('Leave Notice') }}
                                </a>
                                {{-- Profile --}}
                                <a class="dropdown-item" href="{{ route('profile') }}">
                                    {{ __('Profile') }}
                                </a>
                                {{-- Divider --}}
                                <div class="dropdown-divider"></div>
                                {{-- Logout --}}
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="sb/js/scripts.js"></script>
</body>

</html>