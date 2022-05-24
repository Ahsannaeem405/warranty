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
                <div class="alert alert-suucess"> {{session()->get("success")}} </div>
                @endif
                <form method="POST" action="{{ route('update.profile') }}" enctype="multipart/form-data" autocomplete="off">
                    @csrf
                <div class="row p-3">
                    <!-- <form> -->
                    <div class="col-lg-12 col-12 mt-2">
                        <label for="">Profile Picture</label>
                        <input name="file" type="file" data-default-file="{{ isset($user->profile_pic) ? asset('upload/'.$user->profile_pic) : '' }}" class="dropify" data-height="100" />
                    </div>
                    <div class="col-lg-6 col-12 mt-2">
                        <label for="">Name</label>
                        <input type="hidden" name="id" value="{{ $user->id }}" class="form-control" placeholder="">
                        <input type="text" name="name" value="{{ $user->name }}" class="form-control" placeholder="">
                    </div>

                    <div class="col-lg-6 col-12 mt-2">
                        <label for="">Mobile #</label>
                        <input type="number" name="number" value="{{ $user->mobile }}" class="form-control" placeholder="">
                    </div>
                    <div class="col-lg-6 col-12 mt-2">
                        <label for="">Email</label>
                        <input type="email" readonly name="email" value="{{ $user->email }}" class="form-control" placeholder="" required>
                    </div>
                    <div class="col-lg-6 col-12 mt-2">
                        <label for="">Address</label>
                        <input type="text" name="address" value="{{ $user->address }}" class="form-control" placeholder="" >
                    </div>
                    <!-- <h3>Change Passord</h3> -->
                    <!-- <div class="col-lg-12 col-12 mt-2">
                        <label for="">Old Password</label>
                        <input type="password" name="oldpassword" class="form-control" placeholder="" autocomplete="off">
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
                    </div> -->

                    <div class="col-lg-12 col-12 mt-4">
                        <button class="btn btn-primary" type="submit" style="float: right;">Update</button>
                    </div>
                    <!-- </form> -->
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
<script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
<script>
    $(document).ready(function(){
        $('.dropify').dropify();
    })
    
</script>
@endsection