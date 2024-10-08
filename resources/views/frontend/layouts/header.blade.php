 <!--Main Navigation start-->
 <header class="">
    <!-- main categories start -->
    <nav class="navbar navbar-expand-lg py-0">
        <div class="container">

            <a class="navbar-brand " href="{{ route('home') }}" >
                <img src="{{asset($setting->icon_dark)}}" class="object-fit-cover logo" alt="logo">
            </a>

            <button  class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="offcanvas offcanvas-start " tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body overflow-visible">

                    <!-- navbar-nav  -->
                    <ul class="navbar-nav justify-content-end  me-4 me-xl-5 flex-grow-1 p-0 m-0">

                        <li class="nav-item mx-2 mx-xl-3" data-bs-dismiss="offcanvas" data-bs-dismiss="offcanvas">
                            <a class="nav-link text-capitalize p-0" aria-current="page" href="{{ route('home') }}"> Home </a>
                        </li>
                        <li class="nav-item mx-2 mx-xl-3" data-bs-dismiss="offcanvas">
                            <a class="nav-link text-capitalize p-0" aria-current="page" href="{{ route('service') }}"> Services</a>
                        </li>
                        <li class="nav-item mx-2 mx-xl-3" data-bs-dismiss="offcanvas">
                            <a class="nav-link text-capitalize p-0" aria-current="page" href="{{ route('portfolio') }}"> Portfolio</a>
                        </li>
                        <li class="nav-item mx-2 mx-xl-3" data-bs-dismiss="offcanvas">
                            <a class="nav-link text-capitalize p-0" aria-current="page" href="{{ route('contact') }}"> Contact Us</a>
                        </li>
                    </ul>

                    <!-- book an appoinment btn  -->
                    <a href="{{route('appointment')}}" class="btn btn-primary rounded-pill text-uppercase">Book an appoinment</a>

                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar top end-->

    <!-- nav bottom start  -->
    <nav class="fixed-bottom bg-white nav-bottom" >

        <div class="container">
            <div class=" " >
                <ul class="d-flex justify-content-between " >
                    <li class="nav-item">
                        <a class="nav-link nav-link-sm text-center active" aria-current="page" href="{{ route('home') }}"><i class="fa-solid fa-house"></i><span class="d-block">Home</span></a>
                    </li>
                    <li class="nav-item text-center">
                        <a class="nav-link nav-link-sm" href="{{ route('service') }}"><i class="fa-brands fa-servicestack"></i><span class="d-block">Services</span></a>
                    </li>
                    <li class="nav-item text-center">
                        <a class="nav-link nav-link-sm " href="{{route('appointment')}}"><i class="fa-solid fa-clock"></i><span class="d-block">Appointment</span></a>
                    </li>
                    <li class="nav-item text-center">
                        <a class="nav-link nav-link-sm " href="{{ route('portfolio') }}"><i class="fa-solid fa-briefcase"></i><span class="d-block">Portfolio</span></a>
                    </li>
                    <li class="nav-item text-center">
                        <a class="nav-link nav-link-sm " href="{{ route('contact') }}"><i class="fa-solid fa-address-card"></i><span class="d-block">Contact</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- nav bottom end  -->


</header>
<!--Main Navigation end-->
