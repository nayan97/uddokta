 <!-- footer start  -->
 <footer class="footer">

    <!-- bg start  -->
    <div class="footer-blur1">
        <img src="{{ asset('frontend/asset/img/footer-blur1.png') }}" alt="">
    </div>
    <div class="footer-blur2">
        <img src="{{ asset('frontend/asset/img/footer-blur2.png') }}" alt="">
    </div>
    <div class="footer-bg-circle">
        <img src="{{ asset('frontend/asset/img/footer-bg-circle.png') }}" alt="">
    </div>
    <div class="footer-bg-line">
        <img src="{{ asset('frontend/asset/img/footer-bg-line.png') }}" alt="">
    </div>

    <!-- content start  -->
    <div class="container">
        <div class="row g-4 g-md-5 row-cols-1 row-cols-md-2">
            <div class="col">
                <h1 class="heading">Let's Work Together</h1>
                <p class="text">You can express yourself however you want and whenever you want, for free. You can customize a template or make your own.</p>
            </div>

            <div class="col">
                <form method="POST" class="row g-3" action="{{route('subscribe.submit')}}">
                    @csrf
                    <div class="col-auto">
                      <input type="email" class="form-control rounded-pill p-1 ps-3 p-md-3 ps-md-4" name="email" id="email" placeholder="Email Address" required >
                    </div>
                    <div class="col-auto">
                      <button type="submit" class="btn btn-primary rounded-pill">Subscribe Now</button>
                    </div>
                </form>
            </div>

        </div>

        <!-- contact start -->
        <div class="row row-cols-2 row-cols-md-4 mt-4 mt-md-5 pt-4">
            <div class="col-md-2">
                <p class="text">Call Now:</p>
                <h5 class="title mt-md-2 mt-1">{{ $setting->phone }}</h5>
            </div>
            <div class="col-md-4">
                <p class="text">Email Now:</p>
                <h5 class="title mt-md-2 mt-1">{{ $setting->email }}</h5>
            </div>
            <div class="col-md-4">
                <p class="text">My Location:</p>
                <h5 class="title mt-md-2 mt-1">{{ $setting->address }}</h5>
            </div>
            <div class="col-md-2">
                <p class="text">Follow Me:</p>
                <ul class="social-media d-flex ">
                    <li><a class="rounded-circle" href="{{ $setting->facebook }}"><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a class="rounded-circle" href="{{ $setting->instragram }}"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a class="rounded-circle" href="{{ $setting->twitter }}"><i class="fa-brands fa-twitter"></i></a></li>
                    <!-- <li><a class="rounded-circle" href="{{ $setting->linkedin }}"><i class="fa-brands fa-linkedin"></i></a></li> -->
                    
                </ul>
            </div>
        </div>
    </div>

    <div class="footer-copyright">
        <div class="container">
            <div class="row ">
                <div class="col-6">
                    <a href="{{ route('home') }}"><img src="{{ asset($setting->icon_light) }}" alt=""></a>
                </div>
                <div class="col-6 text-end text-white">
                    <span class="mt-2 d-block">  2024 &copy; All Rights Reserved</span>
                </div>
            </div>
        </div>
    </div>
</footer>
