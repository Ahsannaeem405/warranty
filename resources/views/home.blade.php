<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Management</title>
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{asset('assets/css/reset.css')}}">

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

<body class="">
    <header class=" vh-130">
        <section class="navigationBar">
            <nav class="navbar navbar-expand-lg navbar-light py-md-3 ps-md-5 ms-md-3">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon "></span>
                    </button>
                    <a class="navbar-brand fontw700 font-24 text-white pb-3" href="#">Emprise</a>
                    <div class="collapse navbar-collapse px-5" id="navbarTogglerDemo03">
                        <ul class="navbar-nav  me-md-auto mb-2 mb-md-0" id="navbar-nav">
                            <li class="nav-item ">
                                <a class="nav-link active px-md-3 fontw500 text-white" aria-current="page"
                                    href="#">Destination</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active px-md-4 fontw500 text-white" href="#">Activites</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active fontw500 text-white" href="#">Specials</a>
                            </li>
                            <li>
                                <div class="search-box ps-4">
                                    <input class="search-input mt-2" type="text" name="" placeholder="Search Venue">
                                    <div class="search-btn">
                                        <i class="fas fa-search text-white"></i>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        @if(auth()->check())
                        <!-- <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown"> -->
                                    <a class="btn rounded-pill text-white bg-success" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                        @else
                        <form class="d-flex">
                            <button class="btn rounded-pill text-white bg-primary mr-2" type="button">Login</button>
                            <button class="btn rounded-pill text-black bg-white" type="button">Sign up</button>
                        </form>
                        @endif
                    </div>
                </div>
            </nav>
        </section>
        
    <section class="Banner mx-3 mx-md-0">
        <div class="container position-relative main mt-md-5 mt-3">
            <div class="position-absolute overlay w-100 h-100">

            </div>
            <div class="row px-md-5 mx-md-2 mb-5 pb-5">
                <div class="col-md-12 z1">
                    <div class="bannerText">
                        <p class="text-white fontw500 pt-5 m-0"><span><i class="fa fa-minus fa-lg"
                                    aria-hidden="true"></i></span> The Himaliyan Mountain Ranges</p>
                    </div>
                </div>
                <div class="col-md-12 col-sm-6 z1">
                    <div class="banner-heading">
                        <h1 class="fontw700 font-70 text-white m-0 py-3">Event Management</h1>
                    </div>
                </div>
                <div class="col-md-6 z1">
                    <div class="temp">
                        <p class="text-white">-02<sup class="font-15 p-0">&deg;</sup>C very Cold</p>
                    </div>
                </div>
                <div class="offset-lg-2 col-lg-4 z1">
                    <div class="banking d-flex">
                        <div class="bankingCard pe-3">
                            <a href="#"><i class="fa fa-credit-card-alt p-3 faa-icon" aria-hidden="true"></i></a>
                        </div>
                        <p class="text-white pb-0 mb-0">We Accept Payment Through All Cards & Banking</p>
                    </div>
                    <div class=" pt-0 ps-5 ms-3">
                        <a href="#" class="z1 text-white fontw500">Book Now!</a>
                    </div>
                </div>
            </div>

            <div class="row z1 selectDestination d-flex justify-content-center position-relative">
                <div class="col-md-12 selectionLocation bg-white position-absolute px-4">
                    <div class="search location">
                        <div class="row py-4">
                            <div class="col-md-3 location">
                                <div class="location-heading">
                                    <h3 class="font-20 fontw700">Location:</h3>
                                </div>
                                <div class="input-group mb-3 py-3">
                                    <input type="text" placeholder="Enter Location"
                                        class="form-control border-right-0 hasDatepicker"
                                        aria-describedby="basic-addon2">
                                    <span class="input-group-text bg-transparent border-left-0" id="basic-addon2"><i
                                            class="fa fa-map-marker text-grey-three"></i></span>
                                </div>
                            </div>

                            <div class="col-md-3 activities">
                                <div class="location-heading">
                                    <h3 class="font-20 fontw700">Category:</h3>
                                </div>
                                <div class="input-group mb-3 py-3">
                                    <select class="form-select" id="inputGroupSelect03"
                                        aria-label="Example select with button addon">
                                        <option selected>Choose...</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3 Datepicking">
                                <div class="location-heading">
                                    <h3 class="font-20 fontw700">Date:</h3>
                                </div>

                                <!-- <div class="input-group mb-3 py-3">
                                    <input type="text" placeholder="Enter Date" class="form-control border-right-0 hasDatepicker" id="datepicker" aria-describedby="basic-addon2">
                                    <span class="input-group-text bg-transparent border-left-0" id="basic-addon2"><i
                      class="fa fa-calendar text-grey-three"></i></span>
                                </div> -->

                                <div class="input-group mb-3 py-3">
                                    <input type="text" class="form-control border-right-0" id="datepicker"
                                        aria-describedby="basic-addon2" autocomplete="off">
                                    <span class="input-group-text bg-transparent border-left-0" id="basic-addon2"><i
                                            class="fa fa-calendar text-maroon"></i></span>
                                </div>

                            </div>


                            <div class="col-md-3 searchbtn d-flex justify-content-center align-items-center">
                                <form class="location-input" action="">
                                    <button class="btn btn-maroon-light p-3" type="button"><i
                                            class="fa fa-search font-30" aria-hidden="true"></i></button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </header>

    <!-- NavBar section end -->

        </div>
    </section>

    <section class="categories pt-5 my-5">
        <div class="container">
            <div class="row ">
                <div class="col-6">
                    <h3 class="mb-3 fontw700">Select Category</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="col-6 text-right d-flex justify-content-end">
                    <div class="caraousel-button pe-1">
                        <button class="btn btn-maroon-light mb-3 me-1 rounded-circle py-2"
                            data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon d-flex justify-content-center"
                                style="width: 1.5rem;" aria-hidden="true"></span>
                        </button>
                    </div>
                    <div class="caraousel-button">
                        <button class="btn btn-maroon-light mb-3 rounded-circle py-2"
                            data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
                            <span class="carousel-control-next-icon d-flex justify-content-center"
                                style="width: 1.5rem;" aria-hidden="true"></span>
                        </button>
                    </div>
                </div>
                <div class="col-12">
                    <div id="carouselExampleIndicators2" class="carousel slide">

                        <div class="carousel-inner">
                            <div class="carousel-item p-4 active">
                                <div class="row">
                                    <div class="col-md-3 mb-3">
                                        <div class="card shadowDiv rounded-3">
                                            <div class="reviewTag text-end pe-3 py-3">
                                                <span class="badge bg-creamy text-creamy">4.9</span>
                                            </div>
                                            <a href="#" class="ps-4 pt-4"><i
                                                    class="fa-solid fa-umbrella-beach font-34 text-seagreen1"></i></a>
                                            <div class="card-body">
                                                <h4 class="card-title font-23">Beach Activity</h4>
                                                <p class="card-text text-grey-three font-12">196 Activity</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="card shadowDiv rounded-3">
                                            <div class="reviewTag text-end pe-3 py-3">
                                                <span class="badge bg-creamy text-creamy">4.9</span>
                                            </div>
                                            <a href="#" class="ps-4 pt-4"><i
                                                    class="fa-solid fa-umbrella-beach font-34 text-seagreen1"></i></a>
                                            <div class="card-body">
                                                <h4 class="card-title font-23">Beach Activity</h4>
                                                <p class="card-text text-grey-three font-12">196 Activity</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="card shadowDiv rounded-3">
                                            <div class="reviewTag text-end pe-3 py-3">
                                                <span class="badge bg-creamy text-creamy">4.9</span>
                                            </div>
                                            <a href="#" class="ps-4 pt-4"><i
                                                    class="fa-solid fa-umbrella-beach font-34 text-seagreen1"></i></a>
                                            <div class="card-body">
                                                <h4 class="card-title font-23">Bungee Jump</h4>
                                                <p class="card-text text-grey-three font-12">196 Activity</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="card shadowDiv rounded-3">
                                            <div class="reviewTag text-end pe-3 py-3">
                                                <span class="badge bg-creamy text-creamy">4.9</span>
                                            </div>
                                            <a href="#" class="ps-4 pt-4"><i
                                                    class="fa-solid fa-umbrella-beach font-34 text-seagreen1"></i></a>
                                            <div class="card-body">
                                                <h4 class="card-title font-23">Beach Activity</h4>
                                                <p class="card-text text-grey-three font-12">196 Activity</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item p-4">
                                <div class="row">

                                    <div class="col-md-3 mb-3">
                                        <div class="card shadowDiv rounded-3">
                                            <div class="reviewTag text-end pe-3 py-3">
                                                <span class="badge bg-creamy text-creamy">4.9</span>
                                            </div>
                                            <a href="#" class="ps-4 pt-4"><i
                                                    class="fa-solid fa-umbrella-beach font-34 text-seagreen1 text-seagreen1"></i></a>
                                            <div class="card-body">
                                                <h4 class="card-title font-23">Beach Activity</h4>
                                                <p class="card-text text-grey-three font-12">196 Activity</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="card shadowDiv rounded-3">
                                            <div class="reviewTag text-end pe-3 py-3">
                                                <span class="badge bg-creamy text-creamy">4.9</span>
                                            </div>
                                            <a href="#" class="ps-4 pt-4"><i
                                                    class="fa-solid fa-umbrella-beach font-34 text-seagreen1"></i></a>
                                            <div class="card-body">
                                                <h4 class="card-title font-23">Beach Activity</h4>
                                                <p class="card-text text-grey-three font-12">196 Activity</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="card shadowDiv rounded-3">
                                            <div class="reviewTag text-end pe-3 py-3">
                                                <span class="badge bg-creamy text-creamy">4.9</span>
                                            </div>
                                            <a href="#" class="ps-4 pt-4"><i
                                                    class="fa-solid fa-umbrella-beach font-34 text-seagreen1"></i></a>
                                            <div class="card-body">
                                                <h4 class="card-title font-23">Beach Activity</h4>
                                                <p class="card-text text-grey-three font-12">196 Activity</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item p-4">
                                <div class="row">

                                    <div class="col-md-3 mb-3">
                                        <div class="card shadowDiv rounded-3">
                                            <div class="reviewTag text-end pe-3 py-3">
                                                <span class="badge bg-creamy text-creamy">4.9</span>
                                            </div>
                                            <a href="#" class="ps-4 pt-4"><i
                                                    class="fa-solid fa-umbrella-beach font-34 text-seagreen1"></i></a>
                                            <div class="card-body">
                                                <h4 class="card-title font-23">Beach Activity</h4>
                                                <p class="card-text text-grey-three font-12">196 Activity</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="card shadowDiv rounded-3">
                                            <div class="reviewTag text-end pe-3 py-3">
                                                <span class="badge bg-creamy text-creamy">4.9</span>
                                            </div>
                                            <a href="#" class="ps-4 pt-4"><i
                                                    class="fa-solid fa-umbrella-beach font-34 text-seagreen1"></i></a>
                                            <div class="card-body">
                                                <h4 class="card-title font-23">Beach Activity</h4>
                                                <p class="card-text text-grey-three font-12">196 Activity</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="card shadowDiv rounded-3">
                                            <div class="reviewTag text-end pe-3 py-3">
                                                <span class="badge bg-creamy text-creamy">4.9</span>
                                            </div>
                                            <a href="#" class="ps-4 pt-4"><i
                                                    class="fa-solid fa-umbrella-beach font-34 text-seagreen1"></i></a>
                                            <div class="card-body">
                                                <h4 class="card-title font-23">Beach Activity</h4>
                                                <p class="card-text text-grey-three font-12">196 Activity</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Trending -->
    <section class="trending my-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h3 class="mb-3 fontw700">Trending 2022</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="col-6 text-right d-flex justify-content-end">
                    <div class="caraousel-button pe-1">
                        <button class="btn btn-maroon-light mb-3 me-1 rounded-circle py-2"
                            data-bs-target="#carouselExampleIndicators21" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon d-flex justify-content-center"
                                style="width: 1.5rem;" aria-hidden="true"></span>
                        </button>
                    </div>
                    <div class="caraousel-button">
                        <button class="btn btn-maroon-light mb-3 rounded-circle py-2"
                            data-bs-target="#carouselExampleIndicators21" data-bs-slide="next">
                            <span class="carousel-control-next-icon d-flex justify-content-center"
                                style="width: 1.5rem;" aria-hidden="true"></span>
                        </button>
                    </div>
                </div>
                <div class="col-12">
                    <div id="carouselExampleIndicators21" class="carousel slide">

                        <div class="carousel-inner">
                            <div class="carousel-item p-4 active">
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <div class="card shadowDiv border-rounded-1 border-1 pb-3">
                                            <img src="./img/banner.jpg" alt=""
                                                class="img-fluid position-relative border-rounded p-2">
                                            <div class="reviewTag text-end pe-3 py-3 position-absolute"
                                                style="left: 80%;">
                                                <span class="badge bg-creamy text-danger">4.9</span>
                                            </div>
                                            <div class="card-body pb-0">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="card-title font-23">Montain Hiking Tour</h4>
                                                    <i class="fa fa-heart-o text-grey-three pt-2"></i>
                                                </div>
                                                <div class="div">
                                                    <p class="card-text text-grey-three font-12">Hiking tour | Stoke on
                                                        Trent</p>
                                                </div>

                                                <div>
                                                    <p class="font-9 mb-0 my-3">From</p>

                                                </div>

                                                <div class="pricing-review d-flex justify-content-between">
                                                    <div class="pricing">
                                                        <h4>$895.44</h4>
                                                    </div>
                                                    <div class="font-10">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <div class="varies">
                                                            <p class="mb-0 pt-2 text-end text-grey-one">4.7(108)</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="variesDiv px-3">
                                                <div class="pricing-varies">
                                                    <p class="mb-3 text-grey-one">Price Varies</p>
                                                </div>
                                            </div>
                                            <div class="proceding px-3 d-flex">
                                                <a><i class="fa fa-star checked text-grey-one font-9"></i></a>
                                                <p class="text-grey-one mb-0 font-15 mb-0 pt-1 ps-1">7 Days</p>
                                            </div>
                                            <div class="proceding px-3 d-flex">
                                                <div class="div d-flex pe-3">
                                                    <a href="#" class=""><i
                                                            class="fa fa-star text-center checked text-grey-one font-9"></i></a>
                                                    <p class="text-grey-one font-15 mb-0 pt-1 ps-1">Free Cancellation
                                                    </p>
                                                </div>

                                                <div class="div d-flex">
                                                    <a><i class="fa fa-star checked text-grey-one font-9"></i></a>
                                                    <p class="text-grey-one font-15 mb-0 pt-1 ps-1">New on Entrada</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card shadowDiv border-rounded-1 border-1 pb-3">
                                            <img src="./img/banner1.jpg" alt=""
                                                class="img-fluid position-relative border-rounded p-2">
                                            <div class="reviewTag text-end pe-3 py-3 position-absolute"
                                                style="left: 80%;">
                                                <span class="badge bg-creamy text-danger">4.9</span>
                                            </div>
                                            <div class="card-body pb-0">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="card-title font-23">Montain Hiking Tour</h4>
                                                    <i class="fa fa-heart-o text-grey-three pt-2"></i>
                                                </div>
                                                <div class="div">
                                                    <p class="card-text text-grey-three font-12">Hiking tour | Stoke on
                                                        Trent</p>
                                                </div>

                                                <div>
                                                    <p class="font-9 mb-0 my-3">From</p>

                                                </div>

                                                <div class="pricing-review d-flex justify-content-between">
                                                    <div class="pricing">
                                                        <h4>$895.44</h4>
                                                    </div>
                                                    <div class="font-10">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <div class="varies">
                                                            <p class="mb-0 pt-2 text-end text-grey-one">4.7(108)</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="variesDiv px-3">
                                                <div class="pricing-varies">
                                                    <p class="mb-3 text-grey-one">Price Varies</p>
                                                </div>
                                            </div>
                                            <div class="proceding px-3 d-flex">
                                                <a><i class="fa fa-star checked text-grey-one font-9"></i></a>
                                                <p class="text-grey-one mb-0 font-15 mb-0 pt-1 ps-1">7 Days</p>
                                            </div>
                                            <div class="proceding px-3 d-flex">
                                                <div class="div d-flex pe-3">
                                                    <a href="#" class=""><i
                                                            class="fa fa-star text-center checked text-grey-one font-9"></i></a>
                                                    <p class="text-grey-one font-15 mb-0 pt-1 ps-1">Free Cancellation
                                                    </p>
                                                </div>

                                                <div class="div d-flex">
                                                    <a><i class="fa fa-star checked text-grey-one font-9"></i></a>
                                                    <p class="text-grey-one font-15 mb-0 pt-1 ps-1">New on Entrada</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <div class="card shadowDiv border-rounded-1 border-1 pb-3">
                                            <img src="./img/banner3.jpg" alt=""
                                                class="img-fluid position-relative border-rounded p-2">
                                            <div class="reviewTag text-end pe-3 py-3 position-absolute"
                                                style="left: 80%;">
                                                <span class="badge bg-creamy text-danger">4.9</span>
                                            </div>
                                            <div class="card-body pb-0">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="card-title font-23">Montain Hiking Tour</h4>
                                                    <i class="fa fa-heart-o text-grey-three pt-2"></i>
                                                </div>
                                                <div class="div">
                                                    <p class="card-text text-grey-three font-12">Hiking tour | Stoke on
                                                        Trent</p>
                                                </div>

                                                <div>
                                                    <p class="font-9 mb-0 my-3">From</p>

                                                </div>

                                                <div class="pricing-review d-flex justify-content-between">
                                                    <div class="pricing">
                                                        <h4>$895.44</h4>
                                                    </div>
                                                    <div class="font-10">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <div class="varies">
                                                            <p class="mb-0 pt-2 text-end text-grey-one">4.7(108)</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="variesDiv px-3">
                                                <div class="pricing-varies">
                                                    <p class="mb-3 text-grey-one">Price Varies</p>
                                                </div>
                                            </div>
                                            <div class="proceding px-3 d-flex">
                                                <a><i class="fa fa-star checked text-grey-one font-9"></i></a>
                                                <p class="text-grey-one mb-0 font-15 mb-0 pt-1 ps-1">7 Days</p>
                                            </div>
                                            <div class="proceding px-3 d-flex">
                                                <div class="div d-flex pe-3">
                                                    <a href="#" class=""><i
                                                            class="fa fa-star text-center checked text-grey-one font-9"></i></a>
                                                    <p class="text-grey-one font-15 mb-0 pt-1 ps-1">Free Cancellation
                                                    </p>
                                                </div>

                                                <div class="div d-flex">
                                                    <a><i class="fa fa-star checked text-grey-one font-9"></i></a>
                                                    <p class="text-grey-one font-15 mb-0 pt-1 ps-1">New on Entrada</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="carousel-item p-4">
                                <div class="row">

                                    <div class="col-md-4 mb-3">
                                        <div class="card shadowDiv border-rounded-1 border-1 pb-3">
                                            <img src="./img/banner.jpg" alt=""
                                                class="img-fluid position-relative border-rounded p-2">
                                            <div class="reviewTag text-end pe-3 py-3 position-absolute"
                                                style="left: 80%;">
                                                <span class="badge bg-creamy text-danger">4.9</span>
                                            </div>
                                            <div class="card-body pb-0">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="card-title font-23">Montain Hiking Tour</h4>
                                                    <i class="fa fa-heart-o text-grey-three pt-2"></i>
                                                </div>
                                                <div class="div">
                                                    <p class="card-text text-grey-three font-12">Hiking tour | Stoke on
                                                        Trent</p>
                                                </div>

                                                <div>
                                                    <p class="font-9 mb-0 my-3">From</p>

                                                </div>

                                                <div class="pricing-review d-flex justify-content-between">
                                                    <div class="pricing">
                                                        <h4>$895.44</h4>
                                                    </div>
                                                    <div class="font-10">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <div class="varies">
                                                            <p class="mb-0 pt-2 text-end text-grey-one">4.7(108)</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="variesDiv px-3">
                                                <div class="pricing-varies">
                                                    <p class="mb-3 text-grey-one">Price Varies</p>
                                                </div>
                                            </div>
                                            <div class="proceding px-3 d-flex">
                                                <a><i class="fa fa-star checked text-grey-one font-9"></i></a>
                                                <p class="text-grey-one mb-0 font-15 mb-0 pt-1 ps-1">7 Days</p>
                                            </div>
                                            <div class="proceding px-3 d-flex">
                                                <div class="div d-flex pe-3">
                                                    <a href="#" class=""><i
                                                            class="fa fa-star text-center checked text-grey-one font-9"></i></a>
                                                    <p class="text-grey-one font-15 mb-0 pt-1 ps-1">Free Cancellation
                                                    </p>
                                                </div>

                                                <div class="div d-flex">
                                                    <a><i class="fa fa-star checked text-grey-one font-9"></i></a>
                                                    <p class="text-grey-one font-15 mb-0 pt-1 ps-1">New on Entrada</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card shadowDiv border-rounded-1 border-1 pb-3">
                                            <img src="./img/banner2.jpg" alt=""
                                                class="img-fluid position-relative border-rounded p-2">
                                            <div class="reviewTag text-end pe-3 py-3 position-absolute"
                                                style="left: 80%;">
                                                <span class="badge bg-creamy text-danger">4.9</span>
                                            </div>
                                            <div class="card-body pb-0">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="card-title font-23">Montain Hiking Tour</h4>
                                                    <i class="fa fa-heart-o text-grey-three pt-2"></i>
                                                </div>
                                                <div class="div">
                                                    <p class="card-text text-grey-three font-12">Hiking tour | Stoke on
                                                        Trent</p>
                                                </div>

                                                <div>
                                                    <p class="font-9 mb-0 my-3">From</p>

                                                </div>

                                                <div class="pricing-review d-flex justify-content-between">
                                                    <div class="pricing">
                                                        <h4>$895.44</h4>
                                                    </div>
                                                    <div class="font-10">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <div class="varies">
                                                            <p class="mb-0 pt-2 text-end text-grey-one">4.7(108)</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="variesDiv px-3">
                                                <div class="pricing-varies">
                                                    <p class="mb-3 text-grey-one">Price Varies</p>
                                                </div>
                                            </div>
                                            <div class="proceding px-3 d-flex">
                                                <a><i class="fa fa-star checked text-grey-one font-9"></i></a>
                                                <p class="text-grey-one mb-0 font-15 mb-0 pt-1 ps-1">7 Days</p>
                                            </div>
                                            <div class="proceding px-3 d-flex">
                                                <div class="div d-flex pe-3">
                                                    <a href="#" class=""><i
                                                            class="fa fa-star text-center checked text-grey-one font-9"></i></a>
                                                    <p class="text-grey-one font-15 mb-0 pt-1 ps-1">Free Cancellation
                                                    </p>
                                                </div>

                                                <div class="div d-flex">
                                                    <a><i class="fa fa-star checked text-grey-one font-9"></i></a>
                                                    <p class="text-grey-one font-15 mb-0 pt-1 ps-1">New on Entrada</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card shadowDiv border-rounded-1 border-1 pb-3">
                                            <img src="./img/banner1.jpg" alt=""
                                                class="img-fluid position-relative border-rounded p-2">
                                            <div class="reviewTag text-end pe-3 py-3 position-absolute"
                                                style="left: 80%;">
                                                <span class="badge bg-creamy text-danger">4.9</span>
                                            </div>
                                            <div class="card-body pb-0">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="card-title font-23">Montain Hiking Tour</h4>
                                                    <i class="fa fa-heart-o text-grey-three pt-2"></i>
                                                </div>
                                                <div class="div">
                                                    <p class="card-text text-grey-three font-12">Hiking tour | Stoke on
                                                        Trent</p>
                                                </div>

                                                <div>
                                                    <p class="font-9 mb-0 my-3">From</p>

                                                </div>

                                                <div class="pricing-review d-flex justify-content-between">
                                                    <div class="pricing">
                                                        <h4>$895.44</h4>
                                                    </div>
                                                    <div class="font-10">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <div class="varies">
                                                            <p class="mb-0 pt-2 text-end text-grey-one">4.7(108)</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="variesDiv px-3">
                                                <div class="pricing-varies">
                                                    <p class="mb-3 text-grey-one">Price Varies</p>
                                                </div>
                                            </div>
                                            <div class="proceding px-3 d-flex">
                                                <a><i class="fa fa-star checked text-grey-one font-9"></i></a>
                                                <p class="text-grey-one mb-0 font-15 mb-0 pt-1 ps-1">7 Days</p>
                                            </div>
                                            <div class="proceding px-3 d-flex">
                                                <div class="div d-flex pe-3">
                                                    <a href="#" class=""><i
                                                            class="fa fa-star text-center checked text-grey-one font-9"></i></a>
                                                    <p class="text-grey-one font-15 mb-0 pt-1 ps-1">Free Cancellation
                                                    </p>
                                                </div>

                                                <div class="div d-flex">
                                                    <a><i class="fa fa-star checked text-grey-one font-9"></i></a>
                                                    <p class="text-grey-one font-15 mb-0 pt-1 ps-1">New on Entrada</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item p-4">
                                <div class="row">

                                    <div class="col-md-4 mb-3">
                                        <div class="card shadowDiv border-rounded-1 border-1 pb-3">
                                            <img src="./img/banner3.jpg" alt=""
                                                class="img-fluid position-relative border-rounded p-2">
                                            <div class="reviewTag text-end pe-3 py-3 position-absolute"
                                                style="left: 80%;">
                                                <span class="badge bg-creamy text-danger">4.9</span>
                                            </div>
                                            <div class="card-body pb-0">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="card-title font-23">Montain Hiking Tour</h4>
                                                    <i class="fa fa-heart-o text-grey-three pt-2"></i>
                                                </div>
                                                <div class="div">
                                                    <p class="card-text text-grey-three font-12">Hiking tour | Stoke on
                                                        Trent</p>
                                                </div>

                                                <div>
                                                    <p class="font-9 mb-0 my-3">From</p>

                                                </div>

                                                <div class="pricing-review d-flex justify-content-between">
                                                    <div class="pricing">
                                                        <h4>$895.44</h4>
                                                    </div>
                                                    <div class="font-10">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <div class="varies">
                                                            <p class="mb-0 pt-2 text-end text-grey-one">4.7(108)</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="variesDiv px-3">
                                                <div class="pricing-varies">
                                                    <p class="mb-3 text-grey-one">Price Varies</p>
                                                </div>
                                            </div>
                                            <div class="proceding px-3 d-flex">
                                                <a><i class="fa fa-star checked text-grey-one font-9"></i></a>
                                                <p class="text-grey-one mb-0 font-15 mb-0 pt-1 ps-1">7 Days</p>
                                            </div>
                                            <div class="proceding px-3 d-flex">
                                                <div class="div d-flex pe-3">
                                                    <a href="#" class=""><i
                                                            class="fa fa-star text-center checked text-grey-one font-9"></i></a>
                                                    <p class="text-grey-one font-15 mb-0 pt-1 ps-1">Free Cancellation
                                                    </p>
                                                </div>

                                                <div class="div d-flex">
                                                    <a><i class="fa fa-star checked text-grey-one font-9"></i></a>
                                                    <p class="text-grey-one font-15 mb-0 pt-1 ps-1">New on Entrada</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card shadowDiv border-rounded-1 border-1 pb-3">
                                            <img src="./img/banner.jpg" alt=""
                                                class="img-fluid position-relative border-rounded p-2">
                                            <div class="reviewTag text-end pe-3 py-3 position-absolute"
                                                style="left: 80%;">
                                                <span class="badge bg-creamy text-danger">4.9</span>
                                            </div>
                                            <div class="card-body pb-0">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="card-title font-23">Montain Hiking Tour</h4>
                                                    <i class="fa fa-heart-o text-grey-three pt-2"></i>
                                                </div>
                                                <div class="div">
                                                    <p class="card-text text-grey-three font-12">Hiking tour | Stoke on
                                                        Trent</p>
                                                </div>

                                                <div>
                                                    <p class="font-9 mb-0 my-3">From</p>

                                                </div>

                                                <div class="pricing-review d-flex justify-content-between">
                                                    <div class="pricing">
                                                        <h4>$895.44</h4>
                                                    </div>
                                                    <div class="font-10">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <div class="varies">
                                                            <p class="mb-0 pt-2 text-end text-grey-one">4.7(108)</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="variesDiv px-3">
                                                <div class="pricing-varies">
                                                    <p class="mb-3 text-grey-one">Price Varies</p>
                                                </div>
                                            </div>
                                            <div class="proceding px-3 d-flex">
                                                <a><i class="fa fa-star checked text-grey-one font-9"></i></a>
                                                <p class="text-grey-one mb-0 font-15 mb-0 pt-1 ps-1">7 Days</p>
                                            </div>
                                            <div class="proceding px-3 d-flex">
                                                <div class="div d-flex pe-3">
                                                    <a href="#" class=""><i
                                                            class="fa fa-star text-center checked text-grey-one font-9"></i></a>
                                                    <p class="text-grey-one font-15 mb-0 pt-1 ps-1">Free Cancellation
                                                    </p>
                                                </div>

                                                <div class="div d-flex">
                                                    <a><i class="fa fa-star checked text-grey-one font-9"></i></a>
                                                    <p class="text-grey-one font-15 mb-0 pt-1 ps-1">New on Entrada</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card shadowDiv border-rounded-1 border-1 pb-3">
                                            <img src="./img/banner.jpg" alt=""
                                                class="img-fluid position-relative border-rounded p-2">
                                            <div class="reviewTag text-end pe-3 py-3 position-absolute"
                                                style="left: 80%;">
                                                <span class="badge bg-creamy text-danger">4.9</span>
                                            </div>
                                            <div class="card-body pb-0">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="card-title font-23">Montain Hiking Tour</h4>
                                                    <i class="fa fa-heart-o text-grey-three pt-2"></i>
                                                </div>
                                                <div class="div">
                                                    <p class="card-text text-grey-three font-12">Hiking tour | Stoke on
                                                        Trent</p>
                                                </div>

                                                <div>
                                                    <p class="font-9 mb-0 my-3">From</p>

                                                </div>

                                                <div class="pricing-review d-flex justify-content-between">
                                                    <div class="pricing">
                                                        <h4>$895.44</h4>
                                                    </div>
                                                    <div class="font-10">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <div class="varies">
                                                            <p class="mb-0 pt-2 text-end text-grey-one">4.7(108)</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="variesDiv px-3">
                                                <div class="pricing-varies">
                                                    <p class="mb-3 text-grey-one">Price Varies</p>
                                                </div>
                                            </div>
                                            <div class="proceding px-3 d-flex">
                                                <a><i class="fa fa-star checked text-grey-one font-9"></i></a>
                                                <p class="text-grey-one mb-0 font-15 mb-0 pt-1 ps-1">7 Days</p>
                                            </div>
                                            <div class="proceding px-3 d-flex">
                                                <div class="div d-flex pe-3">
                                                    <a href="#" class=""><i
                                                            class="fa fa-star text-center checked text-grey-one font-9"></i></a>
                                                    <p class="text-grey-one font-15 mb-0 pt-1 ps-1">Free Cancellation
                                                    </p>
                                                </div>

                                                <div class="div d-flex">
                                                    <a><i class="fa fa-star checked text-grey-one font-9"></i></a>
                                                    <p class="text-grey-one font-15 mb-0 pt-1 ps-1">New on Entrada</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Trending -->

    <!-- TopVenue -->
    <section class="topVenue my-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h3 class="mb-3 fontw700">Top Venues</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="col-6 text-right d-flex justify-content-end">
                    <div class="caraousel-button pe-1">
                        <button class="btn btn-maroon-light mb-3 me-1 rounded-circle py-2"
                            data-bs-target="#carouselExampleIndicators3" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon d-flex justify-content-center"
                                style="width: 1.5rem;" aria-hidden="true"></span>
                        </button>
                    </div>
                    <div class="caraousel-button">
                        <button class="btn btn-maroon-light mb-3 rounded-circle py-2"
                            data-bs-target="#carouselExampleIndicators3" data-bs-slide="next">
                            <span class="carousel-control-next-icon d-flex justify-content-center"
                                style="width: 1.5rem;" aria-hidden="true"></span>
                        </button>
                    </div>
                </div>
                <div class="col-12">
                    <div id="carouselExampleIndicators3" class="carousel slide">

                        <div class="carousel-inner">
                            <div class="carousel-item p-4 active">
                                <div class="row">
                                    <div class="col-lg-4 mb-4 mb-lg-0">


                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
                                            class="w-100 border-rounded-40 mb-4 position-relative"
                                            style="height: 46% !important;" alt="Boat on Calm Water" />




                                        <img src="./img/banner2.jpg" class="w-100 h-50 border-rounded-40 mb-4"
                                            alt="Wintry Mountain Landscape" />
                                    </div>

                                    <div class="col-lg-4 mb-4 mb-lg-0">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain2.webp"
                                            class="w-100 h-100 border-rounded-40 mb-4" alt="Mountains in the Clouds" />
                                    </div>

                                    <div class="col-lg-4 mb-4 mb-lg-0">
                                        <img src="./img/banner3.jpg" class="w-100 border-rounded-40 mb-4"
                                            style="height: 46%;" alt="Waves at Sea" />

                                        <div class="row h-50">
                                            <div class="col-5">
                                                <img src="./img/banner1.jpg" class="h-100 w-100 border-rounded-40 mb-4"
                                                    alt="Yosemite National Park" />
                                            </div>
                                            <div class="col-7">
                                                <img src="./img/banner.jpg" class="w-100 h-100 border-rounded-40 mb-4"
                                                    alt="Yosemite National Park" />
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item p-4">
                                <div class="row">
                                    <div class="col-lg-4 mb-4 mb-lg-0">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
                                            class="w-100 h-50 border-rounded-40 mb-4" style="height: 46% !important;"
                                            alt="Boat on Calm Water" />

                                        <img src="./img/banner2.jpg" class="w-100 h-50 border-rounded-40 mb-4"
                                            alt="Wintry Mountain Landscape" />
                                    </div>

                                    <div class="col-lg-4 mb-4 mb-lg-0">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain2.webp"
                                            class="w-100 h-100 border-rounded-40 mb-4" alt="Mountains in the Clouds" />
                                    </div>

                                    <div class="col-lg-4 mb-4 mb-lg-0">
                                        <img src="./img/banner3.jpg" class="w-100 border-rounded-40 mb-4"
                                            style="height: 46%;" alt="Waves at Sea" />

                                        <div class="row h-50">
                                            <div class="col-5">
                                                <img src="./img/banner1.jpg" class="h-100 w-100 border-rounded-40 mb-4"
                                                    alt="Yosemite National Park" />
                                            </div>
                                            <div class="col-7">
                                                <img src="./img/banner.jpg" class="w-100 h-100 border-rounded-40 mb-4"
                                                    alt="Yosemite National Park" />
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item p-4">
                                <div class="row">
                                    <div class="col-lg-4 mb-4 mb-lg-0">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
                                            class="w-100 h-50 border-rounded-40 mb-4" style="height: 46% !important;"
                                            alt="Boat on Calm Water" />

                                        <img src="./img/banner2.jpg" class="w-100 h-50 border-rounded-40 mb-4"
                                            alt="Wintry Mountain Landscape" />
                                    </div>

                                    <div class="col-lg-4 mb-4 mb-lg-0">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain2.webp"
                                            class="w-100 h-100 border-rounded-40 mb-4" alt="Mountains in the Clouds" />
                                    </div>

                                    <div class="col-lg-4 mb-4 mb-lg-0">
                                        <img src="./img/banner3.jpg" class="w-100 border-rounded-40 mb-4"
                                            style="height: 46%;" alt="Waves at Sea" />

                                        <div class="row h-50">
                                            <div class="col-5">
                                                <img src="./img/banner1.jpg" class="h-100 w-100 border-rounded-40 mb-4"
                                                    alt="Yosemite National Park" />
                                            </div>
                                            <div class="col-7">
                                                <img src="./img/banner.jpg" class="w-100 h-100 border-rounded-40 mb-4"
                                                    alt="Yosemite National Park" />
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- TopVenue -->

    <!-- Menu Guides -->
    <section class="menuGuides my-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h3 class="mb-3 fontw700">Menu Guides</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="col-6 text-right d-flex justify-content-end">
                    <div class="caraousel-button pe-1">
                        <button class="btn btn-maroon-light mb-3 me-1 rounded-circle py-2"
                            data-bs-target="#carouselExampleIndicators4" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon d-flex justify-content-center"
                                style="width: 1.5rem;" aria-hidden="true"></span>
                        </button>
                    </div>
                    <div class="caraousel-button">
                        <button class="btn btn-maroon-light mb-3 rounded-circle py-2"
                            data-bs-target="#carouselExampleIndicators4" data-bs-slide="next">
                            <span class="carousel-control-next-icon d-flex justify-content-center"
                                style="width: 1.5rem;" aria-hidden="true"></span>
                        </button>
                    </div>
                </div>
                <div class="col-12">
                    <div id="carouselExampleIndicators4" class="carousel slide">

                        <div class="carousel-inner">
                            <div class="carousel-item p-4 active">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div>
                                            <img src="./img/banner2.jpg" style="height: 400px !important;" alt=""
                                                class="img-fluid border-rounded-40">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="div mt-2">
                                                    <h4 class="text-seagreen1">Adventure Guru</h4>
                                                </div>

                                                <div class="mb-5 pb-5">
                                                    <h3>
                                                        Martina James Junior
                                                    </h3>
                                                </div>
                                            </div>

                                            <div class="col-6 mt-5">
                                                <h6>About</h6>
                                                <p class="font-13 text-grey-one">Lorem ipsum dolor sit amet consectetur,
                                                    adipisicing elit. Maiores itaque laudantium voluptatibus?
                                                </p>
                                            </div>

                                            <div class="col-6 mt-5">
                                                <h6>Journey</h6>
                                                <p class="font-13 text-grey-one">Lorem ipsum dolor sit amet consectetur,
                                                    adipisicing elit. Maiores itaque laudantium voluptatibus?
                                                </p>
                                            </div>
                                            <div class="col-12">
                                                <div class="socialLinks">
                                                    <p class="text-black fontw600"><span>LinkedIn</span> /
                                                        <span>Facebook</span> /
                                                        <span>Instagram</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item p-4">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div>
                                            <img src="./img/banner2.jpg" style="height: 400px !important;" alt=""
                                                class="img-fluid border-rounded-40">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="div">
                                                    <h4 class="text-seagreen1">Adventure Guru</h4>
                                                </div>

                                                <div class="mb-5 pb-5">
                                                    <h3>
                                                        Martina James Junior
                                                    </h3>
                                                </div>
                                            </div>

                                            <div class="col-6 mt-5">
                                                <h6>About</h6>
                                                <p class="font-13 text-grey-one">Lorem ipsum dolor sit amet consectetur,
                                                    adipisicing elit. Maiores itaque laudantium voluptatibus?
                                                </p>
                                            </div>

                                            <div class="col-6 mt-5">
                                                <h6>Journey</h6>
                                                <p class="font-13 text-grey-one">Lorem ipsum dolor sit amet consectetur,
                                                    adipisicing elit. Maiores itaque laudantium voluptatibus?
                                                </p>
                                            </div>
                                            <div class="col-12">
                                                <div class="socialLinks">
                                                    <p class="text-black fontw600"><span>LinkedIn</span> /
                                                        <span>Facebook</span> /
                                                        <span>Instagram</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item p-4">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div>
                                            <img src="./img/banner2.jpg" style="height: 400px !important;" alt=""
                                                class="img-fluid border-rounded-40">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="div">
                                                    <h4 class="text-seagreen1">Adventure Guru</h4>
                                                </div>

                                                <div class="mb-5 pb-5">
                                                    <h3>
                                                        Martina James Junior
                                                    </h3>
                                                </div>
                                            </div>

                                            <div class="col-6 mt-5">
                                                <h6>About</h6>
                                                <p class="font-13 text-grey-one">Lorem ipsum dolor sit amet consectetur,
                                                    adipisicing elit. Maiores itaque laudantium voluptatibus?
                                                </p>
                                            </div>

                                            <div class="col-6 mt-5">
                                                <h6>Journey</h6>
                                                <p class="font-13 text-grey-one">Lorem ipsum dolor sit amet consectetur,
                                                    adipisicing elit. Maiores itaque laudantium voluptatibus?
                                                </p>
                                            </div>
                                            <div class="col-12">
                                                <div class="socialLinks">
                                                    <p class="text-black fontw600"><span>LinkedIn</span> /
                                                        <span>Facebook</span> /
                                                        <span>Instagram</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Menu Guide -->

    <!-- Best seller -->
    <section class="bestseller my-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-between">
                    <div>
                        <h4 class="text-blue">Best Seller</h4>
                        <p class="font-400 text-grey-three">Sost Brillient reason Entrada should be your one-stop-shop!
                        </p>
                    </div>
                    <div>
                        <button class="btn btn-maroon-light border-rounded-50">Check All</button>
                    </div>
                </div>
                <div class="col-md-4 col-12 mt-2">
                    <div class="image_div py-3 px-3 position-relative" style="background-image:url('./img/hall.webp');">
                        <div class="row">
                            <div class="col-12">
                                <span class="badge bg-green float-end">30%</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-end mt-30">
                            <div>
                                <h6 class="text-light">10 Days | 9 Nights</h6>
                                <h3 class="text-light">$200</h3>
                            </div>
                            <div class="d-flex ms-4">
                                <button class="btn btn-maroon-light px-3 py-1 h-50 border-rounded-50">Explore</button>
                            </div>
                        </div>
                    </div>
                    <div class="text-center py-3">
                        <h5 class="text-blue">Product 1</h5>
                        <p class="text-grey-three">Checkout daily Deal</p>
                    </div>
                </div>
                <div class="col-md-4 col-12 mt-2">
                    <div class="image_div py-3 px-3 position-relative" style="background-image:url('./img/hall.webp');">
                        <div class="row">
                            <div class="col-12">
                                <span class="badge bg-green float-end">30%</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-end mt-30">
                            <div>
                                <h6 class="text-light">10 Days | 9 Nights</h6>
                                <h3 class="text-light">$200</h3>
                            </div>
                            <div class="d-flex ms-4">
                                <button class="btn btn-maroon-light px-3 py-1 h-50 border-rounded-50">Explore</button>
                            </div>
                        </div>
                    </div>
                    <div class="text-center py-3">
                        <h5 class="text-blue">Product 1</h5>
                        <p class="text-grey-three">Checkout daily Deal</p>
                    </div>
                </div>
                <div class="col-md-4 col-12 mt-2">
                    <div class="image_div py-3 px-3 position-relative" style="background-image:url('./img/hall.webp');">
                        <div class="row">
                            <div class="col-12">
                                <span class="badge bg-green float-end">30%</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-end mt-30">
                            <div>
                                <h6 class="text-light">10 Days | 9 Nights</h6>
                                <h3 class="text-light">$200</h3>
                            </div>
                            <div class="d-flex ms-4">
                                <button class="btn btn-maroon-light px-3 py-1 h-50 border-rounded-50">Explore</button>
                            </div>
                        </div>
                    </div>
                    <div class="text-center py-3">
                        <h5 class="text-blue">Product 1</h5>
                        <p class="text-grey-three">Checkout daily Deal</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- best seller -->

    <!-- second banner -->
    <section class="secondbanner my-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 py-md-5 py-3">
                    <div class="bg-green-grad text-white border-rounded-1 text-center p-0">

                        <div class="secondHeading pt-5">
                            <h6 class="text-center text-white font-45">Tour the World from Your Cough with
                                #ExperienceLive!</h6>
                        </div>
                        <div class="d-flex justify-content-center pt-3">
                            <p class="text-white-50 font-23">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            </p>
                        </div>
                        <div class="sale py-4">
                            <form class="d-flex justify-content-center">
                                <button class="btn btn-white-green rounded-pill py-3 px-5" type="button">Sign
                                    up</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- second banner -->
    <!-- Subscribe section -->
    <section class="subscribe my-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain2.webp"
                        class="w-100 h-100 rounded mb-4" alt="Mountains in the Clouds" />
                </div>
                <div class="col-md-3 mb-4 mb-lg-0">


                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
                        class="w-100 rounded mb-4 position-relative" style="height: 45% !important;"
                        alt="Boat on Calm Water" />



                    <img src="./img/banner2.jpg" class="w-100 h-50 rounded mb-4" alt="Wintry Mountain Landscape" />
                </div>

                <div class="col-md-6">
                    <div class="row">
                        <div class="col-12">
                            <div class="div mt-2">
                                <h4 class="text-seagreen1">Subscribe For offers</h4>
                            </div>

                            <div class="mb-4">
                                <h3 class="fontw700" style="font-size: 35px;">
                                    Adventures Calling </br> You guys!
                                </h3>
                            </div>
                        </div>

                        <div class="col-12">
                            <p class="text-grey-one" style="max-width: 70%;">Lorem ipsum dolor sit amet consectetur,
                                adipisicing elit. Odio nam dignissimos quo?</p>
                        </div>

                        <div class="col-lg-10 col-12">
                            <div class="subscribe-text-Bar pt-5">
                                <form class="shadowDiv">
                                    <div class="input-group border-round-00">
                                        <input type="text" class="form-control form-control-lg"
                                            style="border-radius: unset;" placeholder="Email Address"
                                            aria-label="Example text with button addon"
                                            aria-describedby="button-addon1">
                                        <button class="btn btn-maroon-light py-3" style="border-radius: unset;"
                                            type="button" id="button-addon1">Send
                                            Now</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="socialLinks py-4">
                                <p class="text-grey-one font-13">Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Subscribe section -->


    <!-- Still have a question -->
    <section class="faqs my-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="mb-3 fontw700 text-center">Still have a question?</h3>
                    <p class="text-center text-grey-three">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="col-12 col-lg-1"></div>
                <div class="col-md-5 py-md-5 py-3">
                    <div class="bg-green-two text-white border-rounded-1 text-center p-0">
                        <div class=" py-5">
                            <div class="d-inline-block rounded-circle bg-white p-2">
                                <i class="fa fa-headphones bg-white rounded-circle text-seagreen1 font-45"
                                    aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="heading">
                            <h4>For Sales</h4>
                        </div>
                        <div class="d-flex justify-content-center pt-3">
                            <p class="text-white-50" style="max-width: 55%;">Lorem ipsum dolor sit, amet consectetur
                                adipisicing elit.
                            </p>
                        </div>
                        <div class="sale py-4">
                            <p class="mb-0">sales@xyz.com</p>
                            <p class="">+977(985)344-33-42</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 py-md-5 py-3">
                    <div class="bg-purple-1 text-white border-rounded-1 text-center p-0">
                        <div class=" py-5">
                            <div class="d-inline-block rounded-circle bg-white p-2">
                                <i class="fa fa-question-circle-o rounded-circle text-purple-1 font-45"
                                    aria-hidden="true">
                                </i>
                            </div>
                        </div>
                        <div class="heading">
                            <h4>Help & Support</h4>
                        </div>
                        <div class="d-flex justify-content-center pt-3">
                            <p class="text-white-50" style="max-width: 55%;">Lorem ipsum dolor sit, amet consectetur
                                adipisicing elit.
                            </p>
                        </div>
                        <div class="help py-4">
                            <p class="mb-0">help@xyz.com</p>
                            <p class="">+977(985)344-33-42</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-1"></div>
            </div>
        </div>
    </section>
    <!-- Still have a question -->

    <!-- footer section -->
    <section class="footer mt-5 pt-5">
        <div class="container">
            <div class="row border-bottom">
                <div class="col-md-6">
                    <div class="link-contact ">
                        <div class="d-flex">
                            <div class="quick-link">
                                <i class="fa fa-plus-circle pe-3" aria-hidden="true"></i>
                                <a href="#" class="text-black text-decoration-none fontw700">QuicK Links</a>
                            </div>
                            <div class="ms-4">
                                <p class="fonwt500 text-grey-two">Explore More Categories</p>
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

            <div class="row border-bottom">
                <div class="col-md-12">
                    <h4 class="my-3 text-seagreen1">Get in touch</h4>
                </div>
                <div class="col-md-6 z1">
                    <div class="temp">
                        <h2 class="fontw700">Adventures Calling <br />You guys!</h2>
                    </div>
                </div>
                <div class="offset-md-2 col-md-4 z1 my-3">
                    <div class="banking d-flex justify-content-center">
                        <div class="bankingCard pe-3 ">
                            <a href="#"><i class="fa fa-credit-card-alt p-3 faa-icon text-seagreen1"
                                    aria-hidden="true"></i></a>
                        </div>
                        <p class="pb-0 mb-0 fontw500">Our Office <br /> <span class="fontw700"> Lahore, Pakistan</span>
                        </p>
                    </div>
                    <div class=" py-2 me-4 text-center">
                        <a href="#" class="z1 text-white fontw500"><i class="fa fa-long-arrow-right"
                                aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>

            <div class="row my-5">
                <div class="col-lg-6 col-12">
                    <div class="row">
                        <div class="col-lg-4 col-6">
                            <h5>Services</h5>
                            <ul class="list-unstyled unoderList text-grey-three">
                                <li class="mb-2 font-14">Budget</li>
                                <li class="mb-2 font-14">Expert</li>
                                <li class="mb-2 font-14">Independent</li>
                                <li class="mb-2 font-14">Luxury Tour</li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-6 mb-3">
                            <h5>Adventures</h5>
                            <ul class="list-unstyled unoderList text-grey-three">
                                <li class="mb-2 font-14">Beach Activity</li>
                                <li class="mb-2 font-14">Bungee Jump</li>
                                <li class="mb-2 font-14">City Tour</li>
                                <li class="mb-2 font-14">Hiking Trip</li>
                            </ul>
                        </div>

                        <div class="col-lg-4 col-6 mb-3">
                            <h5>Country</h5>
                            <ul class="list-unstyled unoderList text-grey-three">
                                <li class="mb-2 font-14">Beach Activity</li>
                                <li class="mb-2 font-14">Bungee Jump</li>
                                <li class="mb-2 font-14">City Tour</li>
                                <li class="mb-2 font-14">Hiking Trip</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-2 col-12">
                            <h4 class="my-3">Get in touch</h4>
                            <h3 class="fontw700">Lets Talk <span class="fa fa-long-arrow-right ps-3"
                                    aria-hidden="true"></span></h3>
                        </div>

                        <div class="col-lg-10 offset-lg-2 col-12">
                            <div class="subscribe-text-Bar pt-3">
                                <form class="shadowDiv">
                                    <div class="input-group border-round-00">
                                        <input type="text" class="form-control form-control-lg"
                                            style="border-radius: unset;" placeholder="Email Address"
                                            aria-label="Example text with button addon"
                                            aria-describedby="button-addon1">
                                        <button class="btn btn-maroon-light py-4" style="border-radius: unset;"
                                            type="button" id="button-addon1">Send
                                            Now</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 pt-5">
                    <div class="privacy d-flex justify-content-between border-bottom ">
                        <h5>Privacy Policy</h5>
                        <div class="socialLinks">
                            <p class="text-black fontw600"><span>LinkedIn</span> / <span>Facebook</span> /
                                <span>Instagram</span>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 py-3">
                    <div class="privacy d-flex justify-content-between">
                        <div class="d-flex align-items-center">
                            <h6>2016-2022 <span>&copy;</span> Emprise</h6>
                        </div>
                        <div class=" text-end">
                            <img src="./img/method.png" class="img-fluid w-50" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


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





    <script>
        $(function () {
            $("#datepicker").datepicker({
                dateFormat: 'yy-mm-dd',
                showOtherMonths: true,
                selectOtherMonths: true
            });
        });
    </script>




    <!-- owl carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
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

            $(".carousel").swipe({
                swipe: function (event, direction, distance, duration, fingerCount, fingerData) {
                    if (direction == 'left') $(this).carousel('next');
                    if (direction == 'right') $(this).carousel('prev');
                },
                allowPageScroll: "vertical"
            });
        });
        $(document).on('resize', function () {
            setMinHeight();
        });
    </script>


</body>

</html>