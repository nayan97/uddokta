@extends('admin.layouts.app')
@section('css')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
@endsection
@section('content')
<div class="app-content content" >
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

                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body" >
            <section id="basic-vertical-layouts">
                <div class="row match-height">
                    <div class="col-md-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Work step</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    @include('admin.layouts.notify')
                                    <form class="form form-vertical" action="{{ route('admin.workstep.store')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-body">
                                            <div class="row">

                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="contact-info-vertical">Frist Logo</label>
                                                        @if(!empty($datas->logo_one))
                                                        <img src="{{ asset($datas->logo_one) }}" style="width:80px;height:80px;margin-top:5px;margin-bottom:5px" alt="">
                                                        @endif
                                                        {{-- @if(!empty($personaldata->cover_photo))
                                                        <img src="{{ asset($personaldata->cover_photo) }}" style="width:80px;height:80px;margin-top:5px;margin-bottom:5px" alt="">
                                                        @endif --}}
                                                        <input type="file" id="contact-info-vertical" class="form-control" name="logo_one">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="contact-info-vertical">Second Logo</label>
                                                        @if(!empty($datas->logo_two))
                                                        <img src="{{ asset($datas->logo_two) }}" style="width:80px;height:80px;margin-top:5px;margin-bottom:5px" alt="">
                                                        @endif
                                                        <input type="file" id="contact-info-vertical" class="form-control" name="logo_two">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="contact-info-vertical">Third Logo</label>
                                                        @if(!empty($datas->logo_three))
                                                        <img src="{{ asset($datas->logo_three) }}" style="width:80px;height:80px;margin-top:5px;margin-bottom:5px" alt="">
                                                        @endif
                                                        <input type="file" id="contact-info-vertical" class="form-control" name="logo_three">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical">Sort Description One</label>
                                                        <textarea name="short_description_one" class="form-control">{{ $datas->description_one ??'' }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical">Sort Description Two</label>
                                                        <textarea name="short_description_two" class="form-control">{{ $datas->description_two ??'' }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical">Sort Description Three</label>
                                                        <textarea name="short_description_three" class="form-control">{{ $datas->description_three ??'' }}</textarea>
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
