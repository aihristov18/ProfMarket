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
    <div class="col-lg-3"><a href="/contact" class="display-1 menuLink">Contact us</a></div>
    <div class="col-lg-3"><a href="{{ route('login') }}" class="display-1 menuLink" >LOGIN</a></div>
    <div class="col-lg-3"><a href="{{ route('register') }}" class="display-1 menuLink">REGISTER</a></div>
</div>
<div >
    @foreach($jobs as $job)
    <p><a href="{{ route('job',$job->id)}}" >job title::::{{$job->title}}</a></p>


    @endforeach
</div>


@stop
