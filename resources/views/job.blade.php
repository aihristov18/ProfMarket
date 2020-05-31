@extends('layouts.app')
@section('content')
<div class="container-fluid mb-3">
    <div class="row" style="background-color: #16334a ;">
        <div class="col-lg-12 mt-2">
            <div class="col text-center"><a href="/"><img src="{{asset('img/logo.png')}}" style="height: 15%;width: 15%"></a></div>
        </div>
    </div>
    <div class="row" style="background-color: #16334a;">
        <div class="col text-center">
            <hr id="HRline">
        </div>
    </div>
    <div class="row text-center" style="background-color: #16334a;">

        <div class="col-lg-4 pb-3"><a href="/home" class="display-1 menuLink">POST OFFER</a></div>
        <div class="col-lg-4 pb-3"><a href="/" class="display-1 menuLink">BROWSE OFFERS</a></div>
        <div class="col-lg-4 pb-3"><a href="/contact" class="display-1 menuLink">CONTACT FORM</a></div>
</div>
</div>
<div class="container snimka">
    <div class="row text-center">

        <img src="{{ asset('/img/'.$job->filename)}}" style=" width: 94%;border-radius:.25rem!important;" alt="">
        <div class="text-block compName">
            <h3 class="display-4">{{$user->name}}</h3>
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
            <span><i class='fas fa-map-marker-alt mr-1' style='font-size:150%'></i> {{$job->jobaddress}}</span>
            <span><i class='fas fa-clock mr-1 ml-3' style='font-size:150%'></i> {{$job->time}}</span>
            <span><i class='fas fa-wallet  mr-2 ml-3' style='font-size:150%'></i>{{$job->salary}}</span>
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
            <p class="justify" style="padding-left: 10%;">Централен офис: {{$user->city}} {{$user->address}}   тел.: {{$user->phone}}<br>
               </p>
        </div>
    </div>
</div>

@include('layouts/footer')

@stop
