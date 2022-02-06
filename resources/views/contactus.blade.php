@extends('layouts.app')
@section('title', 'Contact Us')
@section('content')
    <div class="topmdl">
    <marquee behavior="" direction="">
        <h1>SAUDI CHAUFFEUR SERVICE & DRIVERS</h1>
    </marquee>
    </div>
    <!-- contact page start -->
    <div class="contact text-center">
    <div class="container">
        <div class="col-lg-12">
            <form method="GET" action="{{ route('contact.message') }}">
                @csrf
                <h1>CONTACT WITH US</h1>
                <h3><span>ADDRESS:</span> 3575 Prince Sultan Bin Abdulaziz Rd, Al Olaya, Riyadh 12311 7219, Saudi Arabia</h3>
                <h3><span>PHONE:</span> 0506372488</h3>
                <div class="contact-box">
                    <label for="">NAME</label>
                    <input type="text" name="name">
                </div>
                <div class="contact-box">
                    <label for="">EMAIL</label>
                    <input type="text" name="email">
                </div>
                <div class="contact-box">
                    <label for="">NUMBER</label>
                    <input type="text" name="phone">
                </div>
                <div class="contact-box">
                    <label for="">MESSAGE</label>
                    <textarea name="message" id="" cols="30" rows="10"></textarea>
                </div>
                <button>SUBMIT</button>
            </form>
        </div>
    </div>
    </div>
@endsection








