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
                        {{-- <h2 class="content-header-title float-left mb-0">Brand</h2> --}}
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item active"><a href="{{route('admin.workstep.index')}}">Work step</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Scroll - horizontal and vertical table -->
            <section id="horizontal-vertical">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Work step</h4>
                                <h4 class="card-title">
                                    <a href="{{route('admin.workstep.create')}}" class="bg-primary btn rounded white">
                                        <i class="feather icon-plus"></i>Add Work step
                                    </a>
                                </h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body card-dashboard">
                                    <div class="table-responsive">
                                        <table class="table zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th>Sl</th>
                                                    <th>Name</th>
                                                    <th>Expertise</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($datas as $item)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                    
                                                    <td>{{$item->title}}</td>
                                                    <td>{{ $item->logo}}</td>
                                                    <td>
                                                        @if($item->status == 1)
                                                            <span class="badge bg-success">Active</span>
                                                        @else
                                                            <span class="badge bg-warning">Inactive</span>
                                                        @endif
                                                    </td>
                                                    <td class="d-flex">
                                                        <a href="{{route('admin.skills.edit',$item->id)}}" class="mr-4">
                                                            <i class="feather icon-edit"></i>
                                                        </a>
                                                        <form action="{{ route('admin.skills.destroy', $item->id) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this skills?');">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="border-0">  <i class="fa fa-trash text-danger"></i></button>
                                                        </form>
                                                    </td>

                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--/ Scroll - horizontal and vertical table -->
        </div>
    </div>
</div>
@endsection
