<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }

        img{
            width: 200px;
            height: 550px;
        }
    </style>
</head>
<body style="background-color: #252525">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    {{-- header --}}
        <div id="header">
            <nav class="navbar navbar-expand-lg navbar-dark d-flex style="background-color: #252525;>
                <a href="/">
                    <div class="image">
                        <img src="{{ asset('assets/logo-movielist.png') }}" style="width: 50px; height: 50px;" alt="">
                    </div>
                </a>
                <a class="navbar-brand" href="/" style="justify-content: left;"><span style="color: red;">Movie</span>List</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse d-flex justify-content-end" data-toggle="collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="/">Home</a>
                    <a class="nav-item nav-link" href="movie">Movies</a>
                    <a class="nav-item nav-link" href="actor">Actors</a>
                </div>
                </div>
                <div class="d-flex justify-content-evenly">
                    <a class="btn m-2" style="color: white; background-color: red" href="register" role="button">Register</a>
                    <a class="btn btn-outline m-2" href="login" style="color: white; border-color: red" role="button">Login</a>
                </div>
            </nav>
        </div>

    <div>
        <form action="{{route('userLogin')}}" method="POST">
            @csrf
            <input type="email" name="email" placeholder="Enter your email">
            <input type="password" name="password" placeholder="Enter your password">
            <button type="submit">Login</button>
        </form>
    </div>



    {{-- footer --}}
    <br>
    <div class="footer-container" style="display: flex; justify-content: center;">
        <a href="/">
            <div class="image">
                <img src="{{ asset('assets/logo-movielist.png') }}" style="width: 50px; height: 50px;" alt="">
            </div>
        </a>
        <h1 style="display: flex">
            <span style="color: red">Movie</span><span style="color: white">List</span>
        </h1>
    </div>
    <br>
    <h7 style="display: flex; justify-content: center">
        <span style="color: red;">Movie</span>
        <span style="color: white">List is a Website that contains list of movie</span>
    </h7>
    <br>

    <div class="socmed-container" style="display: flex; justify-content: center; align-item: center;">
        {{-- twitter --}}
        <div class="image">
            <img src="{{asset('assets/twitter-fill.png')}}" style="width: 35px; height: 35px;" alt="">
        </div>

        {{-- ig --}}
        <div class="image" style="margin-left: 10px">
            <img src="{{asset('assets/instagram-fill.png')}}" style="width: 35px; height: 35px;" alt="">
        </div>

        {{-- facebook --}}
        <div class="image" style="margin-left: 10px">
            <img src="{{asset('assets/facebook-circle-fill.png')}}" style="width: 35px; height: 35px;" alt="">
        </div>

        {{-- youtube --}}
        <div class="image" style="margin-left: 10px">
            <img src="{{asset('assets/youtube-fill.png')}}" style="width: 35px; height: 35px;" alt="">
        </div>
    </div>
    <br>

    <h7 style="color: white; display: flex; justify-content: center">Privacy Policy | Terms of Service | Contact Us | About Us</h7>
    <br>

    <h7 style="color: white; display: flex; justify-content: center">Copyright © 2021.
        <span style="color: red; margin-left: 4px"> Movie</span>List All Rights Reserved
    </h7>
</body>
</html>
