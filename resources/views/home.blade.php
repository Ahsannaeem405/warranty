<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warranty</title>
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/steper.css')}}">

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

<header class="" style="background: url('{{ asset('header/'.$setting->header_background) }}');">
{{--         <img class="header" src="{{ asset('header/'.$setting->header_background) }}"> --}}
        <section class="Banner mx-3 mx-md-0">
            <div class="container position-relative main mt-md-5 mt-3">
                <div class="row z1 d-flex justify-content-center">
                    <div class="col-md-12 box position-absolute px-4">
                        <div class="search location">
                            <div class="row py-4">
                                <div class="col-md-5 location">
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

            @if(session()->has("added"))
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
                Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Product successfully added',
                showConfirmButton: false,
                timer: 2500
                })
            </script>
            @endif
                                    <form action="{{route('check_warranty')}}" method="POST">
                                        @csrf
                                        <div class="inputBox">
                                            <input type="text" name="serial_number" value="">
                                            <label for="">Serial Number</label>
                                        </div>

                                </div>

                                <div class="col-md-5 activities">

                                        <div class="inputBox">
                                            <input type="text" name="sku" value="">
                                            <label for="">SKU</label>
                                        </div>

                                </div>
                                <div class="col-md-2 searchbtn d-flex justify-content-center align-items-center">

                                        <button class="btn btn-maroon-light p-2" type="submit"><i
                                                class="fa fa-search font-26" aria-hidden="true"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>

    <!-- NavBar section end -->
    <!-- steps -->

    <section class="event-step" style="background-image: url('{{ asset('sections/'. $setting->section2_background) }}'); background-position: center; background-size: cover;">
        <div class="container bg-transparent" id="main_container">
            <div class="card border-0">
                <div class="form">
                    <div class="left-side">
                        <div class="left-heading">
                            <h3 class="fontw700 font-20">Product Warranty Check</h3>
                        </div>
                        <div class="steps-content">
                            <h3>Step <span class="step-number">1</span></h3>
                            <!-- <p class="step-number-content active">Please provide the following information</p>
                        <p class="step-number-content d-none">Where is your business located</p>
                        <p class="step-number-content d-none">Please provide some of your information</p>
                        <p class="step-number-content d-none">Processing your information to help you onboard</p> -->
                        </div>
                        <ul class="progress-bar-1 mt-1"
                            style="display: flex;flex-direction: column;justify-content: center;overflow: hidden;color: #fff;text-align: center;white-space: nowrap;transition: width .6s ease;">
                            <li class="active-section">{{ $setting->section1_title }}</li>
                            <li>{{ $setting->section2_title }}</li>
                            <li>{{ $setting->section3_title }}</li>
                            <li>{{ $setting->section4_title }}</li>
                        </ul>



                    </div>
                    <div class="right-side">
                        <div class="main-part active-section" style="padding:36px;">
                           {{--  <div class="text">
                                <h2> {{isset($setting->stepbox_title) ? $setting->stepbox_title : 'What is SKU and Serial Number'}} </h2>
                                <p>Check a single product warranty using SKU and Serial Code</p>
                            </div> --}}

                            {{-- <div class="Sku-detail">
                                <h4>What is SKU?</h4>
                                <p class="">{{isset($setting->ans_of_q1) ? $setting->ans_of_q1 : 'SKU numbers are important for every store to use because they make life way
                                    easier. Each SKU is recorded within your internal tracking system.'}}</p>
                            </div> --}}

                            <div class="serial-detail">
                                {{-- <h4>What is Serial Number?</h4> --}}
                                <p class="mb-0">{!! $setting->section1_description !!}</p>
                            </div>




                            <div class="buttons py-4">
                                <button class="next_button">Next Step</button>
                            </div>
                        </div>


                        <div class="main-part">

                            <div class="text">
                                {{-- <h2>{{ $setting->section2_title }}</h2> --}}
                                <p>{!!  $setting->section2_description !!}</p>
                            </div>
                           {{--  <p>{{isset($setting->search) ? $setting->search : 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error consequuntur molestiae
                                voluptate consequatur, harum ducimus?'}}</p> --}}

                            <div class="buttons button_space">
                                <button class="back_button">Back</button>
                                <button class="next_button">Next Step</button>
                            </div>
                        </div>

                        <div class="main-part">

                            <div class="text">
                                {{-- <h2>Result</h2> --}}
                                <p>{!!  $setting->section3_description !!}</p>
                            </div>

                            <!-- <div class="input-text">
                            <div class="input-div">
                                <input type="text" required require>
                                <span>Experience 1</span>
                            </div>
                            <div class="input-div">
                                <input type="text" required require>
                                <span>Position</span>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" required>
                                <span>Experience 2</span>
                            </div>
                            <div class="input-div">
                                <input type="text" required>
                                <span>Position</span>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" required>
                                <span>Experience 3</span>
                            </div>
                            <div class="input-div">
                                <input type="text" required>
                                <span>Position</span>
                            </div>
                        </div> -->
                            <div class="buttons button_space">
                                <button class="back_button">Back</button>
                                <button class="next_button">Next Step</button>
                            </div>
                        </div>


                        <div class="main-part">
                            <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
                                <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                            </svg>

                            <div class="text congrats">
                                {{-- <h2>Finish</h2> --}}
                                <p>{!!  $setting->section4_description !!}</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- steps -->

    <!-- products -->

<!-- Section 3 -->

    <section class="products">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center py-5">
                    <p class="mb-0">{{ $setting->section3_head_title }}</p>
                    <h3 class="">{{$setting->section3_title}}</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="" style="padding-top: 60px;">
                        {!! $setting->product_detail1 !!}
                        {{-- <ul class="list-unstyled p-5 mb-0 text-grey-two fontw300">
                            <li>
                                <p class="">DIGITAL SIGNAL PROCESSORS</p>
                            </li>
                            <li>
                                <h3 class="py-4 fontw300">{{isset($setting->product_name1) ? $setting->product_name1 : 'PROCESSING SOUND TO YOUR REQUIREMENTS'}}</h3>
                            </li>
                            <li>
                                <p class="">{!! isset($setting->product_detail1) ? $setting->product_detail1 : 'Our digital signal processors allow you to really tune the soundstage within
                                    your
                                    vehicle.' !!} </p>
                            </li>
                            <li>
                                <!-- <p class="py-4">From time alignment, crossover slopes and gain control, each step brings
                                    you close to
                                    audio nirvana.</p> -->
                            </li>
                            <li>
                                <!-- <a href="{{asset('assets/product_detail.html')}}" class="text-maroon"
                                    style="text-underline-offset: 5px;">Find Out More</a> -->
                            </li>
                        </ul> --}}
                    </div>
                </div>
                <div class="col-md-6 p-0 d-flex justify-content-center align-items-center">
                    <div class="pt-5">
                        <img src="{{ isset($setting->product_image1) ? asset('products/'.$setting->product_image1) : asset('assets/img/product-amp.webp')}}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-md-6 p-0 d-flex justify-content-center align-items-center">
                    <div class="pb-0">
                        <img src="{{ isset($setting->product_image2) ? asset('products/'.$setting->product_image2) : asset('assets/img/product-amp.webp')}}" alt="" class="img-fluid">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="" style="padding-top: 60px;">
                        {!! $setting->product_detail2 !!}
                        {{-- <ul class="list-unstyled p-5 mb-0 text-grey-two fontw300">
                            <li>
                                <p class="">DIGITAL SIGNAL PROCESSORS</p>
                            </li>
                            <li>
                                <h3 class="py-4 fontw300">{{isset($setting->product_name2) ? $setting->product_name2 : 'PROCESSING SOUND TO YOUR REQUIREMENTS'}}</h3>
                            </li>
                            <li>
                                <p class="">{!! isset($setting->product_detail2) ? $setting->product_detail2 : 'Our digital signal processors allow you to really tune the soundstage within
                                    your
                                    vehicle' !!}. </p>
                            </li>
                            <li>
                                <!-- <p class="py-4">From time alignment, crossover slopes and gain control, each step brings
                                    you close to
                                    audio nirvana.</p> -->
                            </li>
                            <li>
                                <a href="#" class="text-maroon" style="text-underline-offset: 5px;">Find Out More</a>
                            </li>
                        </ul> --}}
                    </div>
                </div>
            </div>
    </section>

    <!-- products -->
    <!-- tradition section -->

    <section class="tradition vh-100 position-relative" style="background-image: url('{{ asset('sections/'. $setting->section4_background) }}'); ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 fontw300">
                    <div class="text_Wrapper_section bg-white text-center position-absolute p-5">
                        <div class="heading_Wrapper">{!! $setting->s4_descrip  !!}</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- tradition section -->

    <!-- Still have a question -->
    <section class="faqs">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-12 overflow-hidden p-0">
                    <div class="bg_image position-relative"
                        style="background-image: url('{{ asset('sections/'. $setting->sub_s4_img1) }}'); ">
                        <div class="position-absolute text-white" style="top: 50%; text-align: center; left: 20%;">
                            <p class="text-white">{!! $setting->sub_s4_title1 !!}</p>
                            <button class="btn btn-danger">{{ $setting->sub_s4_btn1 }}</button>

                        </div>
                        {{-- <div>


                        </div> --}}
                    </div>
                </div>

                <div class="col-md-4 col-12 overflow-hidden p-0">
                    <div class="bg_image position-relative"
                        style="background-image: url('{{ asset('sections/'. $setting->sub_s4_img2) }}'); ">
                        <div class="position-absolute text-white" style="top: 51%; text-align: center; left: 20%;">
                            <p class="text-white"> {!! $setting->sub_s4_title2 !!} </p>
                            <button class="btn btn-danger">{{ $setting->sub_s4_btn2 }}</button>

                        </div>
                        {{-- <div>


                        </div> --}}
                    </div>
                </div>


                 <div class="col-md-4 col-12 overflow-hidden p-0">
                    <div class="bg_image position-relative"
                        style="background-image: url('{{ asset('sections/'. $setting->sub_s4_img3) }}'); ">
                        <div class="position-absolute text-white" style="top: 52%; text-align: center; left: 20%;">
                            <p class="text-white"> {!! $setting->sub_s4_title3 !!} </p>
                            <button class="btn btn-danger">{{ $setting->sub_s4_btn3 }}</button>

                        </div>
                        {{-- <div>


                        </div> --}}
                    </div>
                </div>



            </div>
        </div>
    </section>
    <!-- Still have a question -->

    <!-- footer section -->
    @include("layouts.footer")
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
    <!-- Jquery CDN -->




    <script src="{{asset('assets/js/steper.js')}}"></script>



    <!-- owl carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#logout-btn").on("click", function(event){
                // alert("sdkfjj")
                event.preventDefault();
                $("#logout-form").submit();
            })

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
    </script>


</body>

</html>
