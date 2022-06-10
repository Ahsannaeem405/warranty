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

            @if(session()->has("success"))
                <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script>
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'My Product added successfully!',
                        showConfirmButton: false,
                        timer: 2500
                    });
                </script>
            @endif

                                    <div class="col-md-4 mb-5 mt-5 m-auto ">
                                        <div class="card shadowDiv shadow shadow-lg border-rounded-1 border-1 pb-3">
                                            <img src="{{isset($find->image) ? $find->image : asset('assets/img/banner.jpg')}}" alt=""
                                                class="img-fluid position-relative border-rounded p-2">
                                            <div class="reviewTag text-end pe-3 py-3 position-absolute"
                                                style="left: 80%;">
                                                <!-- <span class="badge bg-creamy text-danger">4.9</span> -->
                                            </div>
                                            <div class="card-body pb-0">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="card-title font-23"> {{$find->name}} </h4>
                                                    <!-- <button class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Add Product</button> -->
                                                </div>
                                                <div class="div">
                                                    <p class="card-text text-grey-three font-12"><strong>SKU: </strong> {{$find->sku}} | <strong>Serial No.: </strong> {{$find->serial_no}}
                                                        </p>
                                                </div>
{{--                                                <div>--}}
{{--                                                    <p class="font-9 mb-0 my-3">Price</p>--}}
{{--                                                </div>--}}
{{--                                                <div class="pricing-review d-flex justify-content-between">--}}
{{--                                                    <div class="pricing">--}}
{{--                                                        <h4>${{$find->price}}</h4>--}}
{{--                                                    </div>--}}
                                                    <!-- <div class="font-10">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <div class="varies">
                                                            <p class="mb-0 pt-2 text-end text-grey-one">4.7(108)</p>
                                                        </div>
                                                    </div> -->
{{--                                                </div>--}}
                                            </div>
                                            <!-- <div class="variesDiv px-3">
                                                <div class="pricing-varies">
                                                    <p class="mb-3 text-grey-one">Price Varies</p>
                                                </div>
                                            </div> -->
{{--                                            <div class="proceding px-3 d-flex">--}}
{{--                                                <a><i class="fa fa-check checked text-success font-9"></i></a>--}}
{{--                                                <p class="text-grey-one mb-0 font-15 mb-0 pt-1 ps-1"><strong>Expiry Date: </strong> {{\Carbon\Carbon::create($find->expiry_date)->format("d M, Y")}} </p>--}}
{{--                                            </div>--}}
{{--                                            <div class="proceding px-3 d-flex">--}}
{{--                                                <div class="div d-flex pe-3">--}}
{{--                                                    <a href="#" class=""><i--}}
{{--                                                            class="fa fa-check text-center checked text-success font-10"></i></a>--}}
{{--                                                    <p class="text-grey-one font-15 mb-0 pt-1 ps-1"><strong>Purchase Date: </strong> {{\Carbon\Carbon::create($find->purchase_date)->format("d M, Y")}}--}}
{{--                                                    </p>--}}
{{--                                                </div>--}}
                                                <!-- <div class="div d-flex">
                                                    <a><i class="fa fa-star checked text-grey-one font-9"></i></a>
                                                    <p class="text-grey-one font-15 mb-0 pt-1 ps-1">New on Entrada</p>
                                                </div> -->
{{--                                            </div>--}}
                                            @if(auth()->check())
                                            <a href="#" class="btn btn-sm btn-danger mt-3 mx-3" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Add Product</a>
                                            @endif
                                        </div>
                                    </div>




<!-- Start Model -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">My Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body p-5">
                <form action="{{ route('add-product') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="product_id" value="{{ $find->id }}">


                    <div class="row">
                        <div class="col-6 py-2">
                            <label>Country Name</label>
                            <input type="text" name="country_name"
                                   placeholder="Enter Country name" class="form-control" required>
                        </div>

                        <div class="col-6 py-2">
                            <label for="" class="pb-0">Dealer Name</label>
                            <input name="dealer_name" type="text" class="form-control" required placeholder="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6 py-1">
                            <label for="" class="pb-0">Date of Purchase</label>
                            <input name="date_of_purchase" type="date" value="" class="form-control" data-height="100" required />
                        </div>

                        {{-- <div class="col-6 py-2">
                            <label for="" class="pb-0">Expiry</label>
                            <input name="expiry" type="date" class="form-control" required placeholder="">
                        </div> --}}
                    </div>

                    <div class="row pt-3">
                        <div class="col-lg-12 text-start">
                            <button type="submit" class="btn btn-primary">Add My Product</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
 </div>


    <!-- NavBar section end -->

    <!-- Warranty-check Section -->
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
    <script>
        $(document).ready(function(){
            $(".fixed-top").removeClass("fixed-top");
        })
    </script>

</body>

</html>
