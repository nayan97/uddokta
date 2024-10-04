@extends('frontend.layouts.master')
@section('content')
  <!-- main content start -->
  <main class="">

    <!-- top-banner start -->
    <section class="page-top">
        <!-- top banner background start -->
        <div class="banner-blur-one"><img src="{{ asset('frontend/asset/img/banner-blur1.png') }}" alt="banner-blur"></div>
            <div class="banner-blur-two"><img src="{{ asset('frontend/asset/img/banner-blur2.png') }}" alt="banner-blur"></div>
            <div class="banner-bg-line"><img src="{{ asset('frontend/asset/img/banner-bg-line.png') }}" alt="banner-bg-line"></div>

            <div class="banner-bg-circle"><img src="{{ asset('frontend/asset/img/banner-bg-circle.png') }}" alt="banner-bg-circle"></div>

        <div class="container">
            @include('frontend.layouts.notify')
            <h1 class="heading text-center"> Appointment Form</h1>
            <div class="text-center mt-4"><span class="btn-nav  rounded-pill text-uppercase ">home<i class="fa-solid fa-angle-right mx-2"></i>form</span></div>
        </div>

    </section>
    <!-- top end -->


    <section class="appointment">
        <div class="container">
            <div class="appointment-wrap">

                <!-- form start  -->
                <form method="POST" action="{{route('appointment.submit')}}">
                    @csrf

                    <h2 class="mb-4 mb-lg-5 text-center form-heading">সঠিকভাবে ফরমটি পূরণ করুন</h2>

                    <div class="row row-cols-1 row-cols-lg-2 g-3 g-lg-4">
                        <div class="col">
                            <input type="text" class="form-control rounded-pill" name="name"  placeholder="আপনার নাম*" >
                        </div>
                        <div class="col">
                            <input type="text" class="form-control rounded-pill"  name="phone" placeholder="মোবাইল নাম্বার*" >
                        </div>
                        <div class="col">
                            <input type="email" class="form-control rounded-pill"  name="email" placeholder="ই-মেইল ঠিকানা*" >
                        </div>
                        <div class="col">
                            <input type="text" class="form-control rounded-pill" name="facebook" placeholder="আপনার ফেসবুক পেইজ লিংক*" >
                        </div>
                        <div class="col">
                            <input type="text" class="form-control rounded-pill" name="website" placeholder="আপনার ওয়েবসাইট লিংক ( যদি থাকে )">
                        </div>
                        <div class="mt-4">
                            <input type="text" class="form-control rounded-pill" name="budget" placeholder="আপনার মাসিক মার্কেটিং বাজেট কত?* " >
                        </div>
                        <div class="mt-4">
                            <input type="text" class="form-control rounded-pill" name="marketing_status" placeholder="আপনি কি নিজেই মার্কেটিং করছেন নাকি কোন এজেন্সি থেকে করছেন?*" >
                        </div>

                        <div class="col">
                            <input type="text" class="form-control rounded-pill"  name="address" placeholder="আপনার বর্তমান ঠিকানা*" >
                        </div>

                    </div>

                    <div class=" mt-4">
                        <textarea class="form-control rounded-4" id="message" rows="5" name="message_one" placeholder="আপনার ব্যবসা সম্পর্কে সংক্ষিপ্তভাবে লিখুন*" ></textarea>
                    </div>
                    <div class="mb-5 mt-4">
                        <textarea class="form-control rounded-4" id="message" rows="5" name="message_two" placeholder="বর্তমানে আপনার মার্কেটিংয়ে কি কি সমস্যা হচ্ছে?*" ></textarea>
                    </div>

                    <div class="text-center"> <button class="btn btn-primary appointment-btn rounded-pill">ফর্মটি সাবমিট করুন </button></div>
                </form>

            </div>
        </div>
    </section>


 </main>
<!-- main content end -->

@endsection
