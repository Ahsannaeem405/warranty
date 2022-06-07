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
                <form method="POST" action="{{ route('update-footer') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row p-3">
                        <div class="col-lg-12 col-12 mt-3">
                            <label for="">Top left text</label>
                            <input name="footer_top_left" value="{{$setting->footer_top_left}}" type="text"  class="form-control" data-height="100" />
                        </div>

                        <div class="col-lg-12 col-12 mt-2">
                            <label for="">Top right text</label>
                            <input name="footer_top_right" value="{{$setting->footer_top_right}}" type="text"  class="form-control" data-height="100" />
                        </div>
                        
                        <div class="col-lg-12 col-12 mt-2"> 
                             <label for="">Footer Left Description</label>
                            <textarea name="footer_description" placeholder="Enter Description"> {!! $setting->footer_description !!} </textarea>
                        </div>

                         <div class="col-lg-12 col-12 mt-2"> 
                             <label for="">Footer Quick Links</label>
                            <textarea name="footer_quick_link" placeholder="Enter Quick Links"> {!! $setting->footer_quick_link !!} </textarea>
                        </div>

                        <div class="col-lg-12 col-12 mt-2"> 
                             <label for="">Footer Right Description</label>
                            <textarea name="footer_content_right" placeholder="Enter right content"> {!! $setting->footer_content_right !!} </textarea>
                        </div>

                        <div class="col-lg-12 col-12 mt-2">
                            <label for="">Subscribe button text</label>
                            <input name="subscribe_btn_text" value="{{$setting->footer_btn_text}}" type="text"  class="form-control" data-height="100" />
                        </div>

                        <div class="col-lg-12 col-12 mt-2">
                            <label for="">Footer Logo</label>
                            <input name="footer_logo" type="file" accept="image/*" data-default-file="{{ asset('site_logo/'.$setting->footer_logo)  }}" class="dropify" data-height="100" />
                        </div>

                        <div class="col-lg-12 col-12 mt-2">
                            <label for="">Card Image</label>
                            <input name="footer_cards" type="file" accept="image/*" data-default-file="{{ asset('assets/img/' .$setting->footer_cards)  }}" class="dropify" data-height="100" />
                        </div>
                        
                        <div class="col-lg-12 col-12 mt-4">
                            <button class="btn btn-primary save_profile" type="submit" style="float: right;">Update</button>
                        </div>
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

    tinymce.init({
        selector: 'textarea', 
        plugins: 'preview importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap pagebreak nonbreaking anchor insertdatetime advlist lists wordcount help charmap quickbars emoticons',
        editimage_cors_hosts: ['picsum.photos'],
        menubar: 'file edit view insert format tools table help',
        toolbar: 'undo redo | bold italic underline strikethrough | fontfamily fontsize blocks | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
        toolbar_sticky: true,
        autosave_ask_before_unload: true,
        autosave_interval: '30s',
        autosave_prefix: '{path}{query}-{id}-',
        autosave_restore_when_empty: false,
        autosave_retention: '2m',
        image_advtab: true,
        link_list: [
            { title: 'My page 1', value: 'https://www.tiny.cloud' },
            { title: 'My page 2', value: 'http://www.moxiecode.com' }
        ],
        image_list: [
            { title: 'My page 1', value: 'https://www.tiny.cloud' },
            { title: 'My page 2', value: 'http://www.moxiecode.com' }
        ],
        image_class_list: [
            { title: 'None', value: '' },
            { title: 'Some class', value: 'class-name' }
        ],
        importcss_append: true,
        file_picker_callback: (callback, value, meta) => {
            /* Provide file and text for the link dialog */
            if (meta.filetype === 'file') {
                callback('https://www.google.com/logos/google.jpg', { text: 'My text' });
            }

            /* Provide image and alt text for the image dialog */
            if (meta.filetype === 'image') {
                callback('https://www.google.com/logos/google.jpg', { alt: 'My alt text' });
            }

            /* Provide alternative source and posted for the media dialog */
            if (meta.filetype === 'media') {
                callback('movie.mp4', { source2: 'alt.ogg', poster: 'https://www.google.com/logos/google.jpg' });
            }
        },
        templates: [
            { title: 'New Table', description: 'creates a new table', content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>' },
            { title: 'Starting my story', description: 'A cure for writers block', content: 'Once upon a time...' },
            { title: 'New list with dates', description: 'New List with dates', content: '<div class="mceTmpl"><span class="cdate">cdate</span><br><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>' }
        ],
        template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
        template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
        image_caption: true,
        quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
        noneditable_class: 'mceNonEditable',
        toolbar_mode: 'sliding',
        contextmenu: 'link image table',
        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
    });

    tinymce.init({
        selector: 'textarea#default-editor'
    });


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