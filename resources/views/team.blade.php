@extends('frontend.layouts.master')
@section('content')
    <section class="breadcrumbs">
        <div class="breadcrumb-sm-images">
            <div class="inner-banner-1 magnetic-item">
                <img src="{{ asset('frontend/assets/img/inner-pages/inner-banner-1.png') }}" alt>
            </div>
            <div class="inner-banner-2 magnetic-item">
                <img src="{{ asset('frontend/assets/img/inner-pages/inner-banner-2.png') }}" alt>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrapper">
                        <div class="breadcrumb-cnt">
                            <span>Team</span>
                            <h1>"Meet Our Expertis"</h1>
                            <div class="breadcrumb-list">
                                <a href="index.html">Home</a><img
                                    src="{{ asset('frontend/assets/img/inner-pages/breadcrumb-arrow.svg') }}" alt>
                                Team
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="home3-team-area sec-mar">
        <div class="container">
            <div class="row g-4 justify-content-center">
                @foreach ($teams as $team)
                    <div class="col-xl-3 col-lg-4 col-md-6 wow animate fadeInUp" data-wow-delay="200ms"
                        data-wow-duration="1500ms">
                        <div class="single-team magnetic-item">
                            <div class="team-img">
                                <img class="img-fluid" src="{{ asset($team->image) }}" style="height:231px;object-fit:cover"
                                    alt>
                                <div class="social-area">
                                    <ul>
                                        <li><a href="{{ $team->facebook }}"><i class="bx bxl-facebook"></i></a></li>
                                        <li><a href="{{ $team->twitter }}"><i class="bx bxl-twitter"></i></a></li>
                                        <li><a href="{{ $team->linkedin }}"><i class="bx bxl-linkedin"></i></a>
                                        </li>
                                        <li><a href="{{ $team->instagram }}"><i class="bx bxl-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content">
                                <h5>{{ $team->name }}</h5>
                                <span>{{ $team->designation }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>
@endsection
