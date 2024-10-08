@extends('frontend.layouts.master')
@section('content')
    <div class="main-wrapper">


        <!--page header section start-->
        <section class="page-header position-relative overflow-hidden ptb-120 bg-dark"
            style="background: url({{ asset('frontend/assets/img/page-header-bg.svg') }})no-repeat bottom left">
            {{-- <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-12">
                        <h1 class="fw-bold display-5">{{ $service->name }}</h1>
                    </div>
                </div>
                <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light right-5"></div>
            </div> --}}
        </section>

        <div class="container mt-3">
            <div class="row align-items-center">
                <div style="margin-top: 122px" class="col-lg-8 col-12">
                    <h1 class="fw-bold display-5">{{ $service->name }}</h1>
                </div>
            </div>
            <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light right-5"></div>
        </div>
        <!--page header section end-->

        <!--blog details section start-->
        <section class="blog-details ptb-120">
            <div class="container">
              
                <img src="{{ asset($service->image) }}" style="width:100%;height:400px;object-fit:cover" alt="">
                <div class="row justify-content-between">
                    <div class="col-lg-12 pe-lg-5">
                        <div class="blog-details-wrap mt-3 mb-3">
                            <p style="color:black">{!! $service->short_description !!}</p>
                        </div>
                        <div class="blog-details-wrap mt-3 mb-3">
                            <p style="color:black">{!! $service->description !!}</p>
                        </div>
                    </div>

                </div>
            </div>

        </section>
        <!--blog details section end-->






    </div>
@endsection
