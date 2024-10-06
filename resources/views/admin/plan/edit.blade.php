@extends('admin.layouts.app')
@section('css')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
@endsection
@section('content')
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item active"><a href="{{route('admin.priceplan.index')}}">Edit Price Plan</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <section id="basic-vertical-layouts">
                <div class="row match-height">
                    <div class="col-md-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Edit Price Plan</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    @include('admin.layouts.notify')
                                    <form class="form form-vertical" action="{{route('admin.priceplan.update',$data->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="password-vertical">Name</label>
                                                        <input type="text" class="form-control" name="name" value="{{ $data->name }}">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="password-vertical">Sub Title</label>
                                                        <input type="text" class="form-control" name="sub_title" value="{{ $data->sub_title }}">
                                                    </div>
                                                </div>        
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="password-vertical">Price</label>
                                                        <input type="number" class="form-control" name="price" value="{{ $data->price }}">
                                                    </div>
                                                </div>
                                   
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="password-vertical">Package Title</label>
                                                        <input type="text" class="form-control" name="pack_title" value="{{ $data->pack_title }}">
                                                    </div>
                                                </div> 
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="password-vertical">Analytics Campaigns</label>
                                                        <input type="number" class="form-control" name="analytics_campaigns" value="{{ $data->analytics_campaigns }}">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="password-vertical">Keywords</label>
                                                        <input type="number" class="form-control" name="keywords" value="{{ $data->keywords }}">
                                                    </div>
                                                </div>    <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="password-vertical">Social_media_reviews</label>
                                                        <input type="number" class="form-control" name="social_media_reviews" value="{{ $data->social_media_reviews }}">
                                                    </div>
                                                </div>    
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="password-vertical">Free optimizations</label>
                                                        <input type="number" class="form-control" name="free_optimizations" value="{{ $data->free_optimizations }}">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="password-vertical">Support</label>
                                                        <input type="number" class="form-control" name="support_247" value="{{ $data->support_247 }}">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="password-vertical">Offer Tag</label>
                                                        <input type="text" class="form-control" name="offer_tag" value="{{ $data->offer_tag }}">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="contact-info-vertical">Image</label>
                                                        @if(!empty($data->image))
                                                        <img src="{{ asset($data->image) }}" style="width:80px;height:80px;margin-top:5px;margin-bottom:5px" alt="">
                                                        <input name="image" type="hidden" value="{{ $data->image}}">
                                                        @else
                                                        @endif
                                                        <input type="file" id="contact-info-vertical" class="form-control" name="image">
                                                
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <button type="submit" class="btn btn-primary mr-1 mb-1">Save</button>
                                                    <button type="reset" class="btn btn-outline-warning mr-1 mb-1">Reset</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection
@section('script')
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

<script>

  </script>


@endsection





