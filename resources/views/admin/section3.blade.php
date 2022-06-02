@extends("layouts.admin")

@section("custom-css")

<script src="https://cdn.tiny.cloud/1/4yoe1y7dxkyx9ej4upmpxl7iqmkpi3p451u0mu2qv7hp6iaf/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

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
                    text: 'Data saved successfully',
                    showConfirmButton: false,
                    timer: 2000
                })
                </script>
                @endif
                <form method="POST" action="{{ route('save.section3') }}" enctype="multipart/form-data" autocomplete="off">
                    @csrf
                <div class="row p-3">
                    <!-- <form> -->
                        <p class="h2">Section 3</p>
                    <!-- <div class="col-lg-12 col-12 mt-2">
                        <label for="">Change Background image</label>
                        <input name="file" type="file" accept="image/*" data-default-file="{{ isset(auth()->user()->profile_pic) ? asset('upload/'.auth()->user()->profile_pic) : '' }}" class="dropify" data-height="100" />
                    </div> -->
                    <div class="col-lg-12 col-12 mt-2">
                        <label for="">Section title</label>
                        <input name="title" value="{{$setting->section3_title}}" type="text"  class="form-control" data-height="100" />
                    </div>

                    <p class="h3 mt-4">Product 1</p>

                    <div class="col-lg-12 col-12">
                        <label for="">Product Image</label>
                        <input name="product1" type="file" accept="image/*" data-default-file="{{ asset('products/'.$setting->product_image1)  }}" class="dropify" data-height="100" />
                        </div>
                    <div class="col-lg-12 col-12 mt-2">
                        <label for="">Product Title</label>
                        <input name="p1_title" type="text"  value="{{$setting->product_name1}}" class="form-control" data-height="100" />
                    </div>
                    <div class="col-lg-12 col-12 mt-2">
                        <textarea name="p1_detail">{{$setting->product_detail1}} </textarea>
                        <script>
                            tinymce.init({
                            selector: 'textarea',
                            plugins: 'a11ychecker advcode casechange export formatpainter image editimage linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tableofcontents tinycomments tinymcespellchecker',
                            toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter image editimage pageembed permanentpen table tableofcontents',
                            toolbar_mode: 'floating',
                            tinycomments_mode: 'embedded',
                            tinycomments_author: 'Author name',
                            });
                        </script>
                    </div>

                    <p class="h3 mt-4">Product 2</p>

                    <div class="col-lg-12 col-12">
                        <label for="">Product Image</label>
                        <input name="product2" type="file" accept="image/*" data-default-file="{{ asset('products/'.$setting->product_image2)  }}" class="dropify" data-height="100" />
                        </div>
                    <div class="col-lg-12 col-12 mt-2">
                        <label for="">Product Title</label>
                        <input name="p2_title" type="text" value="{{$setting->product_name2}}" class="form-control" data-height="100" />
                    </div>
                    <div class="col-lg-12 col-12 mt-2">
                        <textarea name="p2_detail">{{$setting->product_detail2}} </textarea>
                        <script>
                            tinymce.init({
                            selector: 'textarea',
                            plugins: 'a11ychecker advcode casechange export formatpainter image editimage linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tableofcontents tinycomments tinymcespellchecker',
                            toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter image editimage pageembed permanentpen table tableofcontents',
                            toolbar_mode: 'floating',
                            tinycomments_mode: 'embedded',
                            tinycomments_author: 'Author name',
                            });
                        </script>
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