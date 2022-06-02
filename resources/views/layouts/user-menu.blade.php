<section class="navigationBar">
            <nav class="navbar navbar-expand-lg fixed-top bg-dark navbar-dark py-lg-3">
                <div class="container-fluid">
                    <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon "></span>
                    </button>
                    <a class="navbar-brand fontw700 font-24 text-white pb-3" href=""><img
                            src="{{ isset($setting->site_logo) ? asset('site_logo/'. $setting->site_logo) : asset('assets/img/logo.png')}}" alt="logo" width="170" class="img-fluid"></a>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                        <ul class="navbar-nav mx-auto me-md-auto mb-2 mb-md-0" id="navbar-nav">
                            <li class="nav-item mx-auto">
                                <a class="nav-link active px-md-3 fontw500 text-white" aria-current="page"
                                    href="{{route('home')}}">Home</a>
                            </li>

                            <li class="nav-item mx-auto">
                                <a class="nav-link active px-md-3 fontw500 text-white" aria-current="page"
                                    href="{{route('warranty-check')}}">Check Warranty</a>
                            </li>
                            <!-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle active px-md-3 fontw500 text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    RECEIVERS
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>

                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li> -->
                            @if(auth()->check())
                            <li class="nav-item mx-auto">
                                <a class="nav-link active px-md-4 fontw500 text-white" href="{{ route('myproduct') }}">My
                                    Products</a>
                            </li>
                            @endif
                            <!-- <li class="nav-item dropdown mx-auto">
                                <a class="nav-link dropdown-toggle active px-md-4 fontw500 text-white" href="#"
                                    id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    My Products
                                </a>
                                <ul class="dropdown-menu position-absolute" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="./product_detail.html">SPEAKERS</a></li>
                                    <li><a class="dropdown-item" href="./product_detail.html">AMPLIFIER</a></li>
                                    <li><a class="dropdown-item" href="./product_detail.html">DASH CAMS</a></li>
                                    <li><a class="dropdown-item" href="./product_detail.html">DSP</a></li>
                                    <li><a class="dropdown-item" href="./product_detail.html">ACCESSORIES</a></li>

                                </ul>
                            </li> -->
                            @if(auth()->check())
                            <li class="nav-item mx-auto">
                                <a class="nav-link active fontw500 text-white" href="{{ route('user-profile') }}">Profile</a>
                            </li>
                            @endif
                            <!-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle active fontw500 text-white" href="#"
                                    id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    User Profile
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>

                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li> -->
                            <!-- <li class="nav-item">
                                <a class="nav-link active fontw500 text-white" href="#">DASH CAMS</a>
                            </li> -->
                            <!-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle active fontw500 text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    DASH CAMS
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>

                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active fontw500 text-white" href="#">DPS</a>
                            </li> -->
                            <!-- <li class="nav-item">
                                <a class="nav-link active fontw500 text-white" href="#">ACCESSORIES</a>
                            </li> -->
                            <!-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle active fontw500 text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    ACCESSORIES
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>

                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li> -->
                            <!-- <li>
                                <div class="search-box ps-4">
                                    <input class="search-input mt-2" type="text" name="" placeholder="Search Venue">
                                    <div class="search-btn">
                                        <i class="fas fa-search text-white"></i>
                                    </div>
                                </div>
                            </li> -->
                        </ul>


                        <form class="d-flex">
                            @if(auth()->check())
                            <div class="dropdown">
                        <strong class="text-blue fw-20" style="color:skyblue">{{auth()->user()->name}}</strong>
  <img class="dropdown-toggle mr-8 img-profile rounded-circle" style="width: 40px;" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" src="{{ isset(auth()->user()->profile_pic) ? asset('upload/'.auth()->user()->profile_pic) : asset('img/undraw_profile.svg')}}">
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <a id="logout" class="dropdown-item" href="{{ url('logout-user') }}">
        {{ __('Logout') }}
    </a>
    
  </div>
</div>

                                   
                            @else
                            <a href="{{route('login')}}" class="btn btn-outline-dark border-light text-white me-2"
                                type="submit">Login</a>
                            <a href="{{ route('register') }}"><button class="btn btn-light rounded-pill"
                                    type="button">Register</button></a>
                            @endif
                        </form>
                    </div>
                </div>
            </nav>
        </section>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        $("#logout").on("click", function(){
            return confirm("Are you sure to logout?");
        });
    })
</script>