<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Varatia-Vara(ভাড়াটিয়া-ভাড়া)</title>
    <!-- Title Logo -->
    <link rel="icon" href="/rent.png" type="image/gif/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/caf4fd03c7.js" crossorigin="anonymous"></script>
    <!-- Boostrap 4.0.0 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{url('/bootstrap/dist/css/bootstrap.min.css')}}"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Styles -->
    <style>
        html,
        body {
            /* background-color: #B2BEB5; */
            /* background-color: #a49ca8; */
            /* background-color: #eefcff; */
            background-color: #8E44AD;
            /* color: #636b6f; */
            color: #FDFEFE;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
            margin: 5px;
            -webkit-box-shadow: 5px 10px 12px 1px rgba(0, 0, 0, 0.47);
            box-shadow: 5px 10px 12px 1px rgba(0, 0, 0, 0.47);
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
            /* margin-bottom: 40px; */
        }

        .buttonCustomAbout {
            background-color: #F39C12;
            display: inline-block;
            transition: 0.5s;
            color: white;
            font-size: 15px;
            font-weight: bold;
            -webkit-box-shadow: 5px 10px 12px 1px rgba(0, 0, 0, 0.47);
            box-shadow: 5px 10px 12px 1px rgba(0, 0, 0, 0.47);
        }

        .buttonCustomAbout:hover {
            background-color: #58D68D;
            color: white;
        }

        .buttonCustomTutorial {
            background-color: #F08080;
            display: inline-block;
            transition: 0.5s;
            color: white;
            font-size: 15px;
            font-weight: bold;
            -webkit-box-shadow: 5px 10px 12px 1px rgba(0, 0, 0, 0.47);
            box-shadow: 5px 10px 12px 1px rgba(0, 0, 0, 0.47);
        }

        .buttonCustomTutorial:hover {
            background-color: #58D68D;
            color: white;
        }


        .buttonCustomLogin {
            background-color: #5cb85c;
            display: inline-block;
            transition: 0.5s;
            color: white;
            font-size: 15px;
            font-weight: bold;
            -webkit-box-shadow: 5px 10px 12px 1px rgba(0, 0, 0, 0.47);
            box-shadow: 5px 10px 12px 1px rgba(0, 0, 0, 0.47);
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
            font-size: 20px;
            font-weight: bold;
            -webkit-box-shadow: 5px 10px 12px 1px rgba(0, 0, 0, 0.47);
            box-shadow: 5px 10px 12px 1px rgba(0, 0, 0, 0.47);
        }

        .buttonCustomRegister:hover {
            background-color: #85C1E9;
            color: white;
        }

        .buttonCustomContact {
            background-color: #40E0D0;
            display: inline-block;
            transition: 0.5s;
            color: white;
            font-size: 15px;
            font-weight: bold;
            -webkit-box-shadow: 5px 10px 12px 1px rgba(0, 0, 0, 0.47);
            box-shadow: 5px 10px 12px 1px rgba(0, 0, 0, 0.47);
        }

        .buttonCustomContact:hover {
            background-color: #CCCCFF;
            color: white;
        }

        .buttonCustomDashboard {
            background-color: #1ABC9C;
            display: inline-block;
            transition: 0.5s;
            color: white;
            font-size: 15px;
            font-weight: bold;
            -webkit-box-shadow: 5px 10px 12px 1px rgba(0, 0, 0, 0.47);
            box-shadow: 5px 10px 12px 1px rgba(0, 0, 0, 0.47);
        }

        .buttonCustomHome:hover {
            background-color: #BB8FCE;
            color: white;
        }

        .buttonCustomLogout {
            background-color: #C0392B;
            display: inline-block;
            transition: 0.5s;
            color: white;
            font-size: 15px;
            font-weight: bold;
            -webkit-box-shadow: 5px 10px 12px 1px rgba(0, 0, 0, 0.47);
            box-shadow: 5px 10px 12px 1px rgba(0, 0, 0, 0.47);
        }

        .buttonCustomLogout:hover {
            background-color: #F1948A;
            color: white;
        }

        .imgShadow {
            width: 200px;
            height: 200px;
            border: 2px solid #fff;
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
    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <!-- <a href="{{ url('/home') }}">Home</a> -->
            <a href="{{ route('login') }}"><button type="button"
                    class="btn buttonCustomDashboard">Dashboard</button></a>
            {{-- logout --}}
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                <button type="button" class="btn buttonCustomLogout">Logut</button>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            @else
            <a href="{{ route('login') }}"><button type="button" class="btn buttonCustomLogin">Login</button></a>

            @if (Route::has('register'))
            {{-- <a href="{{ route('register') }}"><button type="button"
                    class="btn buttonCustomRegister">Register</button></a> --}}
            @endif
            @endauth
        </div>
        @endif

        <div class="content">
            <div class="container">
                <img class="imgShadow" src="{{url('/welcome3.png')}}" alt="" width="200" height="200">
            </div>
            <div class="text-center title m-b-md mt-4">
                <h1 class="">ভাড়াটিয়া-ভাড়া<h1>
            </div>


            <div class="links">
                <a href="{{ url('/about') }}"><button type="button" class="btn buttonCustomAbout">About
                    </button></a>
                <a href="{{ url('/tutorial')}}"><button type="button"
                        class="btn buttonCustomTutorial">Tutorial</button></a>
                <a href="{{ url('/contact')}}"><button type="button" class="btn buttonCustomContact">Contact
                    </button></a>
            </div>
            <!-- Footer -->
            <div class="contianer-fluid fixed-bottom ">
                <!-- Copyright -->
                <div class="row justify-content-center footer text-center p-1"
                    style="background-color: #007bff; color:white;">
                    <div class="offset-md-2 col-md-8 col-sm-10 col-10">
                        © 2021 Copyright:
                        <a class="text-reset fw-bold" style="color: white" href="http://www.shuvoafjalme.cf/">Shuvo
                            Afjal</a>
                    </div>
                    <div class="col-md-2 col-sm-2 col-2">
                        <a class="text-reset fw-bold" style="color: white" href="{{url('version')}}">v:1.0</a>
                    </div>

                </div>
                <!-- Copyright -->
            </div>
        </div>

        <!-- js -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
</body>

</html>