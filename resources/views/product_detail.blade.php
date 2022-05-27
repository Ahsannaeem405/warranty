<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Bootstrap 5 link -->
    <link rel="stylesheet" href="{{asset('assets/css/product.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/reset.css')}}">
    <!--  font awesome cdn  -->
    <script src="https://kit.fontawesome.com/9838783293.js" crossorigin="anonymous"></script>
    <!--  font awesome cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Product Detail</title>
</head>

<body>
@include("layouts.user-menu")

    <div class="container py-5">
        <div class="card-wrapper my-5" id="card-images">
            <div class="card">
                <!-- card left -->
                <div class="product-imgs">
                    <div class="img-display">
                        <div class="img-showcase">
                            <img src="{{asset('assets/img/NC-501_400x.webp')}}" alt="shoe image">
                            <img src="{{asset('assets/img/NC-A200_600x.webp')}}" alt="shoe image">
                            <img src="{{asset('assets/img/NC-A300_400x.webp')}}" alt="shoe image">
                            <img src="{{asset('assets/img/ND49W_36338682-878d-472e-b0e9-b64c985d4a51_600x.webp')}}" alt="shoe image">
                        </div>
                    </div>
                    <div class="img-select">
                        <div class="img-item">
                            <a href="#" data-id="1">
                                <img src="{{asset('assets/img/NC-501_400x.webp')}}" alt="shoe image">
                            </a>
                        </div>
                        <div class="img-item">
                            <a href="#" data-id="2">
                                <img src="{{asset('assets/img/NC-A200_600x.webp')}}" alt="shoe image">
                            </a>
                        </div>
                        <div class="img-item">
                            <a href="#" data-id="3">
                                <img src="{{asset('assets/img/NC-A300_400x.webp')}}" alt="shoe image">
                            </a>
                        </div>
                        <div class="img-item">
                            <a href="#" data-id="4">
                                <img src="{{asset('assets/img/ND49W_36338682-878d-472e-b0e9-b64c985d4a51_600x.webp')}}" alt="shoe image">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- card right -->
                <div class="product-content">
                    <h2 class="product-title">{{$product_detail->name}}</h2>

                    <!-- <div class="product-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star color_gray"></i>



                        <i class="fas fa-star-half-alt"></i>
                        <span>4 (21)</span>
                    </div> -->

                    <div class="product-price">
                        <!-- <p class="last-price">Old Price: <span>$257.00</span></p> -->
                        <p class="new-price">Price: <span>${{$product_detail->price}}</span></p>
                    </div>

                    <div class="product-detail">
                        <h2>About this item: </h2>
                        <p>{{$product_detail->description}}</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, perferendis eius.
                            Dignissimos, labore suscipit. Unde.</p>
                        <ul>
                            <li>Color: <span>Black</span></li>
                            <li>Available: <span>in stock</span></li>
                            <li>Category: <span>Shoes</span></li>
                            <li>Shipping Area: <span>All over the world</span></li>
                            <li>Shipping Fee: <span>Free</span></li>
                        </ul>
                    </div>

                    <div class="purchase-info d-flex">
                        <input type="number" class="mt-0" min="0" value="1">
                        <button type="button" class="btn px-4">View
                            <!-- View <i class="fas fa-shopping-cart"></i> -->
                        </button>
                        <!-- <button type="button" class="btn">Compare</button> -->
                    </div>

                    <!-- <div class="social-links">
                    <p>Share At: </p>
                    <a href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-pinterest"></i>
                    </a>
                </div> -->
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
    <!-- Bootstrap5 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function(){
                $(".fixed-top").removeClass("fixed-top");
            })
        </script>
    <!-- Bootstrap5 CDN -->
    <script>
        const imgs = document.querySelectorAll('.img-select a');
        const imgBtns = [...imgs];
        let imgId = 1;

        imgBtns.forEach((imgItem) => {
            imgItem.addEventListener('click', (event) => {
                event.preventDefault();
                imgId = imgItem.dataset.id;
                slideImage();
            });
        });

        function slideImage() {
            const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

            document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
        }

        window.addEventListener('resize', slideImage);
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>