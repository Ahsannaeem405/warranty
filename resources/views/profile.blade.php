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
    <link rel="stylesheet" href="{{asset('assets/css/user_profile.css')}}">


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
    <!-- Profile Section -->
    <section class="profile py-md-5">
        <div class="container p-md-5">
            <div class="row bg-black py-md-5 bg-opacity-75">
                
                <div class="col-md-4 col-12">
                  <div class="position-relative">
                    <div class="py-3 profilePic d-flex justify-content-center">
                        <img src="{{ isset(auth()->user()->profile_pic) ? asset('upload/'.auth()->user()->profile_pic) : asset('assets/img/img_avatar.png')}}" id="profile_image" class="w-50 img-fluid profile-img rounded-circle" alt="Profile Picture">
                    </div>
                    <div class="badge-button position-absolute">
                        <a href=""><i class="fa fa-plus-circle faa-icon file_btn" aria-hidden="true"></i></a>
                    </div>
                    <form action="{{route('update-image')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="file" accept="image/*" class="d-none" id="file_upload">
                    <div class="text-center">
                        <button class="btn btn-maroon-light">Update</button>
                    </div>
                    </form>
                  </div>
                </div>
                
                <div class="col-md-8 col-12">
                    <form method="POST" id="user_form" action="{{ route('update-profile') }}" class="social-media-Link p-md-4 bg-transparent">
                        @csrf
                        <div class="inputBox">
                            <input type="text" name="name" value="{{ auth()->user()->name }}" required="">
                            <label for="">User Name</label>
                        </div>
                        <div class="inputBox">
                            <input type="email" name="email" value="{{ auth()->user()->email }}" required="">
                            <label for="">Email</label>
                        </div>
                        <div class="inputBox">
                            <input type="number" name="mobile" value="{{ auth()->user()->mobile }}" required="">
                            <label for="">Mobile #</label>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="address" value="{{ auth()->user()->address }}" required="">
                            <label for="">Address</label>
                        </div>
                        <span id="error_show" class="text-danger py-4">Password not matched</span>
                        <div class="inputBox">
                        
                            <input type="password" id="old_password" name="old_password">
                            <label for="">Old Password</label>
                            
                        </div>
                        
                        <div class="inputBox">
                            <input type="password" id="new_password" name="new_password" disabled>
                            <label for="">New Password</label>
                        </div>
                        <div class="inputBox">
                            <input type="password" id="confirm_password" name="" disabled>
                            <label for="">Confirm Password</label>
                        </div>

                        <div class="text-center">
                            <button type="button" class="btn px-4 btn-maroon-light save_btn">Update</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
    <!-- Profile Section -->


    <!-- footer section -->
@include("layouts.footer")

    @if(session()->has("success"))
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
         Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Profile updated successfully!',
                    showConfirmButton: false,
                    timer: 2500
        });
    </script>
    @endif
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




    <!-- <script src="./js/steper.js"></script> -->

    <!-- owl carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function () {
            $("#error_show").addClass("d-none");
            $("#old_password").on("keyup", function(){
                    var old_val = $(this).val();
                    // alert(old_val);
                    if(old_val != ""){
                        $("#new_password").removeAttr("disabled");
                        $("#confirm_password").removeAttr("disabled");
                    }else{
                        $("#new_password").attr("disabled","true");
                        $("#confirm_password").attr("disabled","true");
                        $("#error_show").removeClass("d-none");
                    }

                    $.ajax({
                        type: "get",
                        dataType: "json",
                        data: {"old_pass":old_val},
                        url: "{{ route('check_password') }}",
                        success: function(output){
                            if(output == "1"){
                                $("#error_show").addClass("d-none");
                            }else{
                                $("#error_show").removeClass("d-none");
                            }
                        }
                    })
                });
            $(".save_btn").on("click", function(e){
                e.preventDefault();
                // alert("clicked")
                let old_pass = $("#old_password").val();
                let new_pass = $("#new_password").val();
                let confirm_pass = $("#confirm_password").val();

               

                if(old_pass == ""){
                    $("#user_form").submit();
                }else if(new_pass == ""){
                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: 'New password is required',
                        showConfirmButton: false,
                        timer: 2500
                    });
                }else if(confirm_pass == ""){
                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: 'Confirm password is required',
                        showConfirmButton: false,
                        timer: 2500
                    });
                }else if(new_pass != confirm_pass){
                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: 'New password and Cofirm password not match',
                        showConfirmButton: false,
                        timer: 2500
                    });
                }else{
                        $("#user_form").submit();
                }
            });



            function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#profile_image').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#file_upload").change(function(){
    readURL(this);
});


            $(".file_btn").on("click",function(e){
                e.preventDefault();
                $("#file_upload").click();
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