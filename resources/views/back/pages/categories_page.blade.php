@extends('back.layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Page Title Here')
@section('content')
@livewire('admin.categories')
@endsection
@push('scripts')
<!-- Include SweetAlert2 library -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    //show modals for parent category
    window.addEventListener('showParentCategoryModalForm', function() {
        $('#pcategory_modal').modal('show');
    });

    window.addEventListener('hideParentCategoryModalForm', function() {
        $('#pcategory_modal').modal('hide');
    });

    //show modals for category
    window.addEventListener('showCategoryModalForm', function() {
        $('#category_modal').modal('show');
    });

    window.addEventListener('hideCategoryModalForm', function() {
        $('#category_modal').modal('hide');
    });

    //parent category data sortable
    $('table tbody#sortable_parent_categories').sortable({
        cursor: "move",
        update: function(event, ui) {
            $(this).children().each(function(index) {
                if ($(this).attr('data-ordering') != (index + 1)) {
                    $(this).attr('data-ordering', (index + 1)).addClass('updated');
                }
            });
            var positions = [];
            $('.updated').each(function() {
                positions.push([$(this).attr('data-index'), $(this).attr('data-ordering')]);
                $(this).removeClass('updated');
            });
            //  alert(positions);
            Livewire.emit('updateParentCategoryOrdering', positions);
        }
    });

    // category data sortable
    $('table tbody#sortable_categories').sortable({
        cursor: "move",
        update: function(event, ui) {
            $(this).children().each(function(index) {
                if ($(this).attr('data-ordering') != (index + 1)) {
                    $(this).attr('data-ordering', (index + 1)).addClass('updated');
                }
            });
            var positions = [];
            $('.updated').each(function() {
                positions.push([$(this).attr('data-index'), $(this).attr('data-ordering')]);
                $(this).removeClass('updated');
            });
            //  alert(positions);
            Livewire.emit('updateCategoryOrdering', positions);
        }
    });
    //Delete Parent Category

    window.addEventListener('deleteParentCategory', function(event) {
        var id = event.detail.id; // Access the ID of the category to delete

        // Show SweetAlert2 confirmation dialog
        Swal.fire({
            title: 'Are you sure?',
            text: 'You want to delete this parent category.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Delete',
            cancelButtonText: 'Cancel'
        }).then((result) => {
            if (result.isConfirmed) {
                // Emit the Livewire event to delete the category
                Livewire.emit('deleteParentCategoryAction', id);
            }
        });
    });

    //Delete Category

    window.addEventListener('deleteCategory', function(event) {
        var id = event.detail.id; // Access the ID of the category to delete

        // Show SweetAlert2 confirmation dialog
        Swal.fire({
            title: 'Are you sure?',
            text: 'You want to delete this category.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Delete',
            cancelButtonText: 'Cancel'
        }).then((result) => {
            if (result.isConfirmed) {
                // Emit the Livewire event to delete the category
                Livewire.emit('deleteCategoryAction', id);
            }
        });
    });
</script>
@endpush
