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
                            <p class="text mt-2">support@hello.com</p>
                            <p class="text mt-2">support@hello.com</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="contact-card">
                            <img src="{{ asset('frontend/asset/img/clock.png') }}" alt="...">
                            <h2 class="title mt-2 mt-lg-4">Working Hours </h2>
                            <p class="text mt-2">Monday To Saturday</p>
                            <p class="text mt-2">8:00am To 10:00pm</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="google-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116833.83187894154!2d90.33728812288355!3d23.780975728197344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2sDhaka!5e0!3m2!1sen!2sbd!4v1727030670832!5m2!1sen!2sbd" width="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                        Proin et nisi elementum, commodo eros vel, varius urna. Donec placerat velit sem, at dignissim risus tempor id. Fusce dignissim tincidunt dapibus. Duis quis ligula ut purus ultrices vehicula eget eget dolor.
                        <br><br> Fusce sit amet egestas est. Quisque eu cursus leo. Donec convallis tincidunt tempor. Vivamus ultrices varius lectus, vel interdum velit imperdiet non.
                    </p>


                </div>

                <!-- form start  -->
                <div class="col-12 col-md-7">
                    <form action="">

                        <div class="row row-cols-2 g-3 g-md-4">
                            <div class="col">
                                <input type="text" class="form-control rounded-pill" id="fname" placeholder="First Name">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control rounded-pill" id="lname" placeholder="last Name">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control rounded-pill" id="mobile" placeholder=" Mobile No.">
                            </div>
                            <div class="col">
                                <input type="email" class="form-control rounded-pill" id="email-address" placeholder="Email Address">
                            </div>
                        </div>

                        <div class="mb-md-5 mb-4 mt-3 mt-md-4">
                            <textarea class="form-control rounded-4" id="message" rows="5" placeholder="Your message"></textarea>
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
