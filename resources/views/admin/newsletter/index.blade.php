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
                                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active"><a
                                            href="{{ route('admin.user_message.index') }}">User Messages</a>
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
                                    <h4 class="card-title">User Messages List</h4>

                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <div class="table-responsive">
                                            <table class="table zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>Sl</th>
                                                        <th>Time</th>
                                                        <th>Name</th>
                                                        <th>Message</th>

                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($datas as $item)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ \Carbon\Carbon::parse($item->created_at)->format('M d, Y')}}</td>

                                                            <td>{{ $item->first_name ??'' }} {{ $item->last_name ??'' }}</td>
                                                            <td>{{ $item->message }}</td>

                                                            <td class="d-flex">
                                                                <a href="{{ route('admin.user_message.edit', $item->id) }}"
                                                                    class="mr-4">
                                                                    <i class="fa fa-envelope"></i>
                                                                </a>
                                                                <form action="{{ route('admin.user_message.destroy', $item->id) }}"
                                                                    method="post"
                                                                    onsubmit="return confirm('Are you sure you want to delete this category?');">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="border-0"> <i
                                                                            class="fa fa-trash text-danger"></i></button>
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
