<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        img {
            width: 200px;
            height: 550px;
        }
    </style>
</head>

<body style="background-color: black">
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
            <a class="navbar-brand" href="/" style="justify-content: left;"><span
                    style="color: red;">Movie</span>List</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-end" data-toggle="collapse"
                id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="/">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="movie">Movies</a>
                    <a class="nav-item nav-link" href="actor">Actors</a>
                    @if (auth()->user()->role == 'user')
                        <a class="nav-item nav-link" href="">My Watchlist</a>
                    @endif
                </div>
            </div>
            <div class="d-flex justify-content-evenly">
                <a class="btn m-2" style="color: white; background-color: red" href="register"
                    role="button">Register</a>
                <a class="btn btn-outline m-2" href="login" style="color: white; border-color: red"
                    role="button">Login</a>
            </div>
        </nav>
    </div>

    {{-- carousel --}}
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('assets/background/matrix_background.jpeg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-flex align d-md-block">
                        <div class="genre-year" style="justify-content: center;">
                            <h6>Action | 2021</h6>
                        </div>
                        <h2>The Matrix Resurrection</h2>
                        <p style="background-color: black">Neo (Keanu Reeves) believes that Morpheus (Laurence Fishburne), an elusive figure considered to be the most dangerous man alive, can answer his question</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('assets/background/pacificRim_background.jpg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="genre-year" style="justify-content: center;">
                            <h6>Action | 2013</h6>
                        </div>
                        <h2>Pacific Rim</h2>
                        <p style="background-color: black">Long ago, legions of monstrous creatures called Kaiju arose from the sea, bringing with them all-consuming war. To fight the Kaiju, mankind developed giant robots called Jaegers, designed to be piloted by two humans locked together in a neural bridge. However, even the Jaegers are not enough to defeat the Kaiju, and humanity is on the verge of defeat. Mankinds last hope now lies with a washed-up ex-pilot (Charlie Hunnam), an untested trainee (Rinko Kikuchi) and an old, obsolete Jaeger.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('assets/background/hathaway_background.jpg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="genre-year" style="justify-content: center;">
                            <h6>Animated | 2021</h6>
                        </div>
                        <h2>Hathaway's Flash</h2>
                        <p style="background-color: black">After Char's rebellion, Hathaway Noa leads an insurgency against Earth Federation, but meeting an enemy officer and a mysterious woman alters his fate.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    {{-- popular section --}}
        <br>
        <div class="pop-container" style="display: flex; margin-left: 5px; align-content: center;">
            <div class="image">
                <img src="{{ asset('assets/fire-fill.png') }}" style="width: 20px; height: 20px;" alt="">
            </div>
            <div class="text" style="color: white; margin-left: 5px">
                <h4 style="">Popular</h4>
            </div>
        </div>
        <hr style="background-color: #3f3f3f">

    {{-- card --}}
    <div class="card-container" style="display: flex; justify-content: left;">
        @foreach ($movies as $film)

            <div href="#"class="card" style="width: 280px; height: 400px; background-color: black; color: white;">
                <img class="card-img-top" style="width: 250px; height: 350px; margin-right: 5px" src="{{asset('assets/thumbnail/'.$film->image_thumbnail)}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$film->title}}</h5>
                    <p class="card-text">{{$film->production_year}}</p>
                </div>
            </div>
        @endforeach
    </div>

    {{-- show --}}
        <br>
        <br>
        <div class="show-container" style="display: flex; margin-left: 5px;">
            <div class="image">
                <img src="{{ asset('assets/film-fill.png') }}" style="width: 20px; height: 20px;" alt="">
            </div>
            <div class="text" style="color: white; margin-left: 5px">
                <h4 style="">Show</h4>
            </div>

            <div class="search-bar" style="display:flex; margin-left: 1000px;">
                <div class="input-group input-group-sm" style="width: 150px">
                    <input type="text" name="movie-search" class="form-control float-right" placeholder="Search movie.." wire:keydown.enter="submit">
                </div>

            </div>
            {{-- <div class="search-bar" style="display: flex; justify-content: end">
                <form class="form-inline my-2 my-lg-0 d-flex justify-content-end">
                    <input class="form-control mr-sm-2 d-flex justify-content-end" type="search" placeholder="Search movie.." aria-label="Search">
                    <button class="btn btn-outline-success d-flex justify-content-end my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div> --}}
        </div>
        @if (auth()->user()->role == 'admin')
        <div class="add-movie">
            <button class="add-movie-btn">+ Add Movie</button>
        </div>
        @endif
        <div class="show-container" style="display: flex">
            @foreach ($movies as $film)

                <div href="#"class="card" style="width: 280px; height: 400px; background-color: black; color: white;">
                    <img class="card-img-top" style="width: 250px; height: 350px; margin-right: 5px" src="{{asset('assets/thumbnail/'.$film->image_thumbnail)}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$film->title}}</h5>
                        <p class="card-text">{{$film->production_year}}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <br>
        <hr style="background-color: #3f3f3f">

    {{-- footer --}}
        <div class="footer-color" style="background-color: #252525; width: ;">
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
                    <img src="{{ asset('assets/twitter-fill.png') }}" style="width: 35px; height: 35px;" alt="">
                </div>

                {{-- ig --}}
                <a href="https://www.instagram.com/nevan_marshelim/?hl=id">
                    <div class="image" style="margin-left: 10px">
                        <img src="{{ asset('assets/instagram-fill.png') }}" style="width: 35px; height: 35px;"
                            alt="">
                    </div>
                </a>

                {{-- facebook --}}
                <div class="image" style="margin-left: 10px">
                    <img src="{{ asset('assets/facebook-circle-fill.png') }}" style="width: 35px; height: 35px;"
                        alt="">
                </div>

                {{-- youtube --}}
                <a href="https://www.youtube.com/">
                    <div class="image" style="margin-left: 10px" href="youtube.com">
                        <img src="{{ asset('assets/youtube-fill.png') }}" style="width: 35px; height: 35px;" alt="">
                    </div>
                </a>
            </div>
            <br>

            <h7 style="color: white; display: flex; justify-content: center">Privacy Policy | Terms of Service | Contact Us
                | About Us</h7>
            <br>

            <h7 style="color: white; display: flex; justify-content: center">Copyright © 2021.
                <span style="color: red; margin-left: 4px"> Movie</span>List All Rights Reserved
            </h7>
        </div>

</body>

</html>
