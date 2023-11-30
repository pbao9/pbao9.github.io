@extends('back.layouts.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Danh mục')
@section('content')


    <div class="page-header d-print-none">
        <div class="row align-items-center">
            <div class="col">
                <div class="page-title">
                    Danh mục cha & danh mục con
                </div>
            </div>
        </div>
    </div>
    @livewire('categories')


@endsection

@push('scripts')
    <script>
        window.addEventListener('hideCategoriesModal', function(e) {
            $('#categories_modal').modal('hide');
        });
        window.addEventListener('showcategoriesModal', function(e) {
            $('#categories_modal').modal('show');
        });
        window.addEventListener('hideSubCategoriesModal', function(e) {
            $('#subcategories_modal').modal('hide');
        });
        window.addEventListener('showSubCategoriesModal', function(e) {
            $('#subcategories_modal').modal('show');
        });


        $('#categories_modal, #subcategories_modal').on('hidden.bs.modal', function(e) {
            Livewire.emit('resetModalForm');
        });


        window.addEventListener('deleteCategory', function(event) {
            swal.fire({
                title: event.detail.title,
                imageWidth: 48,
                imageHeight: 48,
                html: event.detail.html,
                showCloseButton: true,
                showCancelButton: true,
                cancelButtonText: 'Huỷ',
                confirmButtonText: 'Xác nhận',
                cancelButtonColor: '#d33',
                confirmButtonColor: '#3085d6',
                width: 450,
                allowOutsideClick: false
            }).then(function(result) {
                if (result.value) {
                    window.livewire.emit('deleteCategoryAction', event.detail.id);
                }
            })
        });
        window.addEventListener('deleteSubCategory', function(event) {
            swal.fire({
                title: event.detail.title,
                imageWidth: 48,
                imageHeight: 48,
                html: event.detail.html,
                showCloseButton: true,
                showCancelButton: true,
                cancelButtonText: 'Huỷ',
                confirmButtonText: 'Xác nhận',
                cancelButtonColor: '#d33',
                confirmButtonColor: '#3085d6',
                width: 450,
                allowOutsideClick: false
            }).then(function(result) {
                if (result.value) {
                    window.livewire.emit('deleteSubCategoryAction', event.detail.id);
                }
            })
        });
    </script>
@endpush
