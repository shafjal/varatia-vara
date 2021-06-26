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
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
        <link rel="stylesheet" type="text/css" href="{{url('/bootstrap/dist/css/bootstrap.min.css')}}" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #58D68D;
                color: #636b6f;
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
            }

            .links > a {
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
            }
            .buttonCustom {
                background-color:#F39C12;
                display: inline-block;
                transition: 0.5s;
                color: white;
                font-size: 20px;
                font-weight: bold;
            }

            .buttonCustom:hover {
                background-color: #D68910;
                color: white;
                }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}"><button type="button" class="btn btn-success">Login</button></a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"><button type="button" class="btn btn-primary">Register</button></a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="container">
                <img src="/welcome3.png" alt="Girl in a jacket" width="200" height="200">
                </div>
                <div class=" title m-b-md">
                    ভাড়াটিয়া-ভাড়া
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs"><button type="button" class="btn buttonCustom">About</button></a>
                    <a href="https://laravel.com/docs"><button type="button" class="btn btn-info">Tutorial</button></a>
                    <!-- <a href="https://laracasts.com">Laracasts</a> -->
                    <!-- <a href="https://laravel-news.com">News</a> -->
                    <!-- <a href="https://blog.laravel.com">Blog</a> -->
                    <!-- <a href="https://nova.laravel.com">Nova</a> -->
                    <!-- <a href="https://forge.laravel.com">Forge</a> -->
                    <!-- <a href="https://vapor.laravel.com">Vapor</a> -->
                    <!-- <a href="https://github.com/laravel/laravel">GitHub</a> -->
                </div>
            </div>
        </div>

        <!-- js -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
