<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap 5 link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Bootstrap 5 link -->
    <link rel="stylesheet" href="{{asset('assets/css/product_css.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/reset.css')}}">
    <!--  font awesome cdn  -->
    <script src="https://kit.fontawesome.com/9838783293.js" crossorigin="anonymous"></script>
    <!--  font awesome cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">


    <title>Warrenty</title>
</head>

<body>

    <section class="navigationBar">
        <nav class="navbar navbar-expand-lg fixed-top bg-dark navbar-dark py-lg-3">
            <div class="container-fluid">
                <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon "></span>
                </button>
                <a class="navbar-brand fontw700 font-24 text-white pb-3" href="./index.html"><img src="./img/logo.png"
                        alt="logo" width="170" class="img-fluid"></a>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav mx-auto me-md-auto mb-2 mb-md-0" id="navbar-nav">
                        <li class="nav-item mx-auto">
                            <a class="nav-link active px-md-3 fontw500 text-white" aria-current="page"
                                href="./index.html">Home</a>
                        </li>
                        <li class="nav-item mx-auto">
                            <a class="nav-link active px-md-3 fontw500 text-white" aria-current="page"
                                href="./warranty-check.html">Check Warranty</a>
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
                        <li class="nav-item mx-auto">
                            <a class="nav-link active px-md-4 fontw500 text-white" href="./product_page.html">My Products</a>
                        </li>
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
                        <li class="nav-item mx-auto">
                            <a class="nav-link active fontw500 text-white" href="./admin/index.html">User Profiles</a>
                        </li>
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
                        <a href="login.html" class="btn btn-outline-dark border-light text-white me-2"
                        type="submit">Login</a>
                            <a href="./register.html"><button class="btn btn-light rounded-pill" type="button">Register</button></a>
                    </form>
                </div>
            </div>
        </nav>
    </section>

    <div class="container py-5">
        <div class="row">
            <div class="col-12 text-center">
                <h3>DASH CAMS</h3>
                <img src="{{('assets/img/1_2048x2048.webp')}}" class="w-75 rounded-3 my-4" alt="">
            </div>
            <!-- <div class="col-12 border py-2">
                <select class="form-select form-select-sm w-20 float-end " aria-label=".form-select-sm example">
                   
                    <option selected>Sort</option>
                    <option value="1">FEATURED </option>
                    <option value="2">BEST SELLING</option>
                    <option value="3">ALPHABETICALLY, A-Z</option>
                    <option value="4">ALPHABETICALLY, Z-A</option>

                    <option value="5">PRICE, LOW TO HIGH</option>
                    <option value="6"> PRICE, HIGH TO LOW</option>
                    <option value="7"> DATE OLD TO NEW</option>

                  </select>
            </div> -->
            @foreach($myproducts as $myproduct)

            <div class="col-lg-3 col-md-4 col-6 py-2 text-center">
                <div class="img_div">
                    <a href="{{route('product_detail', ['product_id' => $myproduct->id])}}"><img src="{{asset('assets/img/NC-501_400x.webp')}}" class="img-fluid" alt=""></a>
                </div>

                <h6>{{$myproduct->name}}</h6>

            </div>
            @endforeach
            <div class="col-12 py-5 text-center">
                <h4 class="recent">Recently Viewed</h4>
                <div class="owl-carousel">
                    <div class="item">
                        <div class="img_div">
                            <a href="./product_detail.html"><img src="./img/NC-A300_400x.webp" class="img-fluid" alt=""></a>
                        </div>
                        <h6>NAKAMICHING-501 HD SURROUND VIEW CAMERA</h6>

                    </div>
                    <div class="item">
                        <div class="img_div">
                            <a href="./product_detail.html"><img src="./img/ND49W_36338682-878d-472e-b0e9-b64c985d4a51_600x.webp" class="img-fluid" alt=""></a>
                        </div>
                        <h6>NAKAMICHING-501 HD SURROUND VIEW CAMERA</h6>

                    </div>
                    <div class="item">
                        <div class="img_div">
                            <a href="./product_detail.html"><img src="./img/NC-A300_400x.webp" class="img-fluid" alt=""></a>
                        </div>
                        <h6>NAKAMICHING-501 HD SURROUND VIEW CAMERA</h6>

                    </div>
                </div>
            </div>
        </div>
    </div>


       <!-- footer section -->
    <section class="footer pt-5 bg-black text-offgrey">
        <div class="container">
            <div class="row border-bottom">
                <div class="col-md-6">
                    <div class="link-contact ">
                        <div class="d-flex">
                            <div class="quick-link">
                                <i class="fa fa-plus-circle pe-3" aria-hidden="true"></i>
                                <a href="#" class="text-offgrey text-decoration-none fontw700">QuicK Links</a>
                            </div>
                            <div class="ms-4">
                                <p class="fonwt500">Explore More Categories</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="d-flex justify-content-end">
                        <p class="fontw500"><span>021-323-323-22</span> | <span>hello@gmail.com</span></p>
                    </div>
                </div>
            </div>

            <div class="row my-5">
                <!-- <div class="col-lg-6 col-12"> -->
                <!-- <div class="row"> -->
                <div class="col-lg-4 col-12 col-sm-6">
                    <h5>About</h5>
                    <ul class="list-unstyled unoderList text-grey-three">
                        <li class="mb-2 font-14 py-3">We are a team of audioheads, sound engineers, and all in all
                            passionate
                            about all things audio.</li>
                        <li class="mb-2 font-14">Founded in 2018, we’ve established a small but specialized team to
                            focus on reestablishing the Nakamichi brand name in home and mobile audio.</li>
                        <li class="py-3">
                            <a href="#" class="text-maroon text-decoration-underline"
                                style="text-underline-offset: 5px;">Read More Here</a>
                        </li>
                    </ul>

                    <div class="icons mb-3">

                        <i class="fab fa-google p-2 font-14 ms-2"></i>
                        <!--<i class="fab fa-apple p-2 font-14 ms-2"></i>-->
                        <i class="fab fa-facebook p-2 font-14 ms-2"></i>

                    </div>
                </div>
                <div class="col-lg-4 col-12 col-sm-6 mb-lg-3 my-3 my-md-0 px-3 px-lg-5">
                    <h5 class="pb-3">Menu</h5>
                    <ul class="list-unstyled unoderList text-grey-three">
                        <li class="mb-2 font-14">Search</li>
                        <li class="mb-2 font-14">Nakamichi History</li>
                        <li class="mb-2 font-14">Product Registration</li>
                        <li class="mb-2 font-14">Press and Media</li>
                        <li class="mb-2 font-14">Privacy Policy</li>
                    </ul>
                </div>

                <div class="col-lg-4 col-12">
                    <div class="heading">
                        <h4 class="mb-3">NAKAMICHI NEWSLETTER</h4>
                        <p>Subscribe to receive updates, access to exclusive deals, and more on our mobile audio
                            products.</p>
                    </div>

                    <div class="subscribe_div">
                        <div class="subscribe-text-Bar pt-3">
                            <form class="shadowDiv">
                                <div class="input-group border-round-00">
                                    <input type="text" class="form-control form-control-sm"
                                        style="border-radius: unset;" placeholder="Email Address"
                                        aria-label="Example text with button addon" aria-describedby="button-addon1">
                                    <button class="btn btn-maroon-light py-2" style="border-radius: unset;"
                                        type="button" id="button-addon1">SUBSCRIBE</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- <div class="col-md-12 pt-5">
                    <div class="privacy d-flex justify-content-between">
                        <h5>Privacy Policy</h5>
                        <div class="socialLinks">
                            <p class="text-black fontw600"><span>LinkedIn</span> / <span>Facebook</span> /
                                <span>Instagram</span>
                            </p>
                        </div>
                    </div>
                </div> -->

                <div class="col-md-12 py-3 border-top">
                    <div class="privacy d-flex justify-content-between">
                        <div class="d-flex align-items-center">
                            <div class=" bg-black">
                                <div class="footer-logo">
                                    <img src="./img/logo.png" alt="Logo" width="170" class="img-fluid">
                                </div>

                                <div class="copywrite">
                                    <h6 class="text-offgrey font-13"><span>©</span>NIKAMICHI CAR AUDIO</h6>
                                </div>
                            </div>
                        </div>
                        <div class=" text-end">
                            <img src="./img/method.png" class="img-fluid w-50" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- footer section -->
    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                nav: false,
                dots: true,
                loop: true,
                autoplay: true,
                autoplayTimeout: 3000,
                margin: 20,
                slideSpeed: 3000,
                animateIn: 'fadeIn',
                animateOut: 'fadeOut',
                responsive: {
                    0: {
                        items: 2
                    },
                    600: {
                        items: 3
                    },
                    960: {
                        items: 4
                    }
                }
            });
            var setMinHeight = function(minheight = 0) {
                jQuery('.owl-carousel').each(function(i, e) {
                    var oldminheight = minheight;
                    jQuery(e).find('.owl-item').each(function(i, e) {
                        minheight = jQuery(e).height() > minheight ? jQuery(e).height() : minheight;
                    });
                    jQuery(e).find('.item').css("min-height", minheight + "px");
                    minheight = oldminheight;
                });
            };
            setMinHeight();
        });
        $(document).on('resize', function() {
            setMinHeight();
        });
    </script>
  <!-- Bootstrap5 CDN -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <!-- Bootstrap5 CDN -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>