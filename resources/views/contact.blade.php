@extends('frontend.layouts.master')
@section('content')
<!-- main content start -->
<main class="">
    
    <!-- top-banner start -->
    <section class="page-top">
        <!-- top banner background start -->
        <div class="banner-blur-one"><img src="{{ asset('frontend/asset/img/banner-blur1.png') }}" alt="banner-blur"></div>
        <div class="banner-blur-two"><img src="{{ asset('frontend/asset/img/banner-blur2.png') }}" alt="banner-blur"></div>
        <div class="banner-bg-line"><img src="{{ asset('frontend/asset/img/banner-bg-line.png') }}" alt="banner-bg-line"></div>
        <!-- <div class="banner-object-one"><img src="asset/img/banner-object1.png" alt="banner-object1"></div>
            <div class="banner-object-two"><img src="asset/img/banner-object2.png" alt="banner-object2"></div> -->
            <div class="banner-bg-circle"><img src="{{ asset('frontend/asset/img/banner-bg-circle.png') }}" alt="banner-bg-circle"></div>
            <div class="container">
                @include('frontend.layouts.notify')

                <h1 class="heading text-center">Contact Us</h1>
                <div class="text-center mt-4"><span class="btn-nav  rounded-pill text-uppercase ">home<i class="fa-solid fa-angle-right mx-2"></i>contact</span></div>
            </div>
            
           
    </section>
    <!-- top end -->


    <section class="contact-us">
        <div class="container">
            <div class="contact-wrap">
                <!-- section heading start  -->
                <div class="section-heading">
                    <div class="heading-style d-flex align-items-center">
                        <div class="left">
                            <div class="dot"></div>
                            <div class="dot"></div>
                        </div>
                        <div class="right">
                            <div class="dot"></div>
                            <div class="dot"></div>
                        </div>
                        <h2 class="sub-heading ms-2">Need Any Help</h2>
                    </div>
                </div>

                <h1 class="heading mt-2">Contact Information</h1>

                <div class="row g-4 mt-4 mt-lg-5 row-cols-2 row-cols-lg-4">
                    <div class="col">
                        <div class="contact-card">
                            <img src="{{ asset('frontend/asset/img/location.png') }}" alt="...">
                            <h2 class="title mt-2 mt-lg-4">Location </h2>
                            <p class="text mt-2">{{ $setting->address}}</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="contact-card">
                            <img src="{{ asset('frontend/asset/img/phone.png') }}" alt="...">
                            <h2 class="title mt-2 mt-lg-4">Phone No. </h2>
                            <p class="text mt-2">{{ $setting->phone}}</p>
                           
                        </div>
                    </div>
                    <div class="col">
                        <div class="contact-card">
                            <img src="{{ asset('frontend/asset/img/email.png') }}" alt="...">
                            <h2 class="title mt-2 mt-lg-4">Email Address </h2>
                            <p class="text mt-2">{{$setting->email}}</p>
                           
                        </div>
                    </div>
                    <div class="col">
                        <div class="contact-card">
                            <img src="{{ asset('frontend/asset/img/clock.png') }}" alt="...">
                            <h2 class="title mt-2 mt-lg-4">Working Hours </h2>
                            <p class="text mt-2">{{$setting->office_time}}</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="google-map">
        <iframe src="{{$setting->map}}" width="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <!--  start  -->
    <section class="support-form">
        <div class="object-right"><img src="{{ asset('frontend/asset/img/contact-form-in-object-one.png') }}" alt="..."></div>
        <div class="container">
            <div class="row g-0 g-md-5">

                <div class="col-12 col-md-5">
                    <!-- section heading start  -->
                    <div class="section-heading">
                        <div class="heading-style d-flex align-items-center">
                            <div class="left">
                                <div class="dot"></div>
                                <div class="dot"></div>
                            </div>
                            <div class="right">
                                <div class="dot"></div>
                                <div class="dot"></div>
                            </div>
                            <h2 class="sub-heading ms-2">Support Form</h2>
                        </div>
                    </div>

                    <h1 class="heading">Get The Quort With Us</h1>
                    <p class="text mb-5">
                        {!! $infos->support_req !!}
                    </p>


                </div>
              
                <!-- form start  -->
                <div class="col-12 col-md-7">
                    <form method="POST" action="{{route('message.submit')}}">
                        @csrf



                        <div class="row row-cols-2 g-3 g-md-4">
                            <div class="col">
                                <input type="text" class="form-control rounded-pill" name="first_name" id="fname" placeholder="First Name">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control rounded-pill" name="last_name" id="lname" placeholder="last Name">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control rounded-pill" name="phone" id="mobile" placeholder=" Mobile No.">
                            </div>
                            <div class="col">
                                <input type="email" class="form-control rounded-pill" name="email" id="email-address" placeholder="Email Address">
                            </div>
                        </div>

                        <div class="mb-md-5 mb-4 mt-3 mt-md-4">
                            <textarea class="form-control rounded-4" id="message" rows="5" name="message" placeholder="Your message"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary rounded-pill" >submit now</button>
                    </form>
                </div>


            </div>
        </div>

    </section>
    <!--  end -->


 </main>
<!-- main content end -->
@endsection
