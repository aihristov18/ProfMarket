<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
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
        </style>
    </head>
<!--    <body>-->
<!--        <div class="flex-center position-ref full-height">-->
<!--            @if (Route::has('login'))-->
<!--                <div class="top-right links">-->
<!--                    @auth-->
<!--                        <a href="{{ url('/home') }}">Home</a>-->
<!--                    @else-->
<!--                        <a href="{{ route('login') }}">Login</a>-->
<!---->
<!--                        @if (Route::has('register'))-->
<!--                            <a href="{{ route('register') }}">Register</a>-->
<!--                        @endif-->
<!--                    @endauth-->
<!--                </div>-->
<!--            @endif-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </body>-->
    <body onload="fadeIn()">

    <header>
        <div class="overlay"></div>
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="video_noaudio.mp4" type="video/mp4">
        </video>
        <div class="container ">
            <div class="d-flex ">

                <div class="row">
                    <p></p>
                </div> <!-- p stand for padding-->
                <!--PADDING TOP IN A NUTSHELL -->
                <div class="row">
                    <div class="col text-center"><img src="logo.png" style="height: 25%;width: 25%"></div>
                    <div class="col-6 text-center">
                        <hr>
                        @if (Route::has('login'))
                        <div class="top-right links">
                            @auth
                            <a href="{{ url('/home') }}">Home</a>
                            @else
                            <a href="{{ route('login') }}">Login</a>

                            @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                            @endif
                            @endauth
                        </div>
                        @endif
<!--                        <a href="#" class="display-1 menuLink">POST OFFER&nbsp;&nbsp;&nbsp;&nbsp;</a>-->
<!--                        <a href="#" class="display-1 menuLink">LOGIN</a>-->
                    </div>
                    <div class="col">

                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-4 text-center FadeInContainer">
            <div class="row mt-4">
                <div class="col align-self-end">
                    <p>Find your dream job</p>
                </div>
            </div>
            <div class="row">
                <div class="col" id="fadeInTextBox">test</div>
            </div>
        </div>
    </header>


    </body>
</html>
