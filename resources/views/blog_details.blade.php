@extends('frontend.layouts.master')
@section('content')
    <div class="main-wrapper">


        <!--page header section start-->
        <section class="page-header position-relative overflow-hidden ptb-120 bg-dark"
            style="background: url({{ asset('frontend/assets/img/page-header-bg.svg') }})no-repeat bottom left">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-12">
                        <h1 class="fw-bold display-5">{{ $blog->title }}</h1>
                    </div>
                </div>
                <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light right-5"></div>
            </div>
        </section>
        <!--page header section end-->

        <!--blog details section start-->
        <section class="blog-details ptb-120">
            <div class="container">
                <img src="{{ asset($blog->image) }}" style="width:100%;height:400px;object-fit:cover" alt="">
                <div class="row justify-content-between">
                    <div class="col-lg-12 pe-lg-5">
                       <div class="blog-details-wrap">
                          <p style="color:black">{!! $blog->description !!}</p>
                       </div>
                    </div>

                </div>
            </div>

        </section>
        <!--blog details section end-->

        <!--related blog start-->
        <section class="related-blog-list ptb-120 bg-light-subtle">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-4 col-md-12">
                        <div class="section-heading">
                            <h4 class="h5 text-primary">Related News</h4>
                            <h2>More Latest News and Blog at Quiety</h2>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <div class="text-start text-lg-end mb-4 mb-lg-0 mb-xl-0">
                            <a href="{{ route('blog') }}" class="btn btn-primary">View All Article</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($latest_blogs as $blog)
                        <div class="col-lg-4 col-md-6">
                            <div class="single-article rounded-custom mb-4 mb-lg-0">
                                <a href="blog-single.html" class="article-img">
                                    <img src="{{ asset($blog->image) }}" alt="article" class="img-fluid">
                                </a>
                                <div class="article-content p-4">
                                    <div class="article-category mb-4 d-block">
                                        <a href="javascript:;"
                                            class="d-inline-block text-warning badge bg-warning-soft">{{ $blog->blogcategory->name }}</a>
                                    </div>
                                    <a href="{{ route('blog.detail', $blog->slug) }}" style="height:50px">
                                        <h2 class="h5 article-title limit-2-line-text">
                                            {{ Illuminate\Support\Str::limit($blog->title, $limit = 50, $end = '...') }}</h2>
                                    </a>



                                    <div class="d-flex align-items-between justify-content-between pt-4">
                                        <div class="avatar">
                                            <a href="{{ route('blog.detail', $blog->slug) }}"
                                                class="btn btn-secondary btn-sm">Read More</a>
                                        </div>
                                        <div class="avatar-info">

                                            <span class="small fw-medium text-muted">{{ Carbon\Carbon::parse($blog->created_at)->format('M d,Y') }}</span>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
        <!--related blog end-->




    </div>
@endsection
