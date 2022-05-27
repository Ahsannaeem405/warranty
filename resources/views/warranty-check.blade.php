<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warranty</title>
    <!-- Main CSS -->
    <!-- <link rel="stylesheet" href="./css/main.css"> -->
    <link rel="stylesheet" href="{{asset('assets/css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/warranty-check.css')}}">

    <!-- Bootstrap 5 link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Bootstrap 5 link -->
    <!-- jquery css -->
    <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css"> -->
    <link rel="stylesheet" href="{{asset('assets/css/jqueryui.css')}}">

    <!--  font awesome cdn  -->
    <script src="https://kit.fontawesome.com/9838783293.js" crossorigin="anonymous"></script>
    <!--  font awesome cdn  -->
    <!-- owl  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
</head>

<body>

 @include("layouts.user-menu")


    <!-- NavBar section end -->
    
    <!-- Warranty-check Section -->
        <section class="warranty-checker py-5 ">
          <div class="container ">
            <div class="user shadow shadow-lg signinBx">
            @if(session()->has("no_found"))
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
                Swal.fire({
                position: 'center',
                icon: 'error',
                title: 'Record not found',
                showConfirmButton: false,
                timer: 2500
                })
            </script>      
            @endif
              <div class="imgBx"><img src="{{asset('assets/img/banner.webp')}}" alt="" /></div>
              <div class="formBx">
                <form method="post" action="{{route('check_warranty')}}">
                    @csrf
                  <h2>Manual warranty check</h2>
                  
                  <input type="number" name="sku" class="border" placeholder="Enter the SKU Code" />
                  <strong class="text-danger">@error('sku') {{$message}} @enderror </strong>
                  <input type="number" class="border" name="serial_number" placeholder="Enter the Serial Number" />
                  <strong class="text-danger">@error('serial_number') {{$message}} @enderror </strong><br>
                  <button class="btn btn-maroon-light border-0 rounded-0 mt-3">Check Warranty</button>
                </form>
              </div>
            </div>
            <!-- <div class="user signupBx">
              <div class="formBx">
                <form action="">
                  <h2>Create an account</h2>
                  <input type="text" name="" placeholder="Username" />
                  <input type="email" name="" placeholder="Email Address" />
                  <input type="password" name="" placeholder="Create Password" />
                  <input type="password" name="" placeholder="Confirm Password" />
                  <input type="submit" name="" value="Sign Up" />
                  <p class="signup">
                    Already have an account ?
                    <a href="#">Sign in.</a>
                  </p>
                </form>
              </div>
              <div class="imgBx"><img src="https://raw.githubusercontent.com/WoojinFive/CSS_Playground/master/Responsive%20Login%20and%20Registration%20Form/img2.jpg" alt="" /></div>
            </div> -->
          </div>
        </section>

        <section class="product-warranty">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        
                    </div>
                </div>
            </div>
        </section>
    <!-- Warranty-check Section -->

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
                                    <img src="{{asset('assets/img/logo.png')}}" alt="Logo" width="170" class="img-fluid">
                                </div>

                                <div class="copywrite">
                                    <h6 class="text-offgrey font-13"><span>©</span>NIKAMICHI CAR AUDIO</h6>
                                </div>
                            </div>
                        </div>
                        <div class=" text-end">
                            <img src="{{asset('assets/img/method.png')}}" class="img-fluid w-50" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- footer section -->


    
    <!-- Bootstrap5 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <!-- Bootstrap5 CDN -->

    <!-- Jquery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

    <script>
        $(document).ready(function(){
            $(".fixed-top").removeClass("fixed-top");
        })
    </script>
    <!-- Jquery CDN -->



<!-- 
    <script src="./js/steper.js"></script> -->



    <!-- owl carousel -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.owl-carousel').owlCarousel({
                nav: false,
                dots: true,
                loop: true,
                autoplay: true,
                autoplayTimeout: 5000,
                margin: 20,
                slideSpeed: 3000,
                animateIn: 'fadeIn',
                animateOut: 'fadeOut',
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    960: {
                        items: 3
                    }
                }
            });
            var setMinHeight = function (minheight = 0) {
                jQuery('.owl-carousel').each(function (i, e) {
                    var oldminheight = minheight;
                    jQuery(e).find('.owl-item').each(function (i, e) {
                        minheight = jQuery(e).height() > minheight ? jQuery(e).height() : minheight;
                    });
                    jQuery(e).find('.item').css("min-height", minheight + "px");
                    minheight = oldminheight;
                });
            };
            setMinHeight();

        });
        $(document).on('resize', function () {
            setMinHeight();
        });
    </script> -->

</body>

</html>