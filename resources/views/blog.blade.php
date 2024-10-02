@extends('frontend.layouts.master')
@section('content')
    <section class="page-header position-relative overflow-hidden ptb-120 bg-dark"
        style="background: url('assets/img/page-header-bg.svg')no-repeat bottom left">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <h1 class="display-5 fw-bold">Our Blogs</h1>
                    <p class="lead">Exploring The {{ $setting->site_name }} Blogs</p>
                </div>
            </div>
            <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light right-5"></div>
        </div>
    </section>
    <!--style guide block start-->




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

            </div>
            <div class="row">
                @foreach ($blogs as $blog)
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
    <!--style guide block end-->
@endsection
