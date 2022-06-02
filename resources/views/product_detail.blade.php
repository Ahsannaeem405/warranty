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
        <div class="card-wrapper" id="card-images">
            <div class="card">
                <!-- card left -->
                <div class="product-imgs">
                    <div class="img-display">
                        <div class="img-showcase">
                            <img src="{{$product_detail->image}}" alt="shoe image">
                            <img src="{{$product_detail->image}}" alt="shoe image">
                            <img src="{{$product_detail->image}}" alt="shoe image">
                            <img src="{{$product_detail->image}}" alt="shoe image">
                        </div>
                    </div>
                    <!-- <div class="img-select">
                        <div class="img-item">
                            <a href="#" data-id="1">
                                <img src="{{$product_detail->image}}" alt="shoe image">
                            </a>
                        </div>
                        <div class="img-item">
                            <a href="#" data-id="2">
                                <img src="{{$product_detail->image}}" alt="shoe image">
                            </a>
                        </div>
                        <div class="img-item">
                            <a href="#" data-id="3">
                                <img src="{{$product_detail->image}}" alt="shoe image">
                            </a>
                        </div>
                        <div class="img-item">
                            <a href="#" data-id="4">
                                <img src="{{$product_detail->image}}" alt="shoe image">
                            </a>
                        </div>
                    </div> -->
                </div>
                <!-- card right -->
                <div class="product-content">
                    <h1 class="fw-bold">{{$product_detail->name}}</h1>

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
                        <p class="new-price">Price: <span class="text-gray-one">${{$product_detail->price}}</span></p>
                    </div>

                    <div class="product-detail">
                        <h4>About this item: </h4>
                        <p>{{$product_detail->description}}</p>
                        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, perferendis eius.
                            Dignissimos, labore suscipit. Unde.</p> -->
                        <!-- <ul>
                            <li>Color: <span>Black</span></li>
                            <li>Available: <span>in stock</span></li>
                            <li>Category: <span>Shoes</span></li>
                            <li>Shipping Area: <span>All over the world</span></li>
                            <li>Shipping Fee: <span>Free</span></li>
                        </ul> -->
                    </div>

                    <!-- <div class="purchase-info d-flex">
                        <input type="number" class="mt-0" min="0" value="1">
                        <button type="button" class="btn px-4">View
                            View <i class="fas fa-shopping-cart"></i>
                        </button>
                        <button type="button" class="btn">Compare</button>
                    </div> -->

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
@include("layouts.footer")
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