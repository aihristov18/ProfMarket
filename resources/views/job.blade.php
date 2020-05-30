@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row" style="background-color: rgb(160, 178, 190) ;">
        <div class="col-lg-12 mt-2">
            <div class="col text-center"><a href="/"><img src="{{asset('img/logo.png')}}" style="height: 15%;width: 15%"></a></div>
        </div>
    </div>
    <div class="row" style="background-color: rgb(160, 178, 190);">
        <div class="col text-center">
            <hr id="HRline">
        </div>
    </div>
    <div class="row text-center" style="background-color: #f78b54;">

        <div class="col-lg-3"><a href="/home" class="display-1 menuLink">POST OFFER</a></div>
        <div class="col-lg-3"><a href="/" class="display-1 menuLink">BROWSE OFFERS</a></div>
        <div class="col-lg-3"><a href="{{ route('login') }}" class="display-1 menuLink" >LOGIN</a></div>
        <div class="col-lg-3"><a href="{{ route('register') }}" class="display-1 menuLink">REGISTER</a></div>
</div>
</div>
<div class="container snimka">
    <div class="row text-center">

        <img src="{{ asset('/img/'.$job->filename)}}" style=" width: 94%;border-radius:.25rem!important;" alt="">
        <div class="text-block compName">
            <h3 class="display-4">{{$job->name}}</h3>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col" style="padding-left: 10%;">
            <h3 class="display-4">{{$job->title}}</h3>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col" style="padding-top: 2%;padding-left: 10%;">
            <span><i class='fas fa-map-marker-alt' style='font-size:150%'></i> София, България</span>
            <span><i class='fas fa-clock' style='font-size:150%'></i> Непълен работен ден</span>
            <span><i class='fas fa-wallet' style='font-size:150%'></i>{{$job->salary}}</span>
        </div>

    </div>
</div>
<!--JOB DESCRIPTION-->
<div class="container-fluid">
    <div class="row">
        <div class="col" style="padding-left: 10%;padding-top:2%">
            <h3 class="display-6" style="color: #f78b54;">Описание и изисквания:</h3>
            <p class="justify" style="padding-left: 10%;">{{$job->description}}</p>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col" style="padding-left: 10%;padding-top:2%">
            <h3 class="display-6" style="color: #f78b54;">Контакти:</h3>
            <p class="justify" style="padding-left: 10%;">Централен офис: гр. София, кв. Симеоново, ул. Момина сълза No.14А<br>
                тел.: (02) 969 25 00</p>
        </div>
    </div>
</div>



@stop
