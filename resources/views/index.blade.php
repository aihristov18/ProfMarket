<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="index.js"></script>
</head>
@extends('layouts.app')

@section('content')
<body onload="fadeIn()">

  <header>
    <div class="overlay"></div>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
      <source src="{{asset('img/video_noaudio.mp4')}}" type="video/mp4">
    </video>
    <div class="container ">
      <div class="d-flex ">

        <div class="row">
          <p></p>
        </div> <!-- p stand for padding-->
        <!--PADDING TOP IN A NUTSHELL -->
        <div class="row">
          <div class="col text-center"><img src="{{asset('img/logo')}}.png" style="height: 25%;width: 25%"></div>
          <div class="col-6 text-center">
            <hr>

              <a href="{{ route('home') }}" class="display-1 menuLink">POST OFFER&nbsp;&nbsp;&nbsp;&nbsp;</a>

              <a href="/contact" class="display-1 menuLink">Contact Us</a>
<!--              <a href="{{ route('register') }}" class="display-2 menuLink px-4">REGISTER</a>-->

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
@foreach($jobs as $job)
<!--<p>{{$job->title}}</p>-->
<!--<p>{{$job->salary}}</p>-->
<!--<p>{{$job->description}}</p>-->
<!--<p>{{$job->filename}}</p>-->
<!--  <div class="col-md-6 offset-md-3 book-desc">-->
<!--      <div class="card">-->
<!--          <img class="card-img-top" src="{{url('img/'.$job->filename)}}" alt="{{$job->filename}}" width="50px" height="100px">-->
<!--          <div class="card-body">-->
<!---->
<!--              <p class="card-text">-->
<!--                  title {{$job->title}}-->
<!--              </p>-->
<!--              <p class="card-text">-->
<!--                  salary  {{$job->salary}}-->
<!--              </p>-->
<!--              <p class="card-text">-->
<!--                  description  {{$job->description}}-->
<!--              </p>-->
<!--              <a href="{{ route('index') }}" class="btn btn-dark">Back</a>-->
<!--          </div>-->
<!--      </div>-->
<!--  </div>-->

@endforeach
  <div class="container snimka">
      <div class="row text-center">

          <img src="Cashier.jpg" style="width: 94%;border-radius:.25rem!important;" alt="fantastiko logo image">
          <div class="text-block compName">
              <h3 class="display-4">Ван Холдинг ЕООД</h3>
          </div>
      </div>
  </div>
  <div class="container-fluid">
      <div class="row">
          <div class="col" style="padding-left: 10%;">
              <h3 class="display-4">Касиер-продавач</h3>
          </div>
      </div>
  </div>

  <div class="container-fluid">
      <div class="row">
          <div class="col" style="padding-top: 2%;padding-left: 10%;">
              <span><i class='fas fa-map-marker-alt' style='font-size:150%'></i> София, България</span>
              <span><i class='fas fa-clock' style='font-size:150%'></i> Непълен работен ден</span>
              <span><i class='fas fa-wallet' style='font-size:150%'></i>от 1160 до 1300 лв.</span>
          </div>

      </div>
  </div>
  <!--JOB DESCRIPTION-->
  <div class="container-fluid">
      <div class="row">
          <div class="col" style="padding-left: 10%;padding-top:2%">
              <h3 class="display-6" style="color: #f78b54;">Описание и изисквания:</h3>
              <p class="justify" style="padding-left: 10%;">Търговска верига Фантастико е създадена през 1991 година и оттогава успешно се развива на българския пазар.<br>
                  В момента управляваме над 40 магазина, като броят им непрекъснато расте. Модерна визия, богат асортимент,<br>
                  високо качество на стоките и услугите, отлично обслужване. Ние обичаме добрата храна и сме ежедневно решение<br>
                  за нашите клиенти, да стане денят им по-хубав.Всичко това се случва благодарение на нашите служители. <br>
                  Във Фантастико работят над 3400 човека, изграждайки един професионален, сплотен и отговорен екип.</p>
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

</body>




@endsection
