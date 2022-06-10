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

@include("layouts.user-menu")

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
            @if(session()->has("success"))
                <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script>
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Product removed successfully!',
                        showConfirmButton: false,
                        timer: 2500
                    });
            </script>
            @endif

{{--            {{dd($myProducts)}}--}}
{{--            @if($myProducts->count() == 1)--}}
{{--                {{dd('hello2')}}--}}
                @foreach($myProducts as $myproduct)
                    {{--{{dd($myproduct)}}--}}
                    <div class="col-lg-3 col-md-4 col-6 py-2 text-center shadow shadow-lg  border border-3">
                        <div class="img_div">
                            <img src="{{isset($myproduct->image) ? $myproduct->image : asset('assets/img/NC-501_400x.webp')}}" class="img-fluid" alt="">
                        </div>

                        <p class="h5 text-danger mt-2 fw-bold">{{$myproduct->name}}</p>
                        <p class="card-text text-grey-three font-12"><strong>SKU: </strong> {{$myproduct->sku}} | <strong>Serial No.: </strong> {{$myproduct->serial_no}}
                        </p>

                        <div class="row mt-3 justify-content-center">
                            <div class="col-lg-5">
                                <p class="card-text text-grey-three font-12"><strong>Dealer Name:</strong> {{$myproduct->dealer_name}}</p>
                            </div>

                            <div class="col-lg-5">
                                <p class="card-text text-grey-three font-12"><strong>Country:</strong> {{$myproduct->country_of_purchase}}</p>
                            </div>
                        </div>
                        <a id="trash_it"  href="{{route('product-remove', ['id' => $myproduct['product_id']])}}"
                           class="btn border border-danger text-danger btn-sm btn-rounded">
                            <i class="fa fa-trash"></i></a>
                        <div class="row mt-3 justify-content-center">
                            <div class="col-lg-6">
                                <p class="card-text text-grey-three font-12"><strong>Purchase Date:</strong> {{date('F d, Y', strtotime($myproduct->date_of_purchase))}}</p>
                            </div>

                            <div class="col-lg-5">
                                <p class="card-text text-grey-three font-12"><strong>Expiry:<br></strong> {{date('F d, Y', strtotime($myproduct->expiry))}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
{{--            @else--}}
{{--                {{dd('hello')}}--}}
{{--                <div class="col-lg-3 col-md-4 col-6 py-2 text-center shadow shadow-lg  border border-3">--}}
{{--                    <div class="img_div">--}}
{{--                        <a href="{{route('product_detail', ['product_id' => $myProducts['product_id']])}}"><img src="{{isset($myProducts->image) ? $myProducts->image : asset('assets/img/NC-501_400x.webp')}}" class="img-fluid" alt=""></a>--}}
{{--                    </div>--}}

{{--                    <p class="h5 text-danger mt-2 fw-bold">{{$myProducts->name}}</p>--}}
{{--                    <p class="card-text text-grey-three font-12"><strong>SKU: </strong> {{$myProducts->sku}} | <strong>Serial No.: </strong> {{$myProducts->serial_no}}--}}
{{--                    </p>--}}
{{--                    --}}{{--                <p class="m-0"> <strong>Price: </strong> ${{$myproduct->price}}</p>--}}
{{--                    --}}{{--                <p class="m-0"> <strong>Expiry:  </strong> {{\Carbon\Carbon::create($myproduct->expiry_date)->format("d M, Y")}}</p>--}}
{{--                    --}}{{--                <p class=""> <strong>Purchased Date: </strong> {{\Carbon\Carbon::create($myproduct->purchased_date)->format("d M, Y")}}</p>--}}


{{--                    <a  href="{{route('product_detail', ['product_id' => $myProducts['product_id']])}}" class="btn border border-success text-success btn-sm btn-rounded"><i class="fa fa-eye"></i></a>--}}

{{--                    <div class="row">--}}
{{--                        <div class="col-lg-3">--}}
{{--                            <p class="h5 text-danger mt-2 fw-bold"><strong>Dealer Name:</strong> {{$myProducts->dealer_name}}</p>--}}
{{--                        </div>--}}

{{--                        <div class="col-lg-3">--}}
{{--                            <p class="h5 text-danger mt-2 fw-bold"><strong>Country:</strong> {{$myProducts->country_name}}</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="row">--}}
{{--                        <div class="col-lg-3">--}}
{{--                            <p class="h5 text-danger mt-2 fw-bold"><strong>Purchase Date:</strong> {{date('F d, Y', strtotime($myProducts->date_of_purchase))}}</p>--}}
{{--                        </div>--}}

{{--                        <div class="col-lg-3">--}}
{{--                            <p class="h5 text-danger mt-2 fw-bold"><strong>Expiry:</strong> {{date('F d, Y', strtotime($myProducts->expiry))}}</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--             @endif--}}
            <!-- <div class="col-12 py-5 text-center">
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
            </div> -->
        </div>
    </div>


       <!-- footer section -->
@include("layouts.footer")
    <!-- footer section -->
    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#trash_it").on("click", function(){
                return confirm("Are sure to remove this product?");
            });
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
