@extends("layouts.admin")

@section("custom-css")
<link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">
@endsection

@section("content")
 <!-- Begin Page Content -->
 <div class="container-fluid">

<div class="row">
    <div class="col-12">
        <div class="card" style="width:100%;">

            <div class="card-body">
                @if(session()->has("success"))
                <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script>
                    Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Success!',
                    text: 'Profile updated successfully',
                    showConfirmButton: false,
                    timer: 2000
                })
                </script>
                @endif
                <form method="POST" action="{{ route('save.profile') }}" enctype="multipart/form-data" autocomplete="off">
                    @csrf
                <div class="row p-3">
                    <!-- <form> -->
                    <p class="h3 mt-4">Website Logo</p>
                    <div class="col-lg-12 col-12 ">
                        <label for="">Logo Image</label>
                        <input name="logo" type="file" data-default-file="{{ isset(auth()->user()->profile_pic) ? asset('upload/'.auth()->user()->profile_pic) : '' }}" class="dropify" data-height="100" />
                    </div>
                    <p class="h3 mt-4">Header section</p>
                    <div class="col-lg-12 col-12 ">
                        <label for="">Header Image</label>
                        <input name="logo" type="file" data-default-file="{{ isset(auth()->user()->profile_pic) ? asset('upload/'.auth()->user()->profile_pic) : '' }}" class="dropify" data-height="100" />
                    </div>

                    <p class="h3 mt-4">Section # 2</p>
                    <div class="col-lg-12 col-12 mt-1">
                        <label for="">Background Image</label>
                        <input name="logo" type="secton" data-default-file="{{ isset(auth()->user()->profile_pic) ? asset('upload/'.auth()->user()->profile_pic) : '' }}" class="dropify" data-height="100" />
                    </div>
                    <div class="col-lg-12 col-12 mt-2">
                        <label for="">Step box title</label>
                        <input class="form-control" name="step_box_title" type="text"   />
                    </div>
                    <div class="col-lg-12 col-12 mt-2">
                        <label for="">Answer of Question # 1</label>
                        <input class="form-control" name="quesston1" type="text"/>
                    </div>
                    <div class="col-lg-12 col-12 mt-2">
                        <label for="">Answer of Question # 2</label>
                        <input class="form-control" name="quesston2" type="text"/>
                    </div>
                    <div class="col-lg-12 col-12 mt-2">
                        <label for="">Search</label>
                        <input class="form-control" name="search" type="text"/>
                    </div>
                   
                    <p class="h3 mt-4">Section # 3</p>
                    <div class="col-lg-12 col-12 mt-1">
                        <label for="">Product 1 Image</label>
                        <input name="logo" type="secton" data-default-file="{{ isset(auth()->user()->profile_pic) ? asset('upload/'.auth()->user()->profile_pic) : '' }}" class="dropify" data-height="100" />
                    </div>
                    <div class="col-lg-12 col-12 mt-2">
                        <label for="">Product 1 Title</label>
                        <input class="form-control" name="secton_3_tilte" type="text"   />
                    </div>
                    <div class="col-lg-12 col-12 mt-2">
                        <label for="">Detail 1</label>
                        <input class="form-control" name="product_title1_detail1" type="text"   />
                    </div>
                    <div class="col-lg-12 col-12 mt-2">
                        <label for="">Detail 2</label>
                        <input class="form-control" name="product_title1_detail2" type="text"   />
                    </div>


                    <!-- <p class="h3 mt-4">Section # 4</p> -->
                    <div class="col-lg-12 col-12 mt-1">
                        <label for="">Product 2 Image</label>
                        <input name="logo" type="secton" data-default-file="{{ isset(auth()->user()->profile_pic) ? asset('upload/'.auth()->user()->profile_pic) : '' }}" class="dropify" data-height="100" />
                    </div>
                    <div class="col-lg-12 col-12 mt-2">
                        <label for="">Product 2 Title</label>
                        <input class="form-control" name="secton_4_tilte" type="text"   />
                    </div>
                    <div class="col-lg-12 col-12 mt-2">
                        <label for="">Detail 1</label>
                        <input class="form-control" name="product_title2_detail1" type="text"   />
                    </div>
                    <div class="col-lg-12 col-12 mt-2">
                        <label for="">Detail 2</label>
                        <input class="form-control" name="product_title2_detail2" type="text"   />
                    </div>

                    <p class="h3 mt-4">Section # 4</p>
                    
                    <div class="col-lg-12 col-12 mt-1">
                        <label for="">Background Image</label>
                        <input name="logo" type="secton" data-default-file="{{ isset(auth()->user()->profile_pic) ? asset('upload/'.auth()->user()->profile_pic) : '' }}" class="dropify" data-height="100" />
                    </div>
                    <div class="col-lg-12 col-12 mt-2">
                        <label for="">Text</label>
                        <input class="form-control" name="product_title2_detail2" type="text"   />
                    </div>


                    <div class="col-lg-12 col-12 mt-4">
                        <button class="btn btn-primary save_profile" type="submit" style="float: right;">Update</button>
                    </div>
                    </form>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->
@endsection

@section("custom-js")
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
<script>
    $(document).ready(function(){
        $(".save_profile").on("click", function(event){
            var new_pass = $(".password").val();
            var confirm_pass = $(".confirm_password").val();
            var old_pass = $(".oldpassword").val();
            if(old_pass != "" && new_pass == ""){
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Error',
                    text: "New password can be empty",
                    showConfirmButton: false,
                    timer: 2000
                })
                event.preventDefault();
                return false;
            }else if(old_pass != "" && new_pass != confirm_pass){
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Error',
                    text: 'New password and confirm password not matched',
                    showConfirmButton: false,
                    timer: 2000
                })
                event.preventDefault();
                return false;
            }
        })

        $(".oldpassword").val("");
        $('.dropify').dropify();

        $(".oldpassword").on("keyup", function(){
            var old_password = $(this).val();
            $.ajax({
                type: 'get',
                async: false, 
                dataType: "json",
                url: "{{ url('/admin/user/password') }}",
                data: { 'old_password': old_password },
                success: function(response){
                    if(response == 1){
                        $(".error-message").attr("hidden", "true");
                        $(".success-message").removeAttr("hidden");
                        $(".password").removeAttr("disabled");
                        $(".confirm_password").removeAttr("disabled");
                    }else{
                        $(".success-message").attr("hidden", "true");
                        $(".error-message").removeAttr("hidden");
                        $(".password").attr("disabled", "true");
                        $(".confirm_password").attr("disabled", "true");
                    }
                }
            });
        });
    });
    
</script>
@endsection