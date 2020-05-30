@extends('layouts.app')
@section('content')
@include('layouts.navbar')
<section>
    <div class="container">
        <form action="{{ url('send_message') }}" method="POST">
            {{ csrf_field() }}
            <h4 style="margin-bottom:15px;">{{__('Contact us')}}</h4>
            <div itemscope itemtype="http://schema.org/Organization">
                <p itemprop="name" style="font-weight:600;">EDI Rent a Car - Plovdiv, Bulgaria</p>

                <p itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                    <span itemprop="addressLocality">  {{__('contact-us-address')}}</span>
                    <!-- <span itemprop="streetAddress">ул. Капитан Райчо 52</span> -->
                </p>

                <p>
                    {{__('Email')}}: <a href="mailto:info@edirentacar.bg">info@edirentacar.bg</a>
                </p>

                <p>
                    {{__('office-phone')}}:<a href="tel:+35932394949" itemprop="telephone"> +359/32/394949</a>
                </p>

                <p>
                    {{__('mobile-phone')}}:<a href="tel:+359889021020" itemprop="telephone"> +359/889021020 </a>
                </p>

                <p>
                    {{__('additional-contacts')}}
                    <a href="skype:edy-2004?call" target="_blank"><img src="/img/Skype.jpg" style="height:30px;"></a>
                    <a href="viber://add?number=359889021020" target="_blank"><img src="/img/viber.png" style="height:30px;"></a>
                    <a href="https://wa.me/359889021020" target="_blank"><img src="/img/WhatsApp.png"style="height:30px;"></a>
                </p>



            </div>

            <div class="row">
                <div class="col-12 col-sm-6">

                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="{{__('Name')}}"
                               value="{{ old('name') }}"  required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="email" name="email"
                               placeholder="{{__('Email')}}"
                               value="{{ old('email') }}"  required>
                    </div>
                    <div class="form-group">
                                <textarea class="form-control" type="textarea" name="message" id="message"
                                          placeholder="{{__('Message')}}"
                                          maxlength="140" rows="7">{{old('message')}}</textarea>
                        <p id="characterLeft" class="help-block ">{{__('You have reached the limit')}}</p>
                    </div>
                    <div class="row col-12 justify-content-between ml-0 mr-0 mb-2">



                        <input type="submit" name="submit" class="btn btn-success mb-1" value="{{__('Send Message')}}"/>
                    </div>
                </div>
                <div class="map-section col-12 col-sm-6">

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2958.3960980724833!2d24.752087915687717!3d42.1418099568485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14acd1a5c3555cbd%3A0x6e3c4c7e4d891f28!2z0YPQuy4g4oCe0JrQsNC_0LjRgtCw0L0g0KDQsNC50YfQviDQndC40LrQvtC70L7QsuKAnCA1MiwgNDAwMCDQmtCw0LzQtdC90LjRhtCwIDEsINCf0LvQvtCy0LTQuNCy!5e0!3m2!1sbg!2sbg!4v1569245809947!5m2!1sbg!2sbg" width="800" height="300" frameborder="0" style="border:0; max-width:100%" allowfullscreen=""></iframe>
                </div>
            </div>

        </form>
    </div>
</section>
@endsection
