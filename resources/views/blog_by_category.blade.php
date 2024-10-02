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

                        <h1>{{ $blog_category->name }}</h1>
                        <div class="breadcrumb-list">
                            <a href="{{ route('home') }}" class="fs-4">Home</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="blog-banner sec-mar">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="blog-banner-wrap">
                    <div class="banner-img">
                        <img src="{{ asset('frontend/assets/img/inner-pages/blog-banner.png') }}" alt>
                    </div>
                    <div class="banner-content">
                        <h2>Blog</h2>
                        <p>Join 100+ Subscribers</p>
                        <form action="{{ route('subscribe.submit') }}" method="POST">
                            @csrf
                            <div class="form-inner">
                                <input type="text" placeholder="Email here..." name="email" required>
                                <button type="submit">
                                    Subscribe
                                    <svg width="12" height="12" viewbox="0 0 13 13" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 1H12M12 1V13M12 1L0.5 12"></path>
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="home3-blog-area sec-mar">
    <div class="container">
        <div class="row g-lg-4 gy-5">
            <div class="col-lg-8">
                <div class="row g-lg-4 gy-5">
                   @foreach ($blogs as $blog)
                   <div class="col-md-6 wow animate fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="single-blog magnetic-item">
                        <div class="blog-img">
                            <img class="img-fluid" src="{{ asset($blog->image) }}" style="height:217.04px" alt>
                            <div class="blog-tag">
                                <a>{{ $blog->blogcategory->name }}</a>
                            </div>
                        </div>
                        <div class="blog-content">
                            <ul class="blog-meta">
                                <li><a>{{ \Carbon\Carbon::parse($blog->created_at)->format('M d, Y')}}</a></li>

                            </ul>
                            <h4 style="height:160px"><a href="{{ route('blog.detail',$blog->slug) }}">{{ $blog->title }}</a>
                            </h4>
                            <div class="blog-footer">
                                <div class="read-btn">
                                    <a href="{{ route('blog.detail',$blog->slug) }}">Read More
                                        <svg width="12" height="12" viewbox="0 0 13 13" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 1H12M12 1V13M12 1L0.5 12"></path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="social-area">
                                    <ul>
                                        <li><a href="https://www.facebook.com/"><i
                                                    class="bx bxl-facebook"></i></a></li>
                                        <li><a href="https://twitter.com/"><i class="bx bxl-twitter"></i></a>
                                        </li>
                                        <li><a href="https://www.pinterest.com/"><i
                                                    class="bx bxl-pinterest-alt"></i></a></li>
                                        <li><a href="https://www.instagram.com/"><i
                                                    class="bx bxl-instagram"></i></a></li>
                                    </ul>
                                    <span><img src="{{ asset('frontend/assets/img/home-3/plain-icon.svg') }}" alt></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                   @endforeach

                </div>
                <div class="row">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            {{-- Previous Page Link --}}
                            @if ($blogs->onFirstPage())
                                <li class="page-item disabled">
                                    <span class="page-link"><i class="bi bi-arrow-left"></i></span>
                                </li>
                            @else
                                <li class="page-item">
                                    <a class="page-link" href="{{ $blogs->previousPageUrl() }}" rel="prev">
                                        <i class="bi bi-arrow-left"></i>
                                    </a>
                                </li>
                            @endif

                            {{-- Pagination Elements --}}
                            @for ($page = 1; $page <= $blogs->lastPage(); $page++)
                                @if ($page == $blogs->currentPage())
                                    <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
                                @else
                                    <li class="page-item"><a class="page-link" href="{{ $blogs->url($page) }}">{{ $page }}</a></li>
                                @endif
                            @endfor

                            {{-- Next Page Link --}}
                            @if ($blogs->hasMorePages())
                                <li class="page-item">
                                    <a class="page-link" href="{{ $blogs->nextPageUrl() }}" rel="next">
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                </li>
                            @else
                                <li class="page-item disabled">
                                    <span class="page-link"><i class="bi bi-arrow-right"></i></span>
                                </li>
                            @endif
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="widget-area">

                    <div class="single-widgets widget_egns_categoris">
                        <div class="widget-title">
                            <h4>Category</h4>
                        </div>
                        <ul class="wp-block-categoris-cloud">
                            @foreach ($blog_categories as $blog_cat)
                            <li><a href="{{ route('blog.by.category',$blog_cat->slug) }}"><span>{{ $blog_cat->name }}</span> <span
                                class="number-of-categoris">({{ $blog_cat->blogs->count() }})</span></a></li>
                            @endforeach

                        </ul>
                    </div>
                    <div class="single-widgets widget_egns_recent_post">
                        <div class="widget-title">
                            <h4>Newest Posts</h4>
                        </div>
                        <div class="recent-post-wraper">
                          @foreach ($latest_blogs as $latest_blog)
                          <div class="widget-cnt">
                            <div class="wi">
                                <a href="{{ route('blog.detail',$latest_blog->slug) }}"><img src="{{ asset($latest_blog->image) }}"
                                        alt="image"></a>
                            </div>
                            <div class="wc">
                                <h6><a  href="{{ route('blog.detail',$latest_blog->slug) }}">{{ $latest_blog->title }}</a>
                                </h6>
                                <a>{{ \Carbon\Carbon::parse($latest_blog->created_at)->format('M d, Y')}}</a>
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
@endsection
