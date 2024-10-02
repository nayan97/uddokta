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

            <div class="banner-bg-circle"><img src="{{ asset('frontend/asset/img/banner-bg-circle.png') }}" alt="banner-bg-circle"></div>

            <div class="container">
                <h1 class="heading text-center">My Portfolio</h1>
                <div class="text-center mt-4"><span class="btn-nav  rounded-pill text-uppercase ">home<i class="fa-solid fa-angle-right mx-2"></i>portfolio</span></div>
            </div>

        </section>
        <!-- top-banner end -->


        <section class="my-portfolio">
            <div class="container">
                <div class="portfolio-wrap">

                    <!-- project nav start -->
                    <div class="d-flex justify-content-center">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                              <button class="nav-link px-4 rounded-pill active" id="pill-all-tab" data-bs-toggle="pill" data-bs-target="#pill-all" type="button" role="tab" aria-controls="pill-all" aria-selected="true">All</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link px-4 rounded-pill" id="pill-graphics-tab" data-bs-toggle="pill" data-bs-target="#pill-graphics" type="button" role="tab" aria-controls="pill-graphics" aria-selected="false">Graphics Design</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link px-4 rounded-pill" id="pill-web-tab" data-bs-toggle="pill" data-bs-target="#pill-web" type="button" role="tab" aria-controls="pill-web" aria-selected="false">Web Development</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link px-4 rounded-pill" id="pill-mobile-tab" data-bs-toggle="pill" data-bs-target="#pill-mobile" type="button" role="tab" aria-controls="pill-mobile" aria-selected="false">Mobile App</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link px-4 rounded-pill" id="pill-motion-tab" data-bs-toggle="pill" data-bs-target="#pill-motion" type="button" role="tab" aria-controls="pill-motion" aria-selected="false">Motion Graphics</button>
                            </li>
                        </ul>
                    </div>

                      <!-- projects start  -->
                      <div class="tab-content mt-4" id="pills-tabContent">

                        <div class="tab-pane fade show active" id="pill-all" role="tabpanel" aria-labelledby="pill-all-tab" tabindex="0">
                            <div class="row g-4 row-cols-1 row-cols-md-2">

                                <div class="col">
                                    <!-- portfolio-card start  -->
                                    <div class="card portfolio-card border-0">
                                        <img src="{{ asset('frontend/asset/img/portfolio/portfolio1.jpg') }}" class="card-img rounded-0" alt="...">
                                        <div class="card-img-overlay rounded-0">
                                            <h5 class="sub-heading">UI Design <span class="ms-4">BRand Identity</span></h5>
                                            <h2 class="title mt-4 mb-2 text-capitalize" >Project Management Dashboard</h2>
                                            <p class="text mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet nihil architecto dicta modi itaque sequi aut!</p>
                                            <a href="#" class="text-uppercase link">View Case Study <i class="fa-solid fa-arrow-right-long ms-2"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card portfolio-card border-0">
                                        <img src="{{ asset('frontend/asset/img/portfolio/portfolio2.jpg') }}" class="card-img rounded-0" alt="...">
                                        <div class="card-img-overlay rounded-0">
                                            <h5 class="sub-heading">UI Design <span class="ms-4">BRand Identity</span></h5>
                                            <h2 class="title mt-4 mb-2 text-capitalize" >Architecharal Studio</h2>
                                            <p class="text mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet nihil architecto dicta modi itaque sequi aut!</p>
                                            <a href="#" class="text-uppercase link">View Case Study <i class="fa-solid fa-arrow-right-long ms-2"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card portfolio-card border-0">
                                        <img src="{{ asset('frontend/asset/img/portfolio/portfolio3.jpg') }}" class="card-img rounded-0" alt="...">
                                        <div class="card-img-overlay rounded-0">
                                            <h5 class="sub-heading">UI Design <span class="ms-4">BRand Identity</span></h5>
                                            <h2 class="title mt-4 mb-2 text-capitalize" >File Manager App</h2>
                                            <p class="text mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet nihil architecto dicta modi itaque sequi aut!</p>
                                            <a href="#" class="text-uppercase link">View Case Study <i class="fa-solid fa-arrow-right-long ms-2"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card portfolio-card border-0">
                                        <img src="{{ asset('frontend/asset/img/portfolio/portfolio4.jpg') }}" class="card-img rounded-0" alt="...">
                                        <div class="card-img-overlay rounded-0">
                                            <h5 class="sub-heading">UI Design <span class="ms-4">BRand Identity</span></h5>
                                            <h2 class="title mt-4 mb-2 text-capitalize" >File Manager App</h2>
                                            <p class="text mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet nihil architecto dicta modi itaque sequi aut!</p>
                                            <a href="#" class="text-uppercase link">View Case Study <i class="fa-solid fa-arrow-right-long ms-2"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card portfolio-card border-0">
                                        <img src="{{ asset('frontend/asset/img/portfolio/portfolio5.jpg') }}" class="card-img rounded-0" alt="...">
                                        <div class="card-img-overlay rounded-0">
                                            <h5 class="sub-heading">UI Design <span class="ms-4">BRand Identity</span></h5>
                                            <h2 class="title mt-4 mb-2 text-capitalize" >NFT Header Version</h2>
                                            <p class="text mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet nihil architecto dicta modi itaque sequi aut!</p>
                                            <a href="#" class="text-uppercase link">View Case Study <i class="fa-solid fa-arrow-right-long ms-2"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card portfolio-card border-0">
                                        <img src="{{asset('frontend/asset/img/portfolio/portfolio4.jpg')}}" class="card-img rounded-0" alt="...">
                                        <div class="card-img-overlay rounded-0">
                                            <h5 class="sub-heading">UI Design <span class="ms-4">BRand Identity</span></h5>
                                            <h2 class="title mt-4 mb-2 text-capitalize" >File Manager App</h2>
                                            <p class="text mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet nihil architecto dicta modi itaque sequi aut!</p>
                                            <a href="#" class="text-uppercase link">View Case Study <i class="fa-solid fa-arrow-right-long ms-2"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card portfolio-card border-0">
                                        <img src="{{asset('frontend/asset/img/portfolio/portfolio5.jpg')}}" class="card-img rounded-0" alt="...">
                                        <div class="card-img-overlay rounded-0">
                                            <h5 class="sub-heading">UI Design <span class="ms-4">BRand Identity</span></h5>
                                            <h2 class="title mt-4 mb-2 text-capitalize" >NFT Header Version</h2>
                                            <p class="text mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet nihil architecto dicta modi itaque sequi aut!</p>
                                            <a href="#" class="text-uppercase link">View Case Study <i class="fa-solid fa-arrow-right-long ms-2"></i></a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="tab-pane fade" id="pill-graphics" role="tabpanel" aria-labelledby="pill-graphics-tab" tabindex="0">
                            <div class="row g-4 row-cols-1 row-cols-md-2">

                                <div class="col">
                                    <div class="card portfolio-card border-0">
                                        <img src="{{asset('frontend/asset/img/portfolio/portfolio5.jpg')}}" class="card-img rounded-0" alt="...">
                                        <div class="card-img-overlay rounded-0">
                                            <h5 class="sub-heading">UI Design <span class="ms-4">BRand Identity</span></h5>
                                            <h2 class="title mt-4 mb-2 text-capitalize" >NFT Header Version</h2>
                                            <p class="text mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet nihil architecto dicta modi itaque sequi aut!</p>
                                            <a href="#" class="text-uppercase link">View Case Study <i class="fa-solid fa-arrow-right-long ms-2"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card portfolio-card border-0">
                                        <img src="{{asset('frontend/asset/img/portfolio/portfolio4.jpg')}}" class="card-img rounded-0" alt="...">
                                        <div class="card-img-overlay rounded-0">
                                            <h5 class="sub-heading">UI Design <span class="ms-4">BRand Identity</span></h5>
                                            <h2 class="title mt-4 mb-2 text-capitalize" >File Manager App</h2>
                                            <p class="text mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet nihil architecto dicta modi itaque sequi aut!</p>
                                            <a href="#" class="text-uppercase link">View Case Study <i class="fa-solid fa-arrow-right-long ms-2"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card portfolio-card border-0">
                                        <img src="{{asset('frontend/asset/img/portfolio/portfolio5.jpg')}}" class="card-img rounded-0" alt="...">
                                        <div class="card-img-overlay rounded-0">
                                            <h5 class="sub-heading">UI Design <span class="ms-4">BRand Identity</span></h5>
                                            <h2 class="title mt-4 mb-2 text-capitalize" >NFT Header Version</h2>
                                            <p class="text mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet nihil architecto dicta modi itaque sequi aut!</p>
                                            <a href="#" class="text-uppercase link">View Case Study <i class="fa-solid fa-arrow-right-long ms-2"></i></a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="tab-pane fade" id="pill-web" role="tabpanel" aria-labelledby="pill-web-tab" tabindex="0">
                            <div class="row g-4 row-cols-1 row-cols-md-2">

                                <div class="col">
                                    <div class="card portfolio-card border-0">
                                        <img src="{{asset('frontend/asset/img/portfolio/portfolio4.jpg')}}" class="card-img rounded-0" alt="...">
                                        <div class="card-img-overlay rounded-0">
                                            <h5 class="sub-heading">UI Design <span class="ms-4">BRand Identity</span></h5>
                                            <h2 class="title mt-4 mb-2 text-capitalize" >File Manager App</h2>
                                            <p class="text mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet nihil architecto dicta modi itaque sequi aut!</p>
                                            <a href="#" class="text-uppercase link">View Case Study <i class="fa-solid fa-arrow-right-long ms-2"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card portfolio-card border-0">
                                        <img src="{{asset('frontend/asset/img/portfolio/portfolio5.jpg')}}" class="card-img rounded-0" alt="...">
                                        <div class="card-img-overlay rounded-0">
                                            <h5 class="sub-heading">UI Design <span class="ms-4">BRand Identity</span></h5>
                                            <h2 class="title mt-4 mb-2 text-capitalize" >NFT Header Version</h2>
                                            <p class="text mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet nihil architecto dicta modi itaque sequi aut!</p>
                                            <a href="#" class="text-uppercase link">View Case Study <i class="fa-solid fa-arrow-right-long ms-2"></i></a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="tab-pane fade" id="pill-mobile" role="tabpanel" aria-labelledby="pill-mobile-tab" tabindex="0">
                            <div class="row g-4 row-cols-1 row-cols-md-2">

                                <div class="col">
                                    <div class="card portfolio-card border-0">
                                        <img src="{{asset('frontend/asset/img/portfolio/portfolio4.jpg')}}" class="card-img rounded-0" alt="...">
                                        <div class="card-img-overlay rounded-0">
                                            <h5 class="sub-heading">UI Design <span class="ms-4">BRand Identity</span></h5>
                                            <h2 class="title mt-4 mb-2 text-capitalize" >File Manager App</h2>
                                            <p class="text mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet nihil architecto dicta modi itaque sequi aut!</p>
                                            <a href="#" class="text-uppercase link">View Case Study <i class="fa-solid fa-arrow-right-long ms-2"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card portfolio-card border-0">
                                        <img src="{{asset('frontend/asset/img/portfolio/portfolio5.jpg')}}" class="card-img rounded-0" alt="...">
                                        <div class="card-img-overlay rounded-0">
                                            <h5 class="sub-heading">UI Design <span class="ms-4">BRand Identity</span></h5>
                                            <h2 class="title mt-4 mb-2 text-capitalize" >NFT Header Version</h2>
                                            <p class="text mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet nihil architecto dicta modi itaque sequi aut!</p>
                                            <a href="#" class="text-uppercase link">View Case Study <i class="fa-solid fa-arrow-right-long ms-2"></i></a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="pill-motion" role="tabpanel" aria-labelledby="pill-motion-tab" tabindex="0">
                            <div class="row g-4 row-cols-1 row-cols-md-2">

                                <div class="col">
                                    <div class="card portfolio-card border-0">
                                        <img src="{{asset('frontend/asset/img/portfolio/portfolio4.jpg')}}" class="card-img rounded-0" alt="...">
                                        <div class="card-img-overlay rounded-0">
                                            <h5 class="sub-heading">UI Design <span class="ms-4">BRand Identity</span></h5>
                                            <h2 class="title mt-4 mb-2 text-capitalize" >File Manager App</h2>
                                            <p class="text mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet nihil architecto dicta modi itaque sequi aut!</p>
                                            <a href="#" class="text-uppercase link">View Case Study <i class="fa-solid fa-arrow-right-long ms-2"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card portfolio-card border-0">
                                        <img src="{{asset('frontend/asset/img/portfolio/portfolio5.jpg')}}" class="card-img rounded-0" alt="...">
                                        <div class="card-img-overlay rounded-0">
                                            <h5 class="sub-heading">UI Design <span class="ms-4">BRand Identity</span></h5>
                                            <h2 class="title mt-4 mb-2 text-capitalize" >NFT Header Version</h2>
                                            <p class="text mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet nihil architecto dicta modi itaque sequi aut!</p>
                                            <a href="#" class="text-uppercase link">View Case Study <i class="fa-solid fa-arrow-right-long ms-2"></i></a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                      </div>
                </div>
            </div>
        </section>



     </main>
    <!-- main content end -->
@endsection
