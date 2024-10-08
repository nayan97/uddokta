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
                                    <form class="form form-vertical" action="{{route('admin.priceplan.store')}}" method="POST" enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="password-vertical">Name</label>
                                                        <input type="text" class="form-control" name="name"">
                                                    </div>
                                                </div>
                                          

                                                <div class="col-6">
                                                    <div class="form-group">

                                                        <div id="inputContainer">
                                                            <div class="input-group">
                                                                <input class="form-control" type="text" name="values[]" placeholder="Value">
                                                                <button type="button" onclick="removeInput(this)"><i class="fa fa-trash text-danger"></i></button>
                                                            </div>
                                                        </div>
                                                        <button type="button" id="addInputBtn"><i class="feather icon-edit"></i></button>
                                                        <pre id="output"></pre>

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
    // Add a new input field for values
    document.getElementById('addInputBtn').addEventListener('click', function() {
        const inputContainer = document.getElementById('inputContainer');

        const inputGroup = document.createElement('div');
        inputGroup.classList.add('input-group');

        inputGroup.innerHTML = `
            <input type="text" name="values[]" placeholder="Value">
            <button type="button" onclick="removeInput(this)">Remove</button>
        `;

        inputContainer.appendChild(inputGroup);
    });

    // Remove an input group
    function removeInput(button) {
        button.parentElement.remove();
    }

    // Convert form data to JSON when the form is submitted
    document.getElementById('jsonForm').addEventListener('submit', function(event) {
        event.preventDefault();

        const values = document.querySelectorAll('input[name="values[]"]');
        let jsonData = [];

        values.forEach(value => {
            const valueContent = value.value.trim();
            if (valueContent) {
                jsonData.push(valueContent);
            }
        });

        // Output the generated JSON array
        document.getElementById('output').textContent = JSON.stringify(jsonData, null, 4);
    });
</script>

@endsection





