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
    <link rel="icon" href="/rent.png" type="image/gif/png">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/caf4fd03c7.js" crossorigin="anonymous"></script>
    {{-- version 4 --}}
    <link rel="stylesheet" href="{{ url('/fontawesome/css/all.min.css') }}">
    {{-- version 6 --}}
    <link rel="stylesheet" href="{{ url('/fontawesome6/css/all.min.css') }}">
    <!-- Boostrap 4.0.0 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ url('/bootstrap/dist/css/bootstrap.min.css') }}"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- SB Template --}}
    {{--
    <link href="{{ asset('/sb/css/app.css') }}" rel="stylesheet" /> --}}
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
        /* background-color: #8E44AD; */
        background-color: #c186df;
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

    .textColor2 {
        color: #636b6f;
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

    .imgShadow {
        width: 200px;
        height: 200px;
        border: 1px solid #fff;
        /* -moz-box-shadow: 7px 7px 4px #ccc;
            -webkit-box-shadow: 7px 7px 4px #ccc;
            box-shadow: 7px 7px 4px #ccc; */
        /* -webkit-box-shadow: 11px 12px 4px 8px rgba(0, 0, 0, 0.67);
            -moz-box-shadow: 11px 12px 4px 8px rgba(0, 0, 0, 0.67);
            box-shadow: 11px 12px 4px 8px rgba(0, 0, 0, 0.67); */
        -webkit-box-shadow: 5px 10px 12px 1px rgba(0, 0, 0, 0.47);
        -moz-box-shadow: 11px 12px 4px 8px rgba(0, 0, 0, 0.67);
        box-shadow: 5px 10px 12px 1px rgba(0, 0, 0, 0.47);
        -moz-border-radius: 20px;
        -webkit-border-radius: 20px;
        border-radius: 20px;
    }

    /* Nested Dr CSS */
    .dropdown-submenu {
        position: relative;
    }

    .dropdown-submenu>.dropdown-menu {
        top: 0;
        right: 100%;
        margin-top: -6px;
        margin-left: -300px;
        -webkit-border-radius: 0 6px 6px 6px;
        -moz-border-radius: 0 6px 6px;
        border-radius: 0 6px 6px 6px;
    }

    .dropdown-submenu:hover>.dropdown-menu {
        display: block;
    }

    .dropdown-submenu>a:after {
        display: block;
        /* content: " "; */
        float: right;
        width: 0;
        height: 0;
        border-color: transparent;
        border-style: solid;
        border-width: 5px 0 5px 5px;
        border-left-color: #ccc;
        margin-top: 5px;
        margin-right: -10px;
    }

    .dropdown-submenu:hover>a:after {
        border-left-color: #fff;
    }

    .dropdown-submenu.pull-left {
        float: none;
    }

    .dropdown-submenu.pull-left>.dropdown-menu {
        left: -100%;
        margin-left: 10px;
        -webkit-border-radius: 6px 0 6px 6px;
        -moz-border-radius: 6px 0 6px 6px;
        border-radius: 6px 0 6px 6px;
    }

    /* Vertical Line Css */
    .vl {
        border-left: 3px solid white;
        height: 500px;
        border-radius: 15px;
    }

    .card-border {
        border-color: #ea0164;
    }

    .alert-custom {
        background-color: rgb(27, 151, 151);
        color: white;
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

                        <div class="nav-item dropdown">
                            {{-- <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu1"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown
                            </button> --}}
                            {{-- Super Admin --}}
                            @if ( Auth::user()->role_id == 1)
                            <a id="navbarDropdown dropdownMenu1" class="nav-link dropdown-toggle navBar" href="#"
                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                                <span style="background-color: #5cb85c"><small>{{ __('S.Admin') }}</small></span>
                            </a>

                            <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                                {{-- Home --}}
                                <a class="dropdown-item" href="{{ url('/') }}">

                                    <i class="fa-solid fa-house-user fa-sm " style="color: Dodgerblue;"></i>
                                    {{ __('Home') }}
                                </a>
                                {{-- Account Open --}}
                                <a class="dropdown-item" href="{{ route('register.showReq') }}">
                                    @php
                                    $counts = DB::table('register_requests')->count();
                                    @endphp
                                    <i class="fa-solid fa-door-open fa-sm " style="color: Dodgerblue;"></i>

                                    {{ __('Account Open') }}
                                    <i class="fas fa-arrow-right"></i><span style="color: #0000FF">
                                        <b>{{ $counts }}</b></span>
                                </a>

                                {{-- Dasboard --}}
                                <a class="dropdown-item" href="{{ route('selectDashboard') }}">

                                    <i class="fa-solid fa-chart-line fa-sm " style="color: Dodgerblue;"></i>
                                    {{ __('Dasboard') }}
                                </a>

                                {{-- Nested Drop --}}
                                {{-- Bank Details --}}
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item " tabindex="-1" href="{{ url('bank') }}">

                                        <i class="fa-solid  fa-vault fa-sm " style="color: Dodgerblue;"></i>
                                        {{ __('Bank') }}
                                    </a>
                                    <ul class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ route('bankAccount.withdraw') }}">
                                            <i class="fa-solid fa-money-bill-transfer fa-sm "
                                                style="color: tomato;"></i>
                                            {{ __('Withdraw') }}
                                        </a>
                                        <a class="dropdown-item" href="{{ route('bankAccount.deposit') }}">
                                            <i class="fa-solid fa-money-bill-transfer fa-sm "
                                                style="color: Dodgerblue;"></i>
                                            {{ __('Deposit') }}
                                        </a>
                                        {{-- <a class="dropdown-item" href="{{ url('bank/create') }}">
                                            {{ __('Add A/C') }}
                                        </a> --}}
                                        <a class="dropdown-item" href="{{ route('bankAccount.Delete.all') }}">
                                            <i class="fa-solid fa-dumpster fa-sm " style="color: red;"></i>
                                            {{ __('Remove A/C') }}
                                        </a>
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item" href="">
                                                <i class="fa-solid fa-file-circle-plus fa-sm "
                                                    style="color: #42ba96;"></i>
                                                {{ __('Add A/C') }}
                                            </a>
                                            <ul class="dropdown-menu">
                                                <a class="dropdown-item" href="{{ url('bank/create') }}">
                                                    <i class="fa-solid fa-credit-card fa-sm "
                                                        style="color: #42ba96;"></i>
                                                    {{ __('Bank A/C') }}
                                                </a>
                                                {{-- <li class="dropdown-submenu"><a class="dropdown-item"
                                                        href="#">another
                                                        level</a>
                                                    <ul class="dropdown-menu">
                                                        <li class="dropdown-item"><a href="#">4th level</a></li>
                                                        <li class="dropdown-item"><a href="#">4th level</a></li>
                                                        <li class="dropdown-item"><a href="#">4th level</a></li>
                                                    </ul>
                                                </li> --}}
                                                <a class="dropdown-item" href="{{ url('banks/mobileBanks') }}">
                                                    <i class="fa-solid fa-mobile-screen-button fa-sm "
                                                        style="color: #42ba96;"></i>
                                                    {{ __('Mobile A/C') }}
                                                </a>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                {{-- Tenant --}}
                                <a class="dropdown-item" href="{{ route('tenant') }}">

                                    <i class="fa-solid fa-people-group fa-sm " style="color: Dodgerblue;"></i>
                                    {{ __('Tenant Details') }}
                                </a>
                                {{-- Tenant Create --}}
                                <a class="dropdown-item" href="{{ route('tenant.create') }}">

                                    <i class="fa-solid fa-person-circle-plus fa-sm " style="color: Dodgerblue;"></i>
                                    {{ __('Add Tenant') }}
                                </a>
                                {{-- Report --}}
                                <a class="dropdown-item" href="{{ route('report.generate') }}">

                                    <i class="fa-solid fa-file-lines fa-sm " style="color: Dodgerblue;"></i>
                                    {{ __('Report') }}
                                </a>
                                {{-- Notice --}}
                                <a class="dropdown-item" href="{{ url('notice') }}">

                                    <i class="fa-solid fa-bullhorn fa-sm " style="color: Dodgerblue;"></i>
                                    {{ __('Notice') }}
                                </a>
                                {{-- Leave Notice --}}
                                @php
                                $counts = DB::table('leave_notices')->count();
                                @endphp
                                <a class="dropdown-item" href="{{ route('leave.notice') }}">
                                    <i class="fa-solid fa-bell fa-sm " style="color: Dodgerblue;"></i> {{ __('Leave
                                    Notice') }}<i class="fas fa-arrow-right"></i><span style="color: #0000FF"> <b>{{
                                            $counts }}</b></span>
                                </a>
                                {{-- Profile --}}
                                <a class="dropdown-item" href="{{ route('profile') }}">

                                    <i class="fa-solid fa-user-pen fa-sm " style="color: Dodgerblue;"></i>
                                    {{ __('Profile') }}
                                </a>
                                {{-- Divider --}}
                                <div class="dropdown-divider"></div>
                                {{-- Logout --}}
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();                                                                                                                                                                                                      document.getElementById('logout-form').submit();">

                                    <i class="fa-solid fa-right-from-bracket fa-sm " style="color: tomato;"></i>
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </ul>
                            @else
                            {{-- Admin --}}
                            <a id="navbarDropdown dropdownMenu1" class="nav-link dropdown-toggle navBar" href="#"
                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                                <span style="background-color: #5cb85c"><small>{{ __('Admin') }}</small></span>
                            </a>
                            <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                                <a class="dropdown-item" href="{{ url('/') }}">

                                    <i class="fa-solid fa-house-user fa-sm " style="color: Dodgerblue;"></i>
                                    {{ __('Home') }}
                                </a>

                                {{-- Dasboard --}}
                                <a class="dropdown-item" href="{{ route('selectDashboard') }}">

                                    <i class="fa-solid fa-chart-line fa-sm " style="color: Dodgerblue;"></i>
                                    {{ __('Dasboard') }}
                                </a>

                                {{-- Nested Drop --}}
                                {{-- Bank Details --}}
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item " tabindex="-1" href="{{ url('bank') }}">

                                        <i class="fa-solid  fa-vault fa-sm " style="color: Dodgerblue;"></i>
                                        {{ __('Bank') }}
                                    </a>
                                    <ul class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ route('bankAccount.withdraw') }}">
                                            <i class="fa-solid fa-money-bill-transfer fa-sm "
                                                style="color: tomato;"></i>
                                            {{ __('Withdraw') }}
                                        </a>
                                        <a class="dropdown-item" href="{{ route('bankAccount.deposit') }}">
                                            <i class="fa-solid fa-money-bill-transfer fa-sm "
                                                style="color: Dodgerblue;"></i>
                                            {{ __('Deposit') }}
                                        </a>
                                        {{-- <a class="dropdown-item" href="{{ url('bank/create') }}">
                                            {{ __('Add A/C') }}
                                        </a> --}}
                                        <a class="dropdown-item" href="{{ route('bankAccount.Delete.all') }}">
                                            <i class="fa-solid fa-dumpster fa-sm " style="color: red;"></i>
                                            {{ __('Remove A/C') }}
                                        </a>
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item" href="">
                                                <i class="fa-solid fa-file-circle-plus fa-sm "
                                                    style="color: #42ba96;"></i>
                                                {{ __('Add A/C') }}
                                            </a>
                                            <ul class="dropdown-menu">
                                                <a class="dropdown-item" href="{{ url('bank/create') }}">
                                                    <i class="fa-solid fa-credit-card fa-sm "
                                                        style="color: #42ba96;"></i>
                                                    {{ __('Bank A/C') }}
                                                </a>
                                                {{-- <li class="dropdown-submenu"><a class="dropdown-item"
                                                        href="#">another
                                                        level</a>
                                                    <ul class="dropdown-menu">
                                                        <li class="dropdown-item"><a href="#">4th level</a></li>
                                                        <li class="dropdown-item"><a href="#">4th level</a></li>
                                                        <li class="dropdown-item"><a href="#">4th level</a></li>
                                                    </ul>
                                                </li> --}}
                                                <a class="dropdown-item" href="{{ url('banks/mobileBanks') }}">
                                                    <i class="fa-solid fa-mobile-screen-button fa-sm "
                                                        style="color: #42ba96;"></i>
                                                    {{ __('Mobile A/C') }}
                                                </a>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                {{-- Tenant --}}
                                <a class="dropdown-item" href="{{ route('tenant') }}">

                                    <i class="fa-solid fa-people-group fa-sm " style="color: Dodgerblue;"></i>
                                    {{ __('Tenant Details') }}
                                </a>
                                {{-- Tenant Create --}}
                                <a class="dropdown-item" href="{{ route('tenant.create') }}">

                                    <i class="fa-solid fa-person-circle-plus fa-sm " style="color: Dodgerblue;"></i>
                                    {{ __('Add Tenant') }}
                                </a>
                                {{-- Report --}}
                                <a class="dropdown-item" href="{{ route('report.generate') }}">

                                    <i class="fa-solid fa-file-lines fa-sm " style="color: Dodgerblue;"></i>
                                    {{ __('Report') }}
                                </a>
                                {{-- Notice --}}
                                <a class="dropdown-item" href="{{ url('notice') }}">

                                    <i class="fa-solid fa-bullhorn fa-sm " style="color: Dodgerblue;"></i>
                                    {{ __('Notice') }}
                                </a>
                                {{-- Leave Notice --}}
                                @php
                                $counts = DB::table('leave_notices')->count();
                                @endphp
                                <a class="dropdown-item" href="{{ route('leave.notice') }}">
                                    <i class="fa-solid fa-bell fa-sm " style="color: Dodgerblue;"></i> {{ __('Leave
                                    Notice') }}<i class="fas fa-arrow-right"></i><span style="color: #0000FF"> <b>{{
                                            $counts }}</b></span>
                                </a>
                                {{-- Profile --}}
                                <a class="dropdown-item" href="{{ route('profile') }}">

                                    <i class="fa-solid fa-user-pen fa-sm " style="color: Dodgerblue;"></i>
                                    {{ __('Profile') }}
                                </a>
                                {{-- Divider --}}
                                <div class="dropdown-divider"></div>
                                {{-- Logout --}}
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();                                                                                                                                                                                                      document.getElementById('logout-form').submit();">

                                    <i class="fa-solid fa-right-from-bracket fa-sm " style="color: tomato;"></i>
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </ul>
                            @endif
                        </div>
                </div>
                {{-- End --}}
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

    {{-- Nested Dropdown Script --}}

</body>

</html>