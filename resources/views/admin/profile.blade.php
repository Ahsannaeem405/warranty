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
                    <div class="col-lg-12 col-12 mt-2">
                        <label for="">Profile Picture</label>
                        <input name="file" type="file" data-default-file="{{ isset(auth()->user()->profile_pic) ? asset('upload/'.auth()->user()->profile_pic) : '' }}" class="dropify" data-height="100" />
                    </div>
                    <div class="col-lg-6 col-12 mt-2">
                        <label for="">Name</label>
                        <input type="text" name="name" value="{{ auth()->user()->name }}" class="form-control" placeholder="">
                    </div>

                    <div class="col-lg-6 col-12 mt-2">
                        <label for="">Mobile #</label>
                        <input type="number" name="number" value="{{ auth()->user()->mobile }}" class="form-control" placeholder="">
                    </div>
                    <div class="col-lg-6 col-12 mt-2">
                        <label for="">Email</label>
                        <input type="email" name="email" value="{{ auth()->user()->email }}" class="form-control" placeholder="" required>
                    </div>
                    <div class="col-lg-6 col-12 mt-2">
                        <label for="">Address</label>
                        <input type="text" name="address" value="{{ auth()->user()->address }}" class="form-control" placeholder="" >
                    </div>
                    
                     <div class="col-lg-12 col-12 mt-2">
                     <!-- <strong class="fw-" style="border-bottom: 2px solid red;">Change Password</strong><br> -->
                        <label for="">Old Password</label>
                        <input type="password" name="oldpassword" class="form-control oldpassword" placeholder="" autocomplete="off">
                        <span class="text-danger error-message" hidden>You entered invalid password, Try again</span>
                        <span class="text-success success-message" hidden>Password matched, Enter new password</span>
                    </div>
                    <div class="col-lg-6 col-12 mt-2">
                        <label for="">New Password</label>
                        <input type="password" name="newpassword" class="form-control password" placeholder=" " disabled>
                    </div>
                    <div class="col-lg-6 col-12 mt-2">
                        <label for="">Confirm Password</label>
                        <input type="password" name="confirmpassword" class="form-control confirm_password" placeholder="" disabled>
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