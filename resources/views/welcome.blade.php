@extends('frontend.layouts.master')
@section('content')
 <!-- main content start -->
 <main class="">

    <!-- top-banner start -->
    <section class="top-banner">
        <!-- top banner background start -->
        <div class="banner-blur-one"><img src="{{ asset('frontend/asset/img/banner-blur1.png') }}" alt="banner-blur"></div>
        <div class="banner-blur-two"><img src="{{ asset('frontend/asset/img/banner-blur2.png') }}" alt="banner-blur"></div>
        <div class="banner-bg-line"><img src="{{ asset('frontend/asset/img/banner-bg-line.png') }}" alt="banner-bg-line"></div>
        <div class="banner-object-one"><img src="{{ asset('frontend/asset/img/banner-object1.png') }}" alt="banner-object1"></div>
        <div class="banner-object-two"><img src="{{ asset('frontend/asset/img/banner-object2.png') }}" alt="banner-object2"></div>
        <div class="banner-bg-circle"><img src="{{ asset('frontend/asset/img/banner-bg-circle.png') }}" alt="banner-bg-circle"></div>

        <!-- top banner content start -->
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-12 order-2 order-md-1">
                    <div class="banner-content-one">
                        <h2 class="sub-heading ">{{ $infos->stack}}</h2>
                        <h1 class="heading text-capitalize" >
                            Hey, I am
                            <img src="{{ asset('frontend/asset/img/hand.png') }}" class="hand-move" alt="">
                            <span class="text-gradient">{{ $infos->name}}</span>
                        </h1>

                        <p class="text">{{ $infos->intro }}</p>

                        <div class="banner-btn d-flex">
                            <div><a href="{{ $setting->bymecoffe }}" class="btn btn-primary rounded-pill">By me coffe</a></div>

                            <div >
                                <a href="{{ $setting->youtube }}" class="banner-play-btn top-video-btn" title="Play Video">
                                    <span><img src="{{asset('frontend/asset/img/play-button.png')}}" alt="play btn"></span>
                                </a>
                            </div>

                        </div>

                        <ul class="social-media d-flex ">
                            <li class="d-block d-md-inline" style="font-family: 'Jost', sans-serif;">Follow Me:</li>
                            <li><a class="rounded-circle" href="{{ $setting->facebook }}"><i class="fa-brands fa-facebook"></i></a></li>
                            <li><a class="rounded-circle" href="{{ $setting->instragram }}"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a class="rounded-circle" href="{{ $setting->twitter }}"><i class="fa-brands fa-twitter"></i></a></li>
                        </ul>
                    </div>

                </div>

                <div class="col-md-7 col-12 order-1 order-md-2">
                    <div class="top-banner-img-wrap">

                        <div class="top-banner-img">
                            <img src="{{ $infos->cover_photo}}" class="banner-man-one" alt="banner">
                            <img src="{{ asset('frontend/asset/img/banner-line-one.png') }}" class="banner-line-one" alt="banner">
                            <img src="{{ asset('frontend/asset/img/banner-bg-one.png') }}" class="banner-bg-one" alt="banner">

                            <div class="box-right">
                                <div class="icon"><img src="{{ asset('frontend/asset/img/alimnet-box-icon1.png') }}" alt=""></div>
                                <div class="box-txt-one"><span>Best Design Awards</span></div>
                            </div>

                            <div class="box-left">
                                <div class="icon"><img src="{{ asset('frontend/asset/img/alimnet-box-icon2.png') }}" alt=""></div>
                                <div class="box-txt-two">
                                    <span>Happy Clients</span>
                                    <h3 class="title" data-count="{{$setting->happy_client}}">{{$setting->happy_client}}</h3>
                                    <span></span>
                                </div>
                            </div>

                        </div>




                    </div>

                </div>
            </div>
        </div>
        <!-- top banner content start -->
    </section>
    <!-- top-banner end -->


    <!-- about-me start  -->
    <section class="about-me position-relative ">
        <div class="bg-object-right"><img src="{{ asset('frontend/asset/img/about-object-one.png') }}" alt="..."></div>
        <div class="container ps-0">
            <div class="about-me-wrap ">
                <div class="row ">
                    <div class="col-12 order-2 order-md-1 col-md-6">
                        <div class="img-wrap position-relative ps-3 ps-sm-0">
                            <img src="{{ $infos->profile_photo}}" class="photo" alt="...">

                            <div class="experience-year position-absolute rounded-circle p-3">
                                <div class="mx-auto">
                                    <h2 class="sub-heading text-center mb-1"><span>{{$setting->years_of_experience}}</span></h2>
                                    <p class="text text-capitalize text-center">Years of experience</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 order-1 order-md-2 col-md-6">
                        <div class="information ms-4">
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
                                    <h2 class="sub-heading ms-2"><span>I, m</span> {{ $infos->stack}}</h2>
                                </div>
                            </div>

                            <h1 class="heading">{{ $infos->heading}}</h1>
                            <p class="text mt-4">{{ $infos->short_description}}</p>

                            <!-- info nav  -->
                            <ul class="nav nav-info nav-pills mb-3 mt-4" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link text-uppercase active" id="pills-details-tab" data-bs-toggle="pill" data-bs-target="#pills-details" type="button" role="tab" aria-controls="pills-details" aria-selected="true">My details</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link text-uppercase " id="pills-awards-tab" data-bs-toggle="pill" data-bs-target="#pills-awards" type="button" role="tab" aria-controls="pills-awards" aria-selected="false">My awards</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link text-uppercase " id="pills-skills-tab" data-bs-toggle="pill" data-bs-target="#pills-skills" type="button" role="tab" aria-controls="pills-skills" aria-selected="false">my skills</button>
                                </li>
                            </ul>

                            <!-- info content  -->
                            <div class="tab-content mt-3 mt-lg-4" id="pills-tabContent">
                                <!-- My details start  -->
                                <div class="tab-pane fade show active" id="pills-details" role="tabpanel" aria-labelledby="pills-details-tab" tabindex="0">
                                    <ul class="row gy-3 gy-xl-4 row-cols-2">
                                        <li class="col">
                                            <h6 class="property">My Name:</h6>
                                            <h5 class="value">{{ $infos->name}}</h5>
                                        </li>
                                        <li class="col">
                                            <h6 class="property">My Mobile No:</h6>
                                            <h5 class="value">{{ $infos->phone}}</h5>
                                        </li>
                                        <li class="col">
                                            <h6 class="property">My Email:</h6>
                                            <h5 class="value">{{ $infos->email}}</h5>
                                        </li>
                                        <li class="col">
                                            <h6 class="property">My Email:</h6>
                                            <h5 class="value">{{ $infos->address}}</h5>
                                        </li>
                                        <li class="col">
                                            <h6 class="property">Language:</h6>
                                            <h5 class="value"> {{ $infos->language}}</h5>
                                        </li>
                                        <li class="col">
                                            <h6 class="property">My Nationality:</h6>
                                            <h5 class="value"> {{ $infos->country}}</h5>
                                        </li>
                                    </ul>
                                </div>

                                <!-- my awards start  -->
                                <div class="tab-pane fade" id="pills-awards" role="tabpanel" aria-labelledby="pills-awards-tab" tabindex="0">
                                    <ul class="row gy-4 row-cols-2">
                                        @foreach ($awards as $award )
                                            <li class="col">
                                                <h6 class="property">{{ $award->year}}</h6>
                                                <h5 class="value">{{ $award->name}}</h5>
                                            </li>
                                        @endforeach
                         
                                    </ul>
                                </div>

                                <!-- my skills start  -->
                                <div class="tab-pane fade" id="pills-skills" role="tabpanel" aria-labelledby="pills-skills-tab" tabindex="0">

                                    @foreach ( $skills as $skill )
                                        <div class="skill">
                                            <div class="d-flex justify-content-between">
                                                <h5>{{$skill->name }}</h5>
                                                <h5>{{$skill->expertise}}%</h5>
                                            </div>
                                            <div class="progress" role="progressbar" aria-label="my skills" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar rounded-pill" style="width: {{$skill->expertise}}%"></div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-me end  -->

    <!-- all counter start -->
    <section class="counter-all">
        <div class="bg-img"></div>
        <div class="container">
            <div class="row g-4 gx-sm-3 gx-lg-5 row-cols-2 row-cols-md-4">
                <div class="col">
                    <div class="counter-box d-flex align-items-center">
                        <h1 class="value index-counter-value" data-target="{{$setting->projects}}">0</h1>
                        <h5 class="property">Projects Completed</h5>
                    </div>
                </div>
                <div class="col">
                    <div class="counter-box d-flex align-items-center">
                        <h1 class="value index-counter-value" data-target="{{$setting->happy_client}}">0</h1>
                        <h5 class="property">Our Happy Clients</h5>
                    </div>
                </div>
                <div class="col">
                    <div class="counter-box d-flex align-items-center">
                        <h1 class="value index-counter-value" data-target="{{$setting->coffe}}">0</h1>
                        <h5 class="property">Cup Of Coffee For Me</h5>
                    </div>
                </div>
                <div class="col">
                    <div class="counter-box d-flex align-items-center">
                        <h1 class="value index-counter-value" data-target="{{$setting->all_client}}">0</h1>
                        <h5 class="property">Clients Worked With Me</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- all counter end -->


    <!-- my services start  -->
    <section class="services">
        <div class="object-left"><img src="{{ asset('frontend/asset/img/service-object-one.png') }}" alt="..."></div>
        <div class="container">
            <!-- section heading start  -->
            <div class="section-heading d-flex justify-content-center">
                <div class="heading-style d-flex align-items-center">
                    <div class="left">
                        <div class="dot"></div>
                        <div class="dot"></div>
                    </div>
                    <div class="right">
                        <div class="dot"></div>
                        <div class="dot"></div>
                    </div>
                    <h2 class="sub-heading ms-2">My services</h2>
                </div>
            </div>
            <h1 class="heading text-center">What I Provide To My Client</h1>

            <div class="row g-3 g-lg-4 g-xl-5 mt-1 row-cols-1 row-cols-lg-2 services-card-wrap">

                @foreach ($services as $service )
                    
                <div class="col">
                    <!-- service-card start  -->
                    <div class="service-card p-sm-3 p-2 rounded d-flex border-0 position-relative">
                        <div class="ms-2 ms-sm-0 mt-sm-0 mt-3 m-sm-3">
                            <div class="icon-bg rounded-circle"><img style="width:60px" src="{{ $service->icon}}" class="img-fluid" alt="..."></div>
                        </div>

                        <div class="p-3">
                            <a href="#"><h5 class="title">{{ $service->name}}</h5></a>
                            <p class="text">{!! $service->description !!}</p>
                        </div>
                        <span class="card-number">{{ $loop ->index + 1}}</span>
                    </div>
                </div>

                @endforeach

            </div>

            <div class="text-center mt-4 mt-lg-5"><a href="{{ route('service') }}" class="btn btn-primary rounded-pill">view all my services</a></div>
        </div>

    </section>
    <!-- my services end -->


    <!-- portfolio slider start  -->
    <section class="my-works " >
        <div class="works-wrap">
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
                    <h2 class="sub-heading ms-2">My work</h2>
                </div>
            </div>

            <h1 class="heading mt-2">See My Portfolio</h1>

            <!-- portfolio slider start  -->
            <div class="slider-container overflow-x-hidden pt-4">
                <div class="slider-wrapper">

                    <!-- portfolio-card start  -->
                    @foreach ($projects as $project )
                        <div class="card portfolio-card border-0">
                            <img style="height:460px; width:420px" src="{{ $project->image_one }}" class="card-img rounded-0 text-center" alt="...">
                            <div class="card-img-overlay rounded-0">
                                <h5 class="sub-heading">UI Design <span class="ms-4">BRand Identity</span></h5>
                                <h2 class="title mt-4 mb-2 text-capitalize" >{{ $project->name}}</h2>
                                <p class="text mb-4">{!! $project->project_overview !!}</p>
                                <a href="#" class="text-uppercase link">View Case Study <i class="fa-solid fa-arrow-right-long ms-2"></i></a>
                            </div>
                        </div>
                    @endforeach
                   
                </div>
                <button class="prev-btn">&#8249;</button>
                <button class="next-btn">&#8250;</button>
            </div>
        </div>
    </section>

    <!-- my client start  -->
    <section class="my-clients">
        <div class="bg-object-right"><img src="{{ asset('frontend/asset/img/my-client-object-one.png') }}" alt="..."></div>
        <div class="container">

            <div class="row gx-4 gx-xl-5">
                <div class="col-12 col-md-6 order-2 order-md-1">
                    <div class="brand-wrap d-flex">
                        @foreach ($clients as $item)
                            <div class="brand-box">
                                @if ($loop->iteration % 2 == 0)
                                    <div class="brand d-flex justify-content-center align-items-center"><img src="{{ $item->image }}" width="80%" alt="brand">
                                    </div>
                                @else        
                                    <div class="brand d-flex justify-content-center align-items-center"><img src="{{ $item->image }}" style="width:900px" alt="brand">
                                    </div>
                                    
                                @endif
                           
                       
                            </div>

                            {{-- <div class="brand-box">
                                <div class="brand d-flex justify-content-center align-items-center"><img src="{{ $item->image }}" alt="brand"></div>
                                <div class="brand d-flex justify-content-center align-items-center"><img src="{{ asset('frontend/asset/img/brand/brand4.png') }}" alt="brand">
                                </div>
                            </div> --}}
                        @endforeach
                  
                        {{-- <div class="brand-box">
                            <div class="brand d-flex justify-content-center align-items-center"><img src="{{ asset('frontend/asset/img/brand/brand3.png') }}" alt="brand"></div>
                            <div class="brand d-flex justify-content-center align-items-center"><img src="{{ asset('frontend/asset/img/brand/brand4.png') }}" alt="brand"></div>
                        </div>
                        <div class="brand-box">
                            <div class="brand d-flex justify-content-center align-items-center"><img src="{{ asset('frontend/asset/img/brand/brand5.png') }}" alt="brand"></div>
                            <div class="brand d-flex justify-content-center align-items-center"><img src="{{ asset('frontend/asset/img/brand/brand6.png') }}" alt="brand"></div>
                        </div> --}}
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

                    <h1 class="heading mt-2">I Work With Over {{$setting->happy_client}}+ Happy Client</h1>

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
                            <img src="{{  $steps->logo_one }}" class="" alt="...">
                        </div>

                        <div class="card-body p-0">
                            <h5 class="title">Concept Creation</h5>
                            <p class="card-text">{!! $steps->description_one!!}</p>
                        </div>

                        <span class="card-number">01</span>
                    </div>

                    <div class="working-card card border-0">
                        <div class="card-img-wrap">
                            <img src="{{  $steps->logo_two }}" class="" alt="...">
                        </div>

                        <div class="card-body p-0">
                            <h5 class="title">Sketch Drawing</h5>
                            <p class="card-text">{!! $steps->description_two!!}</p>
                        </div>

                        <span class="card-number">02</span>
                    </div>

                    <div class="working-card card border-0">
                        <div class="card-img-wrap">
                            <img src="{{  $steps->logo_three }}" class="" alt="...">
                        </div>

                        <div class="card-body p-0">
                            <h5 class="title">Final Design</h5>
                            <p class="card-text">{!! $steps->description_two!!}</p>
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
        <div class="bg-object-right"><img src="{{asset('frontend/asset/img/pricing-object-one.png')}}" alt=""></div>
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
                                <img src="{{ asset('frontend/asset/img/pro.png') }}" alt="" style="margin-top: -10px;">
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
            <div class="section-heading d-flex justify-content-center">
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

            <h1 class="heading mt-2 text-center">What Client Sayâ€™s About Me</h1>
            <div class="text-end mb-2 mt-3 mt-lg-4"><a href="{{ route('testimonial') }}" class="text-link">See All</a></div>

            <div class="row row-cols-1 g-3 g-lg-4  row-cols-md-2 row-cols-lg-3">

                <!-- <div class="col">
                    <div class="testimonial-card">
                        <img src="asset/img/video-thum1.jpg" class="video-thum" alt="...">


                        <div class="btn-wrap">
                            <a href="#" class="testimonial-play-btn play-btn" title="Play Video"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                </div> -->

                <div class="col">
                    <div class="testimonial-card">
                        <img src="{{ asset('frontend/asset/img/video-thum1.jpg') }}" class="video-thum" alt="...">

                        <!-- btn play -->
                        <div class="btn-wrap">
                            <a href="#" class="open-popup play-btn " title="Play Video"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="testimonial-card">
                        <img src="{{ asset('frontend/asset/img/video-thum2.jpg') }}" class="video-thum" alt="...">

                        <!-- btn play -->
                        <div class="btn-wrap">
                            <a href="#" class="open-popup play-btn " title="Play Video"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="testimonial-card">
                        <img src="{{ asset('frontend/asset/img/video-thum3.jpg') }}" class="video-thum" alt="...">

                        <!-- btn play -->
                        <div class="btn-wrap">
                            <a href="#" class="open-popup play-btn " title="Play Video"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>



    <!-- popup start here  -->
     <!-- top popup video  -->
    <div id="top-video-popup" class="popup">
        <div class="popup-content">
            <span class="close-top-btn close"><i class="fa-solid fa-xmark"></i></span>

            <div class="video-wrap mt-5 ">
                <div class="ratio ratio-16x9   overflow-hidden">
                    <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY" title="YouTube video" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- testimonial popup video  -->
    <!-- <div id="testimonial-video-popup" class="testimonial-popup">
        <span class="close-testimonial-btn "><i class="fa-solid fa-xmark"></i></span>
        <div class="testimonial-popup-content">

            <div class="video-wrap ">
                <div class="ratio ratio-16x9   overflow-hidden">
                    <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY" title="YouTube video" allowfullscreen></iframe>
                </div>
            </div>

        </div>
    </div> -->

    <!-- testimonial popup video start -->
    <div id="testimonials-video-popup" class="testimonial-popup">
        <span class="close-testimonial-btn close-popup "><i class="fa-solid fa-xmark"></i></span>
        <div class="testimonial-popup-content">

            <div class="video-wrap ">
                <div class="ratio ratio-16x9   overflow-hidden">
                    <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY" title="YouTube video" allowfullscreen></iframe>
                </div>
            </div>

        </div>
    </div>


 </main>
<!-- main content end -->
@endsection
