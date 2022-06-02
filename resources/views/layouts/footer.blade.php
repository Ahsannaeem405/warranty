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
                        <li class="mb-2 font-14 link"><a class="link" href="{{url('/')}}">Home</a></li>
                        <li class="mb-2 font-14 link"><a href="{{route('warranty-check')}}">Check Warranty</a></li>
                        @if(auth()->check())<li class="mb-2 font-14 link-info"> <a href="{{route('user-profile')}}">Profile</a></li>
                        <li class="mb-2 font-14 link-info"><a href="{{route('myproduct')}}">My Products</a> </li>@endif
                        <!-- <li class="mb-2 font-14">Privacy Policy</li> -->
                    </ul>
                </div>

                <div class="col-lg-4 col-12">
                    <div class="heading">
                        <h4 class="mb-3">NAKAMICHI NEWSLETTER</h4>
                        <p>Subscribe to receive updates, access to exclusive deals, and more on our mobile audio
                            products.</p>
                    </div>
                    @if(auth()->check())
                    <div class="subscribe_div">
                        <div class="subscribe-text-Bar pt-3">
                            <form class="shadowDiv">
                                <div class="input-group border-round-00">
                                    <input type="text" id="subscribe_email" class="form-control form-control-sm"
                                        style="border-radius: unset;" placeholder="Email Address"
                                        aria-label="Example text with button addon" aria-describedby="button-addon1">
                                    <button class="btn btn-maroon-light py-2" style="border-radius: unset;"
                                        type="button" id="button-addon1">SUBSCRIBE</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    @endif
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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function(){

            $("#button-addon1").on("click",function(){
                // alert("connected");
                var subs = $("#subscribe_email").val();

                        const validateEmail = (email) => {
                            return email.match(
                                    /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
                                );
                            };

                            if(!validateEmail(subs)){
                                Swal.fire({
                                position: 'center',
                                icon: 'error',
                                title: 'Enter valid email address',
                                showConfirmButton: false,
                                timer: 2500
                                });
                                return false;
                            }
                // alert(subs);
                if(subs == ""){
                    Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Enter email address',
                    showConfirmButton: false,
                    timer: 2500
                    })
                }else{
                    $.ajax({
                        type: "get",
                        dataType: "json",
                        data: {"email": subs},
                        url: "{{route('subscripe')}}",
                        success: function(output){
                            if(output == "1"){
                                    Swal.fire({
                                    position: 'center',
                                    icon: 'success',
                                    title: 'Subscription done!',
                                    showConfirmButton: false,
                                    timer: 2500
                                })
                                $("#subscribe_email").val("");
                            }else if(output=="2"){
                                Swal.fire({
                                position: 'center',
                                icon: 'error',
                                title: 'Email address already exist',
                                showConfirmButton: false,
                                timer: 2500
                            })
                            }else{
                                Swal.fire({
                                position: 'center',
                                icon: 'error',
                                title: 'There is some technical error',
                                showConfirmButton: false,
                                timer: 2500
                            })
                            }
                        }
                    })
                }
            });
            
        })
    </script>