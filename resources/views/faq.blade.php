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
                            <span>FAQs</span>
                            <h1>"Frequently Asked Questions?"</h1>
                            <div class="breadcrumb-list">
                                <a href="index.html">Home</a><img
                                    src="{{ asset('frontend/assets/img/inner-pages/breadcrumb-arrow.svg') }}" alt>
                                FAQs
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="faq-page sec-mar">
        <div class="container">
            <div class="row gy-5 justify-content-lg-between justify-content-center">
                <div class="col-lg-4">
                    <div class="faq-items">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                    type="button" role="tab" aria-controls="home"
                                    aria-selected="true">Progress</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                    type="button" role="tab" aria-controls="profile"
                                    aria-selected="false">Payment</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                                    type="button" role="tab" aria-controls="contact"
                                    aria-selected="false">Support</button>
                            </li>
                        </ul>
                    </div>
                    <div class="contact-form-wrap">
                        <div class="form-tltle">
                            <h5>HAVE QUESTION?</h5>
                        </div>
                        <div class="contact-form">
                            <form action="{{ route('message.submit') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12 mb-20">
                                        <div class="form-inner">
                                            <label>name</label>
                                            <input type="text" name="first_name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-20">
                                        <div class="form-inner">
                                            <label>Email</label>
                                            <input type="email" name="email" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-20">
                                        <div class="form-inner">
                                            <label>Phone</label>
                                            <input type="text" min="11" name="phone">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-20">
                                        <div class="form-inner">
                                            <label>Message</label>
                                            <textarea name="message" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-inner">
                                            <button class="primary-btn3" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="accordion" id="accordionExample1">
                                @foreach ($progress as $pg)
                                    <div class="accordion-item">
                                        <h5 class="accordion-header" id="heading{{ $pg->id }}">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse{{ $pg->id }}" aria-expanded="true"
                                                aria-controls="collapse{{ $pg->id }}">
                                                {{ $pg->question }}
                                            </button>
                                        </h5>
                                        <div id="collapse{{ $pg->id }}" class="accordion-collapse collapse "
                                            aria-labelledby="heading{{ $pg->id }}" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                {{ $pg->answer }}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="accordion" id="accordionExample2">
                                @foreach ($payment as $py)
                                    <div class="accordion-item">
                                        <h5 class="accordion-header" id="heading{{ $py->id }}">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse{{ $py->id }}" aria-expanded="true"
                                                aria-controls="collapse{{ $py->id }}">
                                                {{ $py->question }}
                                            </button>
                                        </h5>
                                        <div id="collapse{{ $py->id }}" class="accordion-collapse collapse "
                                            aria-labelledby="heading{{ $py->id }}"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                {{ $py->answer }}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="accordion" id="accordionExample3">
                                @foreach ($support as $sp)
                                    <div class="accordion-item">
                                        <h5 class="accordion-header" id="heading{{  $sp->id }}">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse{{  $sp->id }}" aria-expanded="true"
                                                aria-controls="collapse{{  $sp->id }}">
                                                {{  $sp->question }}
                                            </button>
                                        </h5>
                                        <div id="collapse{{  $sp->id }}" class="accordion-collapse collapse "
                                            aria-labelledby="heading{{  $sp->id }}"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                {{  $sp->answer }}
                                            </div>
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
