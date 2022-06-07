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
                    text: 'Data saved successfully',
                    showConfirmButton: false,
                    timer: 2000
                })
                </script>
                @endif
                <form method="POST" action="{{ route('save.section2') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="col-lg-12 col-12 my-3">
                        <label for="">Change Background image</label>
                        <input name="file" type="file" accept="image/*" data-default-file="{{ isset($setting->section2_background) ? asset('sections/'.$setting->section2_background) : '' }}" class="dropify" data-height="100" />
                    </div>
                    
                    
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                      
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="section1-tab" data-bs-toggle="tab" data-bs-target="#section1" type="button" role="tab" aria-controls="section1" aria-selected="true">Step 1</button>
                      </li>
                      
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="section2-tab" data-bs-toggle="tab" data-bs-target="#section2" type="button" role="tab" aria-controls="section2" aria-selected="false">Step 2</button>
                      </li>
                      
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="section3-tab" data-bs-toggle="tab" data-bs-target="#section3" type="button" role="tab" aria-controls="section3" aria-selected="false">Step 3</button>
                      </li>

                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="section4-tab" data-bs-toggle="tab" data-bs-target="#section4" type="button" role="tab" aria-controls="section4" aria-selected="false">Step 4</button>
                      </li>

                    </ul>
                    
                    <div class="tab-content mt-4" id="myTabContent">
                        <div class="tab-pane fade show active" id="section1" role="tabpanel" aria-labelledby="       section1-tab">
                            {{-- <div class="row px-5 mt-5 mb-4 justify-content-center">
                                <div class="col-lg-8">
                                    <label for="section1_heading">Heading</label>
                                    <input type="text" name="section1_heading" id="section1_heading" class="form-control p-4" 
                                    value="{{ old('section1_heading') }}" placeholder="Enter Heading">
                                </div>
                            </div> --}}

                            <div class="row px-5 mb-4 justify-content-center">
                                <div class="col-lg-8">
                                    <label for="section1_title">Title</label>
                                    <input type="text" name="section1_title" id="section1_title" class="form-control p-4" 
                                    value="{{ $setting->section1_title }}" placeholder="Enter Title">
                                </div>
                            </div>


                            <div class="row px-5 mb-4 justify-content-center">
                                <div class="col-lg-8">
                                    {{-- <label for="description">Description</label> --}}
                                    <textarea name="section1_description" id="section1_description"
                                    class="form-control" placeholder="Enter description" 
                                     cols="12" rows="5">{!! $setting->section1_description !!}</textarea>
                                </div>
                            </div>


                           {{--  <div class="row px-5 mb-4 justify-content-center">
                                <div class="col-lg-8">
                                    <button type="submit" class="btn btn-primary px-4">Update</button>
                                </div>
                            </div> --}}
                            
                        </div>

                        <div class="tab-pane fade" id="section2" role="tabpanel" aria-labelledby="section2-tab">
                            {{-- <div class="row px-5 mt-5 mb-4 justify-content-center">
                                <div class="col-lg-8">
                                    <label for="section2_heading">Heading</label>
                                    <input type="text" name="section2_heading" id="section2_heading" class="form-control p-4" 
                                    value="{{ old('section2_heading') }}" placeholder="Enter Heading">
                                </div>
                            </div> --}}

                            <div class="row px-5 mb-4 justify-content-center">
                                <div class="col-lg-8">
                                    <label for="section2_title">Title</label>
                                    <input type="text" name="section2_title" id="section2_title" class="form-control p-4" 
                                    value="{{ $setting->section2_title }}" placeholder="Enter Title">
                                </div>
                            </div>

                            <div class="row px-5 mb-4 justify-content-center">
                                <div class="col-lg-8">
                                    {{-- <label for="description">Description</label> --}}
                                    <textarea name="section2_description" id="section2_description"
                                    class="form-control" placeholder="Enter description"
                                    cols="12" rows="5">{!! $setting->section2_description !!}</textarea>
                                </div>
                            </div>

                            {{-- <div class="row px-5 mb-4 justify-content-center">
                                <div class="col-lg-8">
                                    <button type="submit" class="btn btn-primary px-4">Update</button>
                                </div>
                            </div> --}}
                        </div>

                        <div class="tab-pane fade" id="section3" role="tabpanel" aria-labelledby="section3-tab">
                            {{-- <div class="row px-5 mt-5 mb-4 justify-content-center">
                                <div class="col-lg-8">
                                    <label for="section3_heading">Heading</label>
                                    <input type="text" name="section3_heading" id="section3_heading" class="form-control p-4" 
                                    value="{{ old('section3_heading') }}" placeholder="Enter Heading">
                                </div>
                            </div> --}}

                            <div class="row px-5 mb-4 justify-content-center">
                                <div class="col-lg-8">
                                    <label for="section3_title">Title</label>
                                    <input type="text" name="section3_title" id="section3_title" class="form-control p-4" 
                                    value="{{ $setting->section3_title }}" placeholder="Enter Title">
                                </div>
                            </div>

                            <div class="row px-5 mb-4 justify-content-center">
                                <div class="col-lg-8">
                                    {{-- <label for="description">Description</label> --}}
                                    <textarea name="section3_description" id="section3_description"
                                    class="form-control" placeholder="Enter description"
                                    cols="12" rows="5">{!! $setting->section3_description !!}</textarea>
                                </div>
                            </div>

                            {{-- <div class="row px-5 mb-4 justify-content-center">
                                <div class="col-lg-8">
                                    <button type="submit" class="btn btn-primary px-4">Update</button>
                                </div>
                            </div> --}}
                        </div>


                        <div class="tab-pane fade" id="section4" role="tabpanel" aria-labelledby="section4-tab">
                            {{-- <div class="row px-5 mt-5 mb-4 justify-content-center">
                                <div class="col-lg-8">
                                    <label for="section4_heading">Heading</label>
                                    <input type="text" name="section4_heading" id="section4_heading" class="form-control p-4" 
                                    value="{{ old('section4_heading') }}" placeholder="Enter Heading">
                                </div>
                            </div> --}}

                            <div class="row px-5 mb-4 justify-content-center">
                                <div class="col-lg-8">
                                    <label for="section4_title">Title</label>
                                    <input type="text" name="section4_title" id="section4_title" class="form-control p-4" 
                                    value="{{ $setting->section4_title }}" placeholder="Enter Title">
                                </div>
                            </div>

                            <div class="row px-5 mb-3 justify-content-center">
                                <div class="col-lg-8">
                                    {{-- <label for="description">Description</label> --}}
                                    <textarea name="section4_description" id="section4_description"
                                    class="form-control" placeholder="Enter description"
                                    cols="12" rows="5">{!! $setting->section4_description !!}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row px-5 mb-4 justify-content-center">
                        <div class="col-lg-8">
                            <button type="submit" class="btn btn-primary px-4">Update</button>
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

//selector section 1

    tinymce.init({
        selector: '#section1_description', 
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




//selector section 2

tinymce.init({
        selector: '#section2_description', 
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



//selector section 3

tinymce.init({
        selector: '#section3_description', 
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



//selector section 4

tinymce.init({
        selector: '#section4_description', 
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