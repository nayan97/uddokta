@extends('frontend.layouts.master')
@section('content')
    <divclass="main-wrapper">


        <!--page header section start-->
        <section class="page-header position-relative overflow-hidden ptb-120 bg-dark"
            style="background: url({{ asset('frontend/assets/img/page-header-bg.svg') }})no-repeat bottom left">
            {{-- <div class="container">
                <div class="row align-items-center">
                    <div style="margin-top: 122px" class="col-lg-8 col-12">
                        <h1 class="fw-bold display-5">{{ $project->name }}</h1>
                    </div>
                </div>
                <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light right-5"></div>
            </div> --}}
        </section>
        <!--page header section end-->
        <div class="container mt-3">
            <div class="row align-items-center">
                <div style="margin-top: 122px" class="col-lg-8 col-12">
                    <h1 class="fw-bold display-5">{{ $project->name }}</h1>
                </div>
            </div>
            <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light right-5"></div>
        </div>
    <!--page header section end-->

        <!--blog details section start-->
        <section class="blog-details ptb-120">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <img src="{{ asset($project->image_one) }}" class="mb-2"
                            style="width:100%;height:400px;object-fit:cover" alt="">
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <img src="{{ asset($project->image_two) }}" class="mb-2"
                                    style="width:100%;height:400px;object-fit:cover" alt="">
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <img src="{{ asset($project->image_three) }}" class="mb-2"
                                    style="width:100%;height:400px;object-fit:cover" alt="">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-md-8 pe-lg-5 col-12">
                        <div class="blog-details-wrap">
                            <p style="color:black">{!! $project->project_overview !!}</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="card border-0 shadow-lg text-center">

                            <div class="card-body">
                                <h5 class="mt-2">Client</h5>
                                <p>{{ $project->client }}</p>
                                <hr>
                                <h5 class="mt-2">Company Name</h5>
                                <p>{{ $project->company }}</p>
                                <hr>

                                <h5 class="mt-2">Location</h5>
                                <p>{{ $project->location }}</p>
                                <hr>
                                <h5 class="mt-2">Project Type</h5>
                                <p>{{ $project->project_type }}</p>
                                <hr>
                                <h5 class="mt-2">Duration</h5>
                                <p>{{ $project->duration }}</p>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </section>
        <!--blog details section end-->





    </divclass=>
@endsection
