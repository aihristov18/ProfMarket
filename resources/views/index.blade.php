
@extends('layouts.app')

@section('content')

<body style="background-color:#16334a;" onload="fadeIn(-1)">
<header>
    <div class="overlay"></div>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="{{asset('img/video_noaudio.mp4')}}" type="video/mp4">
    </video>
    <div class="container ">
        <div class="row">
            <div class="col-lg-12 mt-2">
                <div class="col text-center"><img src="{{asset('img/logo.png')}}" style="height: 25%;width: 25%"></div>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <hr id="HRline">
            </div>
        </div>
        <div class="row text-center">
            <div class="col-lg-4"><a href="/home" class="display-1 menuLink">POST OFFER</a></div>
            <div class="col-lg-4"><a href="/jobs" class="display-1 menuLink">BROWSE OFFERS</a></div>
            <div class="col-lg-4"><a href="/contact" class="display-1 menuLink">CONTACT FORM</a></div>
        </div>
    </div>

    <div class="container mt-5 text-center FadeInContainer">
        <div class="row mt-4">
            <div class="col align-self-end">
                <p class="jobBaseText">Find your dream job!</p>
            </div>
        </div>
        <form method="get" action="{{ route('search')}}">
        <div class="row">
            <div class="col mx-5">
                <div id="searchBar" style="display:none">

                    <div class="md-form mt-3 mb-4">
                        <input class="form-control" name="keyword" type="text" placeholder="Search" aria-label="Search">
                    </div>
                </div><img id="glass" style="cursor:pointer;" src="{{asset('img/white_Lupa.png')}}" onmouseover="changeGlass(true)"
                           onmouseout="changeGlass(false)" onclick="expandSearchBar();">
            </div>
        </div>
        </form>
        <div class="row">
            <div class="col jobSubText pb-2" id="fadeInTextBox">Welcome to ProfMarket</div>
        </div>
<!--    </div>-->
<!--        -->
<!--        <div class="row">-->
<!--            <div class="col"><img id="glass"  src="" onmouseover="changeGlass(true)" onmouseout="changeGlass(false)"></div>-->
<!--        </div>-->
<!--        <div class="row">-->
<!--            <div class="col jobSubText" id="fadeInTextBox">test</div>-->
<!--        </div>-->
<!--    </div>-->
    </div>
</header>
</body>

@include('layouts/footer')


@endsection
