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
                {{-- <div class="portfolio-wrap">

                    <!-- project nav start -->
                    <div class="d-flex justify-content-center">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                              <button class="nav-link px-4 rounded-pill active" id="pill-all-tab" data-bs-toggle="pill" data-bs-target="#pill-all" type="button" role="tab" aria-controls="pill-all" aria-selected="true">All</button>
                            </li>
                            @foreach ($project_categories as $item )
                            <li class="nav-item" role="presentation">
                                <button class="nav-link px-4 rounded-pill" id="pill-{{ $item->id }}" data-bs-toggle="pill" data-bs-target="#pill-{{ $item->slug }}" type="button" role="tab" aria-controls="pill-graphics" aria-selected="false">{{ $item->name }}</button>
                              </li>
                            @endforeach
                       
                        </ul>
                    </div>

                      <!-- projects start  -->
                      <div class="tab-content mt-4" id="pills-tabContent">

                        @foreach ($project_categories as $projectCat )
                            <div class="tab-pane fade show @if($loop->first) active @endif" id="pill-{{ $projectCat->slug}}" role="tabpanel" aria-labelledby="pill-all-tab" tabindex="0">
                                <div class="row g-4 row-cols-1 row-cols-md-2">

                                    <div class="col">
                                        <!-- portfolio-card start  -->
                                        @foreach ($projects as $project )
                                         @if ( $project->project_category->slug == $projectCat->slug)
                                            <div class="card portfolio-card border-0">
                                                <img src="{{$project->image_one}}" class="card-img rounded-0" alt="...">
                                                <div class="card-img-overlay rounded-0">
                                                    <h5 class="sub-heading">{{$project->name}}<span class="ms-4">BRand Identity</span></h5>
                                                    <h2 class="title mt-4 mb-2 text-capitalize" >Project Management Dashboard</h2>
                                                    <p class="text mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet nihil architecto dicta modi itaque sequi aut!</p>
                                                    <a href="{{route('project.details', $project->slug)}}" class="text-uppercase link">View Case Study <i class="fa-solid fa-arrow-right-long ms-2"></i></a>
                                                </div>
                                            </div>
                                          @endif
                                        @endforeach
                                        
                                    </div>

                        

                                </div>
                            </div>

                        @endforeach
                     
       
         
               

                      </div>
                </div> --}}
                <div class="portfolio-wrap">

                    <!-- project nav start -->
                    <div class="d-flex justify-content-center">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link px-4 rounded-pill active" id="pill-all-tab" data-bs-toggle="pill" data-bs-target="#pill-all" type="button" role="tab" aria-controls="pill-all" aria-selected="true">All</button>
                            </li>
                            @foreach ($project_categories as $item)
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link px-4 rounded-pill" id="pill-{{ $item->slug }}-tab" data-bs-toggle="pill" data-bs-target="#pill-{{ $item->slug }}" type="button" role="tab" aria-controls="pill-{{ $item->slug }}" aria-selected="false">{{ $item->name }}</button>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                
                    <!-- projects start  -->
                    <div class="tab-content mt-4" id="pills-tabContent">
                        <!-- "All" tab panel start -->
                        <div class="tab-pane fade show active" id="pill-all" role="tabpanel" aria-labelledby="pill-all-tab">
                            <div class="row g-4 row-cols-1 row-cols-md-2">
                                @foreach ($projects as $project)
                                    <div class="col">
                                        <!-- portfolio-card start -->
                                        <div class="card portfolio-card border-0">
                                            <img style="width: 636px; height:596px" src="{{$project->image_one}}" class="card-img rounded-0" alt="...">
                                            <div class="card-img-overlay rounded-0">
                                                <h5 class="sub-heading">{{$project->name}}<span class="ms-4">BRand Identity</span></h5>
                                                <h2 class="title mt-4 mb-2 text-capitalize">Project Management Dashboard</h2>
                                                <p class="text mb-4">{!! Str::words($project->short_description, 50, ' .....') !!}</p>
                                                <a href="{{route('project.details', $project->slug)}}" class="text-uppercase link">View Case Study <i class="fa-solid fa-arrow-right-long ms-2"></i></a>
                                            </div>
                                        </div>
                                        <!-- portfolio-card end -->
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- "All" tab panel end -->
                
                        <!-- Individual project category tabs start -->
                        @foreach ($project_categories as $projectCat)
                            <div class="tab-pane fade" id="pill-{{ $projectCat->slug }}" role="tabpanel" aria-labelledby="pill-{{ $projectCat->slug }}-tab">
                                <div class="row g-4 row-cols-1 row-cols-md-2">
                                    @foreach ($projects as $project)
                                        @if ($project->project_category->slug == $projectCat->slug)
                                            <div class="col">
                                                <!-- portfolio-card start -->
                                                <div class="card portfolio-card border-0">
                                                    <img  style="width: 636px; height:596px" src="{{$project->image_one}}" class="card-img rounded-0" alt="...">
                                                    <div class="card-img-overlay rounded-0">
                                                        <h5 class="sub-heading">{{$project->name}}<span class="ms-4">BRand Identity</span></h5>
                                                        <h2 class="title mt-4 mb-2 text-capitalize">Project Management Dashboard</h2>
                                                        <p class="text mb-4">{!! Str::words($project->short_description, 50, ' .....') !!}</p>
                                                        <a href="{{route('project.details', $project->slug)}}" class="text-uppercase link">View Case Study <i class="fa-solid fa-arrow-right-long ms-2"></i></a>
                                                    </div>
                                                </div>
                                                <!-- portfolio-card end -->
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                        <!-- Individual project category tabs end -->
                    </div>
                </div>
                
            </div>
        </section>



     </main>
    <!-- main content end -->
@endsection
