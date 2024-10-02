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
            <div class="banner-bg-circle"><img src="{{ asset('frontend/asset/img/banner-bg-circle.png') }}"
                    alt="banner-bg-circle"></div>

            <div class="container">
                <h1 class="heading text-center">Testimonials</h1>
                <div class="text-center mt-4"><span class="btn-nav  rounded-pill text-uppercase ">home<i
                            class="fa-solid fa-angle-right mx-2"></i>Testimonials</span></div>
            </div>

        </section>
        <!-- top-banner end -->
        <!-- testimonials start  -->
        <section class="testimonials">
            <div class="container">
                <div class="row row-cols-1 g-3 g-lg-4  row-cols-md-2 row-cols-lg-3">

                    <div class="col">
                        <div class="testimonial-card">
                            <img src="{{ asset('frontend/asset/img/video-thum1.jpg') }}" class="video-thum" alt="...">

                            <!-- btn play -->
                            <div class="btn-wrap">
                                <a href="#" class="open-popup play-btn " title="Play Video"><i
                                        class="fa-brands fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="testimonial-card">
                            <img src="{{ asset('frontend/asset/img/video-thum2.jpg') }}" class="video-thum" alt="...">

                            <!-- btn play -->
                            <div class="btn-wrap">
                                <a href="#" class="open-popup play-btn " title="Play Video"><i
                                        class="fa-brands fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="testimonial-card">
                            <img src="{{ asset('frontend/asset/img/video-thum3.jpg') }}" class="video-thum" alt="...">

                            <!-- btn play -->
                            <div class="btn-wrap">
                                <a href="#" class="open-popup play-btn " title="Play Video"><i
                                        class="fa-brands fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="testimonial-card">
                            <img src="{{ asset('frontend/asset/img/video-thum4.jpg') }}" class="video-thum" alt="...">

                            <!-- btn play -->
                            <div class="btn-wrap">
                                <a href="#" class="open-popup play-btn " title="Play Video"><i
                                        class="fa-brands fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="testimonial-card">
                            <img src="{{ asset('frontend/asset/img/video-thum5.jpg') }}" class="video-thum" alt="...">

                            <!-- btn play -->
                            <div class="btn-wrap">
                                <a href="#" class="open-popup play-btn " title="Play Video"><i
                                        class="fa-brands fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="testimonial-card">
                            <img src="{{ asset('frontend/asset/img/video-thum6.jpg') }}" class="video-thum" alt="...">

                            <!-- btn play -->
                            <div class="btn-wrap">
                                <a href="#" class="open-popup play-btn " title="Play Video"><i
                                        class="fa-brands fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="testimonial-card">
                            <img src="{{ asset('frontend/asset/img/video-thum7.jpg') }}" class="video-thum" alt="...">

                            <!-- btn play -->
                            <div class="btn-wrap">
                                <a href="#" class="open-popup play-btn " title="Play Video"><i
                                        class="fa-brands fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="testimonial-card">
                            <img src="{{ asset('frontend/asset/img/video-thum8.jpg') }}" class="video-thum" alt="...">

                            <!-- btn play -->
                            <div class="btn-wrap">
                                <a href="#" class="open-popup play-btn " title="Play Video"><i
                                        class="fa-brands fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="testimonial-card">
                            <img src="{{ asset('frontend/asset/img/video-thum9.jpg') }}" class="video-thum" alt="...">

                            <!-- btn play -->
                            <div class="btn-wrap">
                                <a href="#" class="open-popup play-btn " title="Play Video"><i
                                        class="fa-brands fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </section>
        <!-- testimonials end -->


        <!-- testimonial popup video start -->
        <div id="testimonials-video-popup" class="testimonial-popup">
            <span class="close-testimonial-btn close-popup "><i class="fa-solid fa-xmark"></i></span>
            <div class="testimonial-popup-content">

                <div class="video-wrap ">
                    <div class="ratio ratio-16x9   overflow-hidden">
                        <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY" title="YouTube video"
                            allowfullscreen></iframe>
                    </div>
                </div>

            </div>
        </div>



    </main>
    <!-- main content end -->
@endsection
