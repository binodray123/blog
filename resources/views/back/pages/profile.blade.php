@extends('back.layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Page Title Here')
@section('content')
<div class="page-header">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="title">
                <h4>Profile</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.dashboard') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Profile
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
@livewire('admin.profile')
@livewire('admin.top-user-info')
@endsection
@push('scripts')

<script>
    $('input[type="file"][id="profilePictureFile"]').kropify({
        preview: 'image#profilePicturePreview',
        viewMode: 1,
        aspectRatio: 1,
        cancelButtonText: 'Cancel',
        resetButtonText: 'Reset',
        cropButtonText: 'Crop & update',
        processURL: '{{ route("admin.update_profile_picture") }}',
        maxSize: 2097152, // 2MB
        showLoader: true,
        animationClass: 'headShake',
        fileName: 'profilePictureFile',
        success: function(data) {
            const alert = document.createElement('div');
            alert.textContent = data.message;
            alert.className = `alert alert-${data.status ? 'success' : 'danger'} fixed-top m-3 p-3 rounded shadow`;
            alert.style.zIndex = '9999';
            document.body.appendChild(alert);
            setTimeout(() => alert.remove(), 3000);

            if (data.status === 1) {
                // 🔁 Trigger Livewire updates
                Livewire.emitTo('admin.top-user-info', 'updateTopUserInfo');
                Livewire.emitTo('admin.profile', 'updateProfile'); // <--- Add this line if profile also shows image

                // 👇 Update previewed image URL
                const avatarImages = document.querySelectorAll('img.avatar-photo');
                avatarImages.forEach(img => {
                    img.src = data.picture + '?v=' + new Date().getTime(); // Bypass cache
                });
            }
        },

        errors: function(error, text) {
            console.log('Kropify error:', text);
        }
    });
</script>


@endpush
