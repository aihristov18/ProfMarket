@extends('layouts.app')
@section('content')
@include('layouts.navbar')
<section>
    <div class="container">
        <form action="{{ url('send_message') }}" method="POST">
            {{ csrf_field() }}
            <h4 style="margin-bottom:15px;">{{__('Contact us')}}</h4>
            <div itemscope itemtype="http://schema.org/Organization">
                <p itemprop="name" style="font-weight:600;">ProfMarket - Burgas, Bulgaria</p>

                <p itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                    <span itemprop="addressLocality">  {{__('contact-us-address')}}</span>
                    <!-- <span itemprop="streetAddress">ул. Капитан Райчо 52</span> -->
                </p>

                <p>
                    {{__('Email')}}: <a href="mailto:info@edirentacar.bg">profmarketofficial@gmail.com</a>
                </p>

                <p>
                    {{__('CEO-phone')}}:<a href="tel:" itemprop="telephone"> (951) 974-0423</a>
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

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2941.5711814541432!2d27.476706315460728!3d42.50066837917769!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40a69511e7399057%3A0xbaf6f2b19f353b57!2sMusala%20Soft%20Ltd.!5e0!3m2!1sen!2sbg!4v1590940156747!5m2!1sen!2sbg" width="800" height="300" frameborder="0" style="border:0; max-width:100%" allowfullscreen=""></iframe>
                </div>
            </div>

        </form>
    </div>
</section>
@endsection
