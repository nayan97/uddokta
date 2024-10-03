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
            <h1 class="heading text-center">Services</h1>
            <div class="text-center mt-4"><span class="btn-nav  rounded-pill text-uppercase ">home<i class="fa-solid fa-angle-right mx-2"></i>services</span></div>
        </div>

    </section>
    <!-- top-banner end -->


    <!-- my services start  -->
    <section class="services">
        <div class="object-left"><img src="{{ asset('frontend/asset/img/service-object-one.png') }}" alt="..."></div>
        <div class="container">
            <div class="row g-3 g-lg-4 g-xl-5 row-cols-1 row-cols-lg-2 services-card-wrap">

                @foreach ( $services as $service)
                <div class="col">
                    <!-- service-card start  -->
                    <div class="service-card p-sm-3 p-2 rounded d-flex border-0 position-relative">
                        <div class="ms-2 ms-sm-0 mt-sm-0 mt-3 m-sm-3">
                            <div class="icon-bg rounded-circle"><img style="width:60px" src="{{ $service->icon}}" class="img-fluid" alt="..."></div>
                        </div>

                        <div class="p-3">
                            <a href="#"><h5 class="title">{{$service->name}}</h5></a>
                            <p class="text">{!! $service->description !!}</p>
                        </div>
                        <span class="card-number">{{ $loop ->index + 1}}</span>
                    </div>
                </div>
                @endforeach

            </div>
        </div>

    </section>
    <!-- my services end -->

     <!-- all counter start -->
    <section class="counter-all">
        <div class="bg-img"></div>
        <div class="container">
            <div class="row g-4 gx-sm-3 gx-lg-5 row-cols-2 row-cols-md-4">
                <div class="col">
                    <div class="counter-box d-flex align-items-center">
                        <h1 class="value service-counter-value" service-data-target="{{$setting->projects}}">{{$setting->projects}}</h1>
                        <h5 class="property">Projects Completed</h5>
                    </div>
                </div>
                <div class="col">
                    <div class="counter-box d-flex align-items-center">
                        <h1 class="value service-counter-value" service-data-target="{{$setting->happy_client}}">{{$setting->happy_client}}</h1>
                        <h5 class="property">Our Happy Clients</h5>
                    </div>
                </div>
                <div class="col">
                    <div class="counter-box d-flex align-items-center">
                        <h1 class="value service-counter-value" service-data-target="{{$setting->coffe}}">{{$setting->coffe}}</h1>
                        <h5 class="property">Cup Of Coffee For Me</h5>
                    </div>
                </div>
                <div class="col">
                    <div class="counter-box d-flex align-items-center">
                        <h1 class="value service-counter-value" service-data-target="{{$setting->all_client}}">{{$setting->all_client}}</h1>
                        <h5 class="property">Clients Worked With Me</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- all counter end -->


    <!-- my client start  -->
    <section class="my-clients">
        <div class="bg-object-right"><img src="{{ asset('frontend/asset/img/my-client-object-one.png') }}" alt="..."></div>
        <div class="container">

            <div class="row gx-4 gx-xl-5">
                <div class="col-12 col-md-6 order-2 order-md-1">
                    <div class="brand-wrap d-flex">
                        <div class="brand-box">
                            <div class="brand d-flex justify-content-center align-items-center"><img src="{{ asset('frontend/asset/img/brand/brand1.png') }}" alt="brand"></div>
                            <div class="brand d-flex justify-content-center align-items-center"><img src="{{ asset('frontend/asset/img/brand/brand2.png') }}" alt="brand"></div>
                        </div>
                        <div class="brand-box">
                            <div class="brand d-flex justify-content-center align-items-center"><img src="{{ asset('frontend/asset/img/brand/brand3.png') }}" alt="brand"></div>
                            <div class="brand d-flex justify-content-center align-items-center"><img src="{{ asset('frontend/asset/img/brand/brand4.png') }}" alt="brand"></div>
                        </div>
                        <div class="brand-box">
                            <div class="brand d-flex justify-content-center align-items-center"><img src="{{ asset('frontend/asset/img/brand/brand5.png') }}" alt="brand"></div>
                            <div class="brand d-flex justify-content-center align-items-center"><img src="{{ asset('frontend/asset/img/brand/brand6.png') }}" alt="brand"></div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 order-1 order-md-2">
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
                            <h2 class="sub-heading ms-2">My Clients</h2>
                        </div>
                    </div>

                    <h1 class="heading mt-2">I Work With Over 150+ Happy Client</h1>

                    <p class="text mt-4">
                        Maecenas blandit dapibus egestas. Donec vestibulum nec nunc sit amet interdum. Curabitur accumsan, ante a tincidunt placerat, magna nisi egestas lorem, non efficitur odio diam interdum ipsum.
                    </p>

                    <p class="text mt-3">Ut eu dolor in diam blandit lacinia at a dui. Praesent lobortis eget nisl sit amet pellentesque. Cras in dapibus orci, eget maximus metus. Curabitur eget orci mi.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- my client end -->

    <!-- working steps start  -->
    <section class="working-steps " >
        <div class="bg-object-left"><img src="{{ asset('frontend/asset/img/working-step-object-one.png') }}" alt="..."></div>
        <div class="container">
            <div class="working-steps-wrap">
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
                        <h2 class="sub-heading ms-2">Working Steps</h2>
                    </div>
                </div>

                <h1 class="heading mt-2">My Working Process</h1>

                <!-- working step cards start  -->
                <div class="working-card-wrap mt-5 d-md-flex justify-content-between">

                    <div class="working-card card border-0">
                        <div class="card-img-wrap">
                            <img src="{{ asset('frontend/asset/img/working-step1.png') }}" class="" alt="...">
                        </div>

                        <div class="card-body p-0">
                            <h5 class="title">Concept Creation</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla porro minus dolorem dolores ut et iusto.</p>
                        </div>

                        <span class="card-number">01</span>
                    </div>

                    <div class="working-card card border-0">
                        <div class="card-img-wrap">
                            <img src="{{ asset('frontend/asset/img/working-step2.png') }}" class="" alt="...">
                        </div>

                        <div class="card-body p-0">
                            <h5 class="title">Sketch Drawing</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla porro minus dolorem dolores ut et iusto.</p>
                        </div>

                        <span class="card-number">02</span>
                    </div>

                    <div class="working-card card border-0">
                        <div class="card-img-wrap">
                            <img src="{{ asset('frontend/asset/img/working-step3.png') }}" class="" alt="...">
                        </div>

                        <div class="card-body p-0">
                            <h5 class="title">Final Design</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla porro minus dolorem dolores ut et iusto.</p>
                        </div>

                        <span class="card-number">03</span>
                    </div>

                </div>

                <div class="working-arrow-left">
                    <img src="{{ asset('frontend/asset/img/step-arrow1.png') }}" alt="...">
                </div>

                <div class="working-arrow-right">
                    <img src="{{ asset('frontend/asset/img/step-arrow2.png') }}" alt="...">
                </div>

            </div>
        </div>
    </section>
    <!-- working steps end -->

    <!-- best pricing start -->
    <section class="pricing">
        <div class="bg-object-right"><img src="{{ asset('frontend/asset/img/pricing-object-one.png') }}" alt=""></div>
        <div class="container">
            <div class="pricing-wrap">
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
                        <h2 class="sub-heading ms-2">best pricing</h2>
                    </div>
                </div>

                <h1 class="heading mt-2">Flexible Pricing Plan</h1>

                <div class="row mt-5 g-4 g-xl-5 row-cols-1 row-cols-lg-3">
                    <div class="col">
                        <div class="pricing-card">
                            <div class="card-body p-4 p-xl-5">
                                <img src="{{ asset('frontend/asset/img/lite.png') }}" alt="" style="margin-top: -10px;">
                                <h2 class="title text-capitalize d-inline-block ms-2">Lite</h2>
                                <h3 class="sub-title">Perfect To Get Started</h3>
                                <h1 class="sub-heading my-4">$29.99<span>/Month</span></h1>

                                <button class="btn btn-primary rounded-pill">Get Started</button>

                                <h6 class="mt-4">Lite Includes:</h6>
                                <ul class="">
                                    <li class="text mt-xl-3 mt-2"><img src="{{asset('frontend/asset/img/check.png')}}" class="me-2" alt="">25 Analytics Campaign</li>
                                    <li class="text mt-xl-3 mt-2"><img src="{{asset('frontend/asset/img/check.png')}}" class="me-2" alt="">1,300 Keywords</li>
                                    <li class="text mt-xl-3 mt-2"><img src="{{asset('frontend/asset/img/check.png')}}" class="me-2" alt="">25 Social Media Reviews</li>
                                    <li class="text mt-xl-3 mt-2"><img src="{{asset('frontend/asset/img/check.png')}}" class="me-2" alt="">1 Free Optimization</li>
                                    <li class="text mt-xl-3 mt-2"><img src="{{asset('frontend/asset/img/check.png')}}" class="me-2" alt="">Check 24/7 Support</li>

                                </ul>
                            </div>

                            <div class="card-footer">
                                <p class="text text-center">*Limited offer, save 10% for This plan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="pricing-card">
                            <div class="card-body p-4 p-xl-5">
                                <img src="{{asset('frontend/asset/img/pro.png')}}" alt="" style="margin-top: -10px;">
                                <h2 class="title text-capitalize d-inline-block ms-2">Pro</h2>
                                <h3 class="sub-title">Best For Professionals</h3>
                                <h1 class="sub-heading my-4">$39.99<span>/Month</span></h1>

                                <button class="btn btn-primary rounded-pill">Get Started</button>

                                <h6 class="mt-4">Everything In Lite, Plus:</h6>
                                <ul class="">
                                    <li class="text mt-xl-3 mt-2"><img src="{{asset('frontend/asset/img/check.png')}}" class="me-2" alt="">25 Analytics Campaign</li>
                                    <li class="text mt-xl-3 mt-2"><img src="{{asset('frontend/asset/img/check.png')}}" class="me-2" alt="">1,300 Keywords</li>
                                    <li class="text mt-xl-3 mt-2"><img src="{{asset('frontend/asset/img/check.png')}}" class="me-2" alt="">25 Social Media Reviews</li>
                                    <li class="text mt-xl-3 mt-2"><img src="{{asset('frontend/asset/img/check.png')}}" class="me-2" alt="">1 Free Optimization</li>
                                    <li class="text mt-xl-3 mt-2"><img src="{{asset('frontend/asset/img/check.png')}}" class="me-2" alt="">Check 24/7 Support</li>

                                </ul>
                            </div>

                            <div class="card-footer">
                                <p class="text text-center">*Limited offer, save 10% for This plan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="pricing-card">
                            <div class="card-body p-4 p-xl-5">
                                <img src="{{ asset('frontend/asset/img/ultimate.png') }}" alt="" style="margin-top: -10px;">
                                <h2 class="title text-capitalize d-inline-block ms-2">Ultimate</h2>
                                <h3 class="sub-title">Toolset For Hard Players</h3>
                                <h1 class="sub-heading my-4">$49.99<span>/Month</span></h1>

                                <button class="btn btn-primary rounded-pill">Get Started</button>

                                <h6 class="mt-4">Everything In Pro, Plus:</h6>
                                <ul class="">
                                    <li class="text mt-xl-3 mt-2"><img src="{{asset('frontend/asset/img/check.png')}}" class="me-2" alt="">25 Analytics Campaign</li>
                                    <li class="text mt-xl-3 mt-2"><img src="{{asset('frontend/asset/img/check.png')}}" class="me-2" alt="">1,300 Keywords</li>
                                    <li class="text mt-xl-3 mt-2"><img src="{{asset('frontend/asset/img/check.png')}}" class="me-2" alt="">25 Social Media Reviews</li>
                                    <li class="text mt-xl-3 mt-2"><img src="{{asset('frontend/asset/img/check.png')}}" class="me-2" alt="">1 Free Optimization</li>
                                    <li class="text mt-xl-3 mt-2"><img src="{{asset('frontend/asset/img/check.png')}}" class="me-2" alt="">Check 24/7 Support</li>

                                </ul>
                            </div>

                            <div class="card-footer">
                                <p class="text text-center">*Limited offer, save 10% for This plan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- best pricing end -->

    <!-- testimonial start -->
    <section class="testimonial">
        <div class="bg-object-left"><img src="{{ asset('frontend/asset/img/testimonialt-object-one.png') }}" alt=""></div>
        <div class="container">
            <div class="row row-cols-2">

                <div class="col-12 col-md-6">
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
                            <h2 class="sub-heading ms-2">testimonial</h2>
                        </div>
                    </div>

                    <h1 class="heading mt-2">What Client Sayâ€™s About Me</h1>

                    <!-- carousel start  -->
                    <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                          <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="0" class="active rounded-circle slide-btn" aria-current="true" aria-label="Slide 1"></button>
                          <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="1" class="slide-btn rounded-circle" aria-label="Slide 2"></button>
                          <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="2" class="slide-btn rounded-circle" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner px-3">

                            <!-- carousel-item start  -->
                            @foreach ($testimonials as $testimonial )
                            <div class="carousel-item @if($loop->first) active @endif pt-4 pb-5">
                                    <div class="testimonial-card" >
                                        <div class="d-flex">
                                            <div class="client-img-wrap rounded-circle p-xl-2 p-1 me-3"><img style="width: 60px" src="{{ $testimonial->image }}" class="rounded-circle" alt=""></div>
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <h2 class="title mb-1">{{ $testimonial->name }}</h2>
                                                    <small class="text-capitalize text-primary">Our client</small>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="text mt-xl-4 mt-3">{{ $testimonial->message}}</p>

                                        <img src="{{ asset('frontend/asset/img/quote.png') }}" class="qoute" alt="">
                                    </div>
                                </div>
                                @endforeach
                           
                            <!-- carousel-item end  -->


                            {{-- <div class="carousel-item  pt-4 pb-5">
                                <div class="testimonial-card" >
                                    <div class="d-flex">
                                        <div class="client-img-wrap rounded-circle p-xl-2 p-1 me-3"><img src="{{ asset('frontend/asset/img/client2-one.jpg') }}" class="rounded-circle" alt=""></div>
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <h2 class="title mb-1">Albert Walkers</h2>
                                                <small class="text-capitalize text-primary">Our client</small>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text mt-xl-4 mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum voluptatibus eveniet eligendi officia illo eaque veniam similique laudantium!</p>

                                    <img src="{{ asset('frontend/asset/img/quote.png') }}" class="qoute" alt="">
                                </div>
                            </div> --}}

                            {{-- <div class="carousel-item  pt-4 pb-5">
                                <div class="testimonial-card" >
                                    <div class="d-flex">
                                        <div class="client-img-wrap rounded-circle p-xl-2 p-1 me-3"><img src="{{ asset('frontend/asset/img/client3-one.jpg') }}" class="rounded-circle" alt=""></div>
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <h2 class="title mb-1">Albert Walkers</h2>
                                                <small class="text-capitalize text-primary">Our client</small>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text mt-xl-4 mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum voluptatibus eveniet eligendi officia illo eaque veniam similique laudantium!</p>

                                    <img src="{{ asset('frontend/asset/img/quote.png') }}" class="qoute" alt="">
                                </div>
                            </div> --}}



                        </div>

                      </div>

                </div>

                <div class="col-12 col-md-6">
                    <div class="testimonial-video">
                        <img src="{{ asset('frontend/asset/img/testimonial-one.jpg') }}" alt="">
                        <div class="btn-wrap">
                            <a href="#" class="testimonial-play-btn popup-youtube " title="Play Video">
                                <span><i class="fa-solid fa-play"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial end -->



 </main>
<!-- main content end -->

@endsection
