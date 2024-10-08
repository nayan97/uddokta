@extends('frontend.layouts.master')
@section('content')
    <!--about header section start-->
    <section class="about-header-section ptb-120 position-relative overflow-hidden bg-dark"
        style="background: url({{ asset('frontend/assets/img/page-header-bg.svg') }})no-repeat center right">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading-wrap d-flex justify-content-between z-5 position-relative">
                        <div class="about-content-left">
                            <div class="about-info mb-5">
                                <h1 class="fw-bold display-5">Grow your Business & Customer Satisfaction with
                                    Quiety</h1>
                                <p class="lead">Dynamically disintermediate technically sound technologies with
                                    compelling quality vectors error-free communities. </p>
                                {{-- <a href="career.html" class="btn btn-primary mt-4 me-3">Open Positions</a>
                                <a href="#our-team" class="btn btn-soft-primary mt-4">Meet Our Team</a> --}}
                            </div>
                            <img src="{{ asset('frontend/assets/img/about-img-1.jpg') }}" alt="about"
                                class="img-fluid about-img-first mt-5 rounded-custom shadow">
                        </div>
                        <div class="about-content-right">
                            <img src="{{ asset('frontend/assets/img/about-img-2.jpg') }}" alt="about"
                                class="img-fluid mb-5 rounded-custom shadow">
                            <img src="{{ asset('frontend/assets/img/about-img-3.jpg') }}" alt="about"
                                class="rounded-custom about-img-last shadow">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white position-absolute bottom-0 h-25 bottom-0 left-0 right-0 z-2 py-5">
        </div>
    </section>
    <!--about header section end-->

    <!--our story section start-->
    <section class="our-story-section pt-60 pb-120"
        style="background: url({{ asset('frontend/assets/img/shape/dot-dot-wave-shape.svg') }})no-repeat left bottom">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5 col-md-12 order-lg-1">
                    <div class="section-heading sticky-sidebar">
                        <h4 class="h5 text-primary">Our Story</h4>
                        <h2>A Great Story Starts with a Friendly Team</h2>
                        <p>Globally e-enable principle-centered e-business before dynamic quality vectors cross-media
                            materials before proactive outsourcing leverage other's vertical technology leadership. </p>
                        <div class="mt-4">
                            <h6 class="mb-3">We Are Awarded By-</h6>
                            <img src="{{ asset('frontend/assets/img/awards-01.svg') }}" alt="awards" class="me-4 img-fluid">
                            <img src="{{ asset('frontend/assets/img/awards-02.svg') }}" alt="awards" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 order-lg-0">
                    <div class="story-grid-wrapper position-relative">
                        <!--animated shape start-->
                        <ul class="position-absolute animate-element parallax-element shape-service d-none d-lg-block">
                            <li class="layer" data-depth="0.02">
                                <img src="{{ asset('frontend/assets/img/color-shape/image-2.svg') }}" alt="shape"
                                    class="img-fluid position-absolute color-shape-2 z-5">
                            </li>
                            <li class="layer" data-depth="0.03">
                                <img src="{{ asset('frontend/assets/img/color-shape/feature-3.svg') }}" alt="shape"
                                    class="img-fluid position-absolute color-shape-3">
                            </li>
                        </ul>
                        <!--animated shape end-->
                        <div class="story-grid rounded-custom bg-dark overflow-hidden position-relative">
                            <div class="story-item bg-light-subtle border">
                                <h3 class="display-5 fw-bold mb-1 text-success">550K+</h3>
                                <h6 class="mb-0">Active Users</h6>
                            </div>
                            <div class="story-item bg-white border">
                                <h3 class="display-5 fw-bold mb-1 text-primary">250+</h3>
                                <h6 class="mb-0">Team Members</h6>
                            </div>
                            <div class="story-item bg-white border">
                                <h3 class="display-5 fw-bold mb-1 text-dark">$20M+</h3>
                                <h6 class="mb-0">Revenue Per/Year</h6>
                            </div>
                            <div class="story-item bg-light-subtle border">
                                <h3 class="display-5 fw-bold mb-1 text-warning">8 Years</h3>
                                <h6 class="mb-0">In Business</h6>
                            </div>
                            <div class="story-item bg-light-subtle border">
                                <h3 class="display-5 fw-bold mb-1 text-danger">425+</h3>
                                <h6 class="mb-0">Clients Worldwide</h6>
                            </div>
                            <div class="story-item bg-white border">
                                <h3 class="display-5 fw-bold mb-1 text-primary">855+</h3>
                                <h6 class="mb-0">Projects Completed</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--our story section end-->

    <!--feature section two start-->
    <section class="feature-section-two ptb-120 bg-light-subtle">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-12">
                    <div class="section-heading">
                        <h4 class="h5 text-primary">Our Values</h4>
                        <h2>The Core Values that Drive Everything</h2>
                        <p>Quickly incubate functional channels with multidisciplinary architectures. Authoritatively
                            fabricate formulate exceptional innovation.</p>
                        <ul class="list-unstyled mt-5">
                            <li class="d-flex align-items-start mb-4">
                                <div class="icon-box bg-primary rounded me-4">
                                    <i class="fas fa-bezier-curve text-white"></i>
                                </div>
                                <div class="icon-content">
                                    <h3 class="h5">Pixel Perfect Design</h3>
                                    <p>Progressively foster enterprise-wide systems whereas equity invested
                                        web-readiness harness installed.
                                    </p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start mb-4">
                                <div class="icon-box bg-danger rounded me-4">
                                    <i class="fas fa-fingerprint text-white"></i>
                                </div>
                                <div class="icon-content">
                                    <h3 class="h5">Unique &amp; Minimal Design</h3>
                                    <p>Dramatically administrate progressive metrics without error-free globally
                                        simplify standardized engineer efficient strategic.
                                    </p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start mb-4">
                                <div class="icon-box bg-dark rounded me-4">
                                    <i class="fas fa-cog text-white"></i>
                                </div>
                                <div class="icon-content">
                                    <h3 class="h5">Efficiency & Accountability</h3>
                                    <p>Objectively transition prospective collaboration and idea-sharing without focused
                                        maintain focused niche markets niches.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-7">
                    <div class="feature-img-wrap position-relative d-flex flex-column align-items-end">
                        <ul class="img-overlay-list list-unstyled position-absolute">
                            <li class="d-flex align-items-center bg-white rounded shadow-sm p-3">
                                <i class="fas fa-check bg-primary text-white rounded-circle"></i>
                                <h6 class="mb-0">Create a Free Account</h6>
                            </li>
                            <li class="d-flex align-items-center bg-white rounded shadow-sm p-3">
                                <i class="fas fa-check bg-primary text-white rounded-circle"></i>
                                <h6 class="mb-0">Install Our Tracking Pixel</h6>
                            </li>
                            <li class="d-flex align-items-center bg-white rounded shadow-sm p-3">
                                <i class="fas fa-check bg-primary text-white rounded-circle"></i>
                                <h6 class="mb-0">Start Tracking your Website</h6>
                            </li>
                        </ul>
                        <img src="{{ asset('frontend/assets/img/feature-img3.jpg') }}" alt="feature image" class="img-fluid rounded-custom">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--feature section two end-->

    <!--team section start-->
    <section id="our-team" class="team-section ptb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-12">
                    <div class="section-heading text-center">
                        <h5 class="h6 text-primary">Our Team</h5>
                        <h2>Meet Our Expertis</h2>

                    </div>
                </div>
            </div>
            <div class="row">
               @foreach ($teams as $team)
               <div class="col-lg-3 col-md-6">
                <div class="team-single-wrap mb-5">
                    <div class="team-img rounded-custom">
                        <img src="{{ asset($team->image) }}" alt="team" class="img-fluid position-relative" style="width:100%;height:261px;object-fit:cover">
                        <ul class="list-unstyled team-social-list d-flex flex-column mb-0">
                            <li class="list-inline-item"><a href="{{ $team->linkedin }}"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                            <li class="list-inline-item"><a href="{{ $team->twitter }}"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="{{ $team->instragram }}"><i class="fab fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="{{ $team->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-info mt-4 text-center">
                        <h5 class="h6 mb-1">{{ $team->name }}</h5>
                        <p class="text-muted small mb-0">{{ $team->designation }}</p>
                    </div>
                </div>
            </div>
               @endforeach

            </div>
        </div>
    </section>
    <!--team section end-->

    <!--testimonial section start-->
    <section class="testimonial-section ptb-120 ">
        <div class="container">
            <div class="row justify-content-center align-content-center">
                <div class="col-md-10 col-lg-6">
                    <div class="section-heading text-center">
                        <h4 class="h5 text-primary">Testimonial</h4>
                        <h2>What They Say About Us</h2>
                        <p>Appreciations From Our Satisfied Customers.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="position-relative w-100">
                        <div class="swiper testimonialSwiper">
                            <div class="swiper-wrapper">
                               @foreach ($testimonials as $testimonial)
                               <div class="swiper-slide">
                                <div class="border border-2 p-5 rounded-custom position-relative">
                                    <img src="{{ asset('frontend/assets/img/testimonial/quotes-dot.svg') }}" alt="quotes" width="100"
                                        class="img-fluid position-absolute left-0 top-0 z--1 p-3">
                                    <div class="d-flex mb-32 align-items-center">
                                        <img src="{{ asset($testimonial->image) }}" class="img-fluid me-3 rounded"
                                            width="60" alt="user">
                                        <div class="author-info">
                                            <h6 class="mb-0">{{ $testimonial->name }}</h6>
                                            <small>{{ $testimonial->designation }}</small>
                                        </div>
                                    </div>
                                    <blockquote>

                                        {{ $testimonial->message }}
                                    </blockquote>
                                    <ul class="review-rate mb-0 mt-2 list-unstyled list-inline">
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                    </ul>
                                    <img src="{{ asset('frontend/assets/img/testimonial/quotes.svg') }}" alt="quotes"
                                        class="position-absolute right-0 bottom-0 z--1 pe-4 pb-4">
                                </div>
                            </div>
                               @endforeach

                            </div>
                        </div>
                        <div class="swiper-nav-control">
                            <span class="swiper-button-next"></span>
                            <span class="swiper-button-prev"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!--testimonial section end-->

    <!--our location address start-->
    <section class="office-address-section ptb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-12">
                    <div class="section-heading text-center">
                        <h4 class="h5 text-primary">Our Office</h4>
                        <h2>Located Around the World</h2>
                        <p>Dynamically technically sound technologies with parallel task convergence quality vectors
                            through excellent relationships. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 mt-4 mt-lg-0 mt-xl-0">
                    <div class="rounded-custom border d-block office-address overflow-hidden z-2"
                        style="background: url('{{ asset('frontend/assets/img/office-img-1.jpg') }}')no-repeat center center / cover">
                        <div class="office-content text-center p-4">
                            <span class="office-overlay"></span>
                            <div class="office-info">
                                <h5>Singapore</h5>
                                <address>
                                    4636 Bombardier Way <br> Sr,Worthington, <br>California(CA), 94102
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-4 mt-lg-0 mt-xl-0">
                    <div class="rounded-custom border d-block office-address overflow-hidden z-2"
                        style="background: url({{ asset('frontend/assets/img/office-img-2.jpg') }})no-repeat center center / cover">
                        <div class="office-content text-center p-4">
                            <span class="office-overlay"></span>
                            <div class="office-info">
                                <h5>Los Angeles</h5>
                                <address>
                                    794 Mcallister <br> St. Oak Harbor, <br>Washington(WA), 98277
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-4 mt-lg-0 mt-xl-0">
                    <div class="rounded-custom border d-block office-address overflow-hidden z-2"
                        style="background: url({{ asset('frontend/assets/img/office-img-3.jpg') }})no-repeat center center / cover">
                        <div class="office-content text-center p-4">
                            <span class="office-overlay"></span>
                            <div class="office-info">
                                <h5>New York</h5>
                                <address>
                                    4219 Snowbird Lane <br> St Carthage, <br>New York(NY), 13619
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-4 mt-lg-0 mt-xl-0">
                    <div class="rounded-custom border d-block office-address overflow-hidden z-2"
                        style="background: url({{ asset('frontend/assets/img/office-img-5.jpg') }})no-repeat center center / cover">
                        <div class="office-content text-center p-4">
                            <span class="office-overlay"></span>
                            <div class="office-info">
                                <h5>Barlin City</h5>
                                <address>
                                    Brandenburgische Straße <br> DE. Berlin Kreuzberg, <br>Berlin(CA), 10997
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--our location address end-->


@endsection
