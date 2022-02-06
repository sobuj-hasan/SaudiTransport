@extends('layouts.app')
@section('title', 'Car Services')
@section('content')
    <div class="topmdl">
   <marquee behavior="" direction="">
      <h1>SAUDI CHAUFFEUR SERVICE & DRIVERS</h1>
   </marquee>
</div>
<!-- sec-3 start -->
<div class="sec-3 text-center">
   <div class="container">
      <div class="row">
         <h2>Our-Services</h2>
         <div class="col-lg-6 service-box">
            <h1>Airport pickup</h1>
            <div class="sec-3-dgn ">
               <img src="{{ asset('img/logo/airport-pickup.png') }}" alt="">
               <p>Airports can get very hectic, and it can be difficult to arrange for having a taxi, or Uber or 
                  Lyft to transport you. We are able to deliver you safely and without any hassle to your destination.
               </p>
               <p>N.B:  60 minutes no waiting charged from requested pickup time.</p>
            </div>
         </div>
         <div class="col-lg-6 service-box">
            <h1>Airport dropoff </h1>
            <div class="sec-3-dgn">
               <img src="{{ asset('img/logo/airport-dropoff.png') }}" alt="">
               <p>we know how important it is for passengers to arrive safely and on time. We have been providing our 
                  Assisted Drop Off Service for many years 
               </p>
               <p> N.B:  60 minutes no waiting charged from requested pickup time.</p>
            </div>
         </div>
         <div class="col-lg-6 service-box">
            <h1>city to city </h1>
            <div class="sec-3-dgn">
               <img src="{{ asset('img/logo/city-tocity.jpg') }}" alt="">
               <p>Travel from one city to another city with the best relaxation. </p>
               <p>N.B : Your driver will wait for a maximum of 15 minutes after your scheduled pick‑up time</p>
            </div>
         </div>
         <div class="col-lg-6 service-box">
            <h1>events
            </h1>
            <div class="sec-3-dgn">
               <img src="{{ asset('img/logo/event-logo.png') }}" alt="">
               <p>saudi chauffeur is always able to covered any Ritual whatever it is your birthday, wedding ,
                  sporting events, corporate events, airport transfers or any other special event. 
               </p>
               <p>N.B : Your driver will wait for a maximum of 15 minutes after your scheduled pick‑up time</p>
            </div>
         </div>
         <div class="col-lg-6 service-box">
            <h1>hourly drive
            </h1>
            <div class="sec-3-dgn">
               <img id="hrlylogo" src="{{ asset('img/logo/hourly-logo.png') }}" alt="">
               <p>book a ride by hours basis so that you get your all essential done in one trip </p>
               <p>N.B : Your driver will wait for a maximum of 15 minutes after your scheduled pick‑up time</p>
            </div>
         </div>
         <div class="col-lg-6 service-box">
            <h1>Corporate services
            </h1>
            <div class="sec-3-dgn">
               <img src="{{ asset('img/logo/corporet-logo.jpg') }}" alt="">
               <p>Best Chauffeur Services in Riyadh for Corporate Market we are guarantee a taste of luxury with every ride. 
                  All of our drivers are fully trained and we have a 99.6% incident free rate. our drivers are well dressed,
                  wearing a clean black suit and looking well-groomed. your comfort is our first priority. 
               </p>
               <p>N.B : Your driver will wait for a maximum of 15 minutes after your scheduled pick‑up time</p>
            </div>
         </div>
         <div class="col-lg-12 service-box">
            <h1>A to B in city.
            </h1>
            <div class="sec-3-dgn">
               <img src="{{ asset('img/logo/atob-logo.jpg') }}" alt="">
               <p>saudi chauffeur service is the perfect way to get yourself around a city with 
                  the greatest of ease; a comfortable and stylish solution to your travel needs.
               </p>
               <p>N.B : Your driver will wait for a maximum of 15 minutes after your scheduled pick‑up time</p>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- sec-3 end -->
<div class="new-1">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 new1-dgn">
            <h1>booking cancelation :</h1>
            <p>If a booking is cancelled by the Customer less than 12 hours from the start of the period of hire will not be charged.</p>
         </div>
      </div>
   </div>
</div>
@endsection
