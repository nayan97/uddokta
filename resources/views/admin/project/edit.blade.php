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
                                <li class="breadcrumb-item active"><a href="{{route('admin.project.index')}}">Project</a>
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
                                <h4 class="card-title">Edit Project</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    @include('admin.layouts.notify')
                                    <form class="form form-vertical" action="{{route('admin.project.update',$data->id)}}" method="POST" enctype="multipart/form-data">
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
                                                        <label for="password-vertical">Project Category</label>
                                                        <select name="project_category_id" id="" class="form-control" required>
                                                            <option value="" selected disabled>--Select--</option>
                                                            @foreach ($project_categories as $item)
                                                                <option value="{{$item->id}}" {{ $item->id == $data->project_category_id ?'selected':'' }}>{{$item->name}}</option>
                                                            @endforeach

                                                        </select>
                                                    </div>
                                                </div>


                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical">Project Overview </label>
                                                        <textarea type="text" id="summernote"  class="form-control" name="project_overview" placeholder="Project Overview">{!! $data->project_overview !!}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="contact-info-vertical">Image One</label><br>
                                                        @if($data->image_one)
                                                          <img src="{{ asset($data->image_one) }}" style="width:100px" alt="">
                                                        @endif
                                                        <input type="file" id="contact-info-vertical" class="form-control" name="image_one">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="contact-info-vertical">Image Two</label><br>
                                                        @if($data->image_two)
                                                        <img src="{{ asset($data->image_two) }}" style="width:100px" alt="">
                                                      @endif
                                                        <input type="file" id="contact-info-vertical" class="form-control" name="image_two">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="contact-info-vertical">Image Three</label><br>
                                                        @if($data->image_three)
                                                        <img src="{{ asset($data->image_three) }}" style="width:100px" alt="">
                                                      @endif
                                                        <input type="file" id="contact-info-vertical" class="form-control" name="image_three">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="contact-info-vertical">Client</label>
                                                        <input type="text" id="contact-info-vertical" class="form-control" name="client" value="{{ $data->client }}">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="contact-info-vertical">Company</label>
                                                        <input type="text" id="contact-info-vertical" class="form-control" name="company" value="{{ $data->company }}">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="contact-info-vertical">Location</label>
                                                        <input type="text" id="contact-info-vertical" class="form-control" name="location" value="{{ $data->location }}">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="contact-info-vertical">Project Type</label>
                                                        <input type="text" id="contact-info-vertical" class="form-control" name="project_type" value="{{ $data->project_type }}">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="contact-info-vertical">Duration</label>
                                                        <input type="text" id="contact-info-vertical" class="form-control" name="duration" value="{{ $data->duration }}">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="password-vertical">Status</label>
                                                        <select name="status" id="" class="form-control">
                                                            <option value="1" {{ $data->status == 1 ?'selected':'' }}>Active</option>
                                                            <option value="0" {{ $data->status == 0 ?'selected':'' }}>Inactive</option>
                                                        </select>
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
		$(document).ready(function(){
				$("#summernote").summernote({
					height: '200px'
				});

			});
  </script>


@endsection
