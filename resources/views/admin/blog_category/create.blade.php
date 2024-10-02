@extends('admin.layouts.app')

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
                                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active"><a href="{{ route('admin.blog_category.index') }}">Blog Category</a>
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
                                    <h4 class="card-title">Add New Blog Category</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        @include('admin.layouts.notify')
                                        <form class="form form-vertical" action="{{ route('admin.blog_category.store') }}"
                                            method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-body">
                                                <div class="row">

                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="first-name-vertical"> Name <span
                                                                    class="text-danger">*</span> </label>
                                                            <input type="text" id="first-name-vertical"
                                                                class="form-control" name="name"
                                                                value="{{ old('name') }}" placeholder="Ad Blog Name"
                                                                required>
                                                        </div>
                                                    </div>



                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="password-vertical">Status</label>
                                                            <select name="status" id="" class="form-control">
                                                                <option value="1"selected>Active</option>
                                                                <option value="0">Inactive</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <button type="submit"
                                                            class="btn btn-primary mr-1 mb-1">Save</button>
                                                        <button type="reset"
                                                            class="btn btn-outline-warning mr-1 mb-1">Reset</button>
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

