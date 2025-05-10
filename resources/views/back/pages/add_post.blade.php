@extends('back.layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Page Title Here')
@section('content')
<div class="page-header">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="title">
                <h4>Add Post</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.dashboard') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Add post
                    </li>
                </ol>
            </nav>
        </div>
        <div class="col-md-6 col-sm-12 text-right">
            <a href="{{route('admin.posts')}}" class="btn btn-primary">View all posts</a>
        </div>
    </div>
</div>

<form action="{{route('admin.create_post')}}" method="POST" enctype="multipart/form-data" id="addPostForm">
    @csrf
    <div class="row">
        <div class="col-md-9">
            <div class="card card-box mb-2">
                <div class="card-body">
                    <div class="form-group">
                        <label for=""><b>Title</b>:</label>
                        <input type="text" class="form-control" name="title" placeholder="Enter post title">
                        <span class="text-danger error-text title_error"></span>
                    </div>
                    <div class="form-group">
                        <label for=""><b>Content</b>:</label>
                        <textarea name="content" id="content" cols="30" rows="10" class="form-control" placeholder="Enter post content here...."></textarea>
                        <span class="text-danger error-text content_error"></span>
                    </div>
                </div>
            </div>
            <div class="card card-box mb-2">
                <div class="card-header weight-500">SEO</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for=""><b>Post meta keywords</b>: <small>(Separated by comma.)</small></label>
                        <input type="text" class="form-control" name="meta_keywords" placeholder="Enter post meta keywords">
                    </div>
                    <div class="form-group">
                        <label for=""><b>Post meta description</b>:</label>
                        <textarea name="meta_description" id="" cols="30" rows="10" class="form-control"
                            placeholder="Enter post meta description..."></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-box mb-2">
                <div class="card-body">
                    <div class="form-group">
                        <label for=""><b>post category</b>:</label>
                        <select name="category" id="" class="custom-select form-control">
                            <option value="">Choose...</option>
                            {!! $categories_html !!}
                        </select>
                        <span class="text-danger error-text category_error"></span>
                    </div>
                    <div class="form-group">
                        <label for="featured_image"><b>Post Featured image</b>:</label>
                        <input type="file" id="featured_image" name="featured_image" class="form-control-file form-control" height="auto">
                        <span class="text-danger error-text featured_image_error"></span>
                    </div>
                    <div class="d-block mb-3" style="max-width: 250px;">
                        <img src="" alt="" class="img-thumbnail" id="featured_image_preview" style="display: none;">
                    </div>
                    <div class="form-group">
                        <label for=""><b>Tags</b>:</label>
                        <input type="text" class="form-control" name="tags" data-role="tagsinput">
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for=""><b>Visibility</b>:</label>
                        <div class="custom-control custom-radio mb-5">
                            <input type="radio" name="visibility" id="customRadio1" class="custom-control-input"
                                value="1" checked>
                            <label for="customRadio1" class="custom-control-label">Public</label>
                        </div>
                        <div class="custom-control custom-radio mb-5">
                            <input type="radio" name="visibility" id="customRadio2" class="custom-control-input"
                                value="0">
                            <label for="customRadio2" class="custom-control-label">Private</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Create post</button>
    </div>
</form>
@endsection
@push('stylesheets')
<link rel="stylesheet" href="/back/src/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css">

@endpush

@push('scripts')
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="/back/src/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
<!-- <script src="//cdn.ckeditor.com/4.22.1/full/ckeditor.js"></script> -->
<script src="/ckeditor/ckeditor.js"></script>


<script>
    //Initialize CKeditor
    CKEDITOR.replace('content', {
        versionCheck: false
    });
    $(document).ready(function() {

        // Setup CSRF for all AJAX requests
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // Image preview
        $('input[name="featured_image"]').on('change', function() {
            const file = this.files[0];
            if (file) {
                $('#featured_image_preview').attr('src', URL.createObjectURL(file)).show();
            }
        });

        // Form submit with AJAX
        $('#addPostForm').on('submit', function(e) {
            e.preventDefault();

            const form = this;
            const formData = new FormData(form);
            //Update CKeditor content before submit
            formData.set('content', CKEDITOR.instances.content.getData());

            $.ajax({
                url: $(form).attr('action'),
                method: $(form).attr('method'),
                data: formData,
                processData: false,
                contentType: false,
                dataType: 'json',

                beforeSend: function() {
                    $(form).find('span.error-text').text('');
                },

                success: function(response) {
                    // console.log(response);

                    if (response.status === 1) {
                        $(form)[0].reset();
                        CKEDITOR.instances.content.setData('');
                        $('#featured_image_preview').attr('src', '').hide();
                        $('input[name="tags"]').tagsinput('removeAll');

                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: response.message,
                            timer: 2000,
                            showConfirmButton: false
                        });

                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: response.message
                        });
                    }
                },

                error: function(xhr) {
                    const errors = xhr.responseJSON.errors;
                    if (errors) {
                        $.each(errors, function(key, value) {
                            $(`.error-text.${key}_error`).text(value[0]);
                        });
                    }
                }
            });
        });
    });
</script>



@endpush
