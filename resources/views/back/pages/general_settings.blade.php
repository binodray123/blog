@extends('back.layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Page Title Here')
@section('content')
<div class="page-header">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="title">
                <h4>Settings</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.dashboard') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Settings
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="pd-20 card-box mb-4">
    @livewire('admin.settings')
</div>
@endsection
@push('scripts')
<script>
    //Preview for site icon
    document.querySelector('input[name="site_logo"]').addEventListener('change', function(event) {
        const file = event.target.files[0];
        const allowedTypes = ['image/png', 'image/jpeg'];

        if (file) {
            if (!allowedTypes.includes(file.type)) {
                alert('Only PNG and JPG files are allowed.');
                event.target.value = ''; // Clear the input
                return;
            }

            const reader = new FileReader();
            reader.onload = function(e) {
                document.querySelector('#preview_site_logo').setAttribute('src', e.target.result);
            };
            reader.readAsDataURL(file);
        }
    });
    //Saving data in DB
    $('#updateLogoForm').submit(function(e) {
        e.preventDefault();
        var form = this;
        var inputVal = $(form).find('input[type="file"]').val();
        var errorElement = $(form).find('span.text-danger');
        errorElement.text('');

        if (inputVal.length > 0) {
            $.ajax({
                url: $(form).attr('action'),
                method: $(form).attr('method'),
                data: new FormData(form),
                processData: false,
                dataType: 'json',
                contentType: false,
                success: function(data) {
                    if (data.status == 1) {
                        $(form)[0].reset();

                        // Update image preview
                        $('img.site_logo').each(function() {
                            $(this).attr('src', '/' + data.image_path + '?v=' + new Date().getTime());
                        });

                        showAlert(data.message, 'success');
                    } else {
                        showAlert(data.message, 'danger');
                    }
                },
                error: function() {
                    showAlert('Something went wrong.', 'danger');
                }
            });
        } else {
            errorElement.text('Please, select an image file.');
        }
        //Showing alert message
        function showAlert(message, type) {
            const alert = document.createElement('div');
            alert.textContent = message;
            alert.className = `alert alert-${type} fixed-top m-3 p-3 rounded shadow`;
            alert.style.zIndex = '9999';
            alert.style.right = '20px';
            alert.style.left = '20px';
            alert.style.textAlign = 'center';
            alert.style.backgroundColor = type === 'success' ? '#d4edda' : '#f8d7da';
            alert.style.color = type === 'success' ? '#155724' : '#721c24';
            alert.style.border = '1px solid ' + (type === 'success' ? '#c3e6cb' : '#f5c6cb');
            document.body.appendChild(alert);

            setTimeout(() => {
                alert.remove();
            }, 3000);
        }
    });
    //Preview for site favicon
    document.querySelector('input[name="site_favicon"]').addEventListener('change', function(event) {
        const file = event.target.files[0];
        const allowedTypes = ['image/png', 'image/jpeg'];

        if (file) {
            if (!allowedTypes.includes(file.type)) {
                alert('Only PNG and JPG files are allowed.');
                event.target.value = ''; // Clear the input
                return;
            }

            const reader = new FileReader();
            reader.onload = function(e) {
                document.querySelector('#preview_site_favicon').setAttribute('src', e.target.result);
            };
            reader.readAsDataURL(file);
        }
    });
    //Saving data in DB
    $('#updateFaviconForm').submit(function(e) {
        e.preventDefault();
        var form = this;
        var inputVal = $(form).find('input[type="file"]').val();
        var errorElement = $(form).find('span.text-danger');
        errorElement.text('');

        if (inputVal.length > 0) {
            $.ajax({
                url: $(form).attr('action'),
                method: $(form).attr('method'),
                data: new FormData(form),
                processData: false,
                dataType: 'json',
                contentType: false,
                success: function(data) {
                    if (data.status == 1) {
                        $(form)[0].reset();

                        //icon change without refreshing page
                        var linkElement = document.querySelector('link[rel="icon"]');
                        if (linkElement) {
                            linkElement.href = '/' + data.image_path + '?v=' + new Date().getTime();
                        } else {
                            // If no <link rel="icon"> found, create it
                            const newLink = document.createElement('link');
                            newLink.rel = 'icon';
                            newLink.href = '/' + data.image_path + '?v=' + new Date().getTime();
                            document.head.appendChild(newLink);
                        }

                        // Update image preview
                        $('img.site_favicon').each(function() {
                            $(this).attr('src', '/' + data.image_path + '?v=' + new Date().getTime());
                        });

                        showAlert(data.message, 'success');
                    } else {
                        showAlert(data.message, 'danger');
                    }
                },
                error: function() {
                    showAlert('Something went wrong.', 'danger');
                }
            });
        } else {
            errorElement.text('Please, select an image file.');
        }
        //Showing alert message
        function showAlert(message, type) {
            const alert = document.createElement('div');
            alert.textContent = message;
            alert.className = `alert alert-${type} fixed-top m-3 p-3 rounded shadow`;
            alert.style.zIndex = '9999';
            alert.style.right = '20px';
            alert.style.left = '20px';
            alert.style.textAlign = 'center';
            alert.style.backgroundColor = type === 'success' ? '#d4edda' : '#f8d7da';
            alert.style.color = type === 'success' ? '#155724' : '#721c24';
            alert.style.border = '1px solid ' + (type === 'success' ? '#c3e6cb' : '#f5c6cb');
            document.body.appendChild(alert);

            setTimeout(() => {
                alert.remove();
            }, 3000);
        }
    });
</script>

@endpush
