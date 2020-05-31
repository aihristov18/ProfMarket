@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row" style="background-color: #16334a ;">
        <div class="col-lg-12 mt-2">
            <div class="col text-center"><a href="/"><img src="{{asset('img/logo.png')}}"
                                                          style="height: 15%;width: 15%"></a></div>
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
<div class="container ">
    <div class="row">
        <div class="col text-center">
            <p class="JobOffersText">JOB OFFERS</p>
        </div>
    </div>
    <div>
        @foreach($jobs as $job)
        <a href="{{ route('job',$job->id)}}" class="listing">
        <div class="row">
            <div class="col">
                <hr class="JobListingHR">
            </div>
        </div>
        <div class="row JobContainer">
            <div class="col-lg-3">
                <img  class="img-fluid JobPicture img-thumbnail" src="{{ asset('/img/'.$job->filename)}}">
            </div>
            <div class="col-lg-9 ">
                <p class="JobListingTitle">{{$job->title}}<span class="float-right"> {{$job->created_at->format('d/m/Y')}}</span></p>
                <p class="JobListingDescription">{{$job->description}}</p>
            </div>
        </div>
        </a>
        @endforeach
    </div>
</div>>
@include('layouts/footer')

@stop
