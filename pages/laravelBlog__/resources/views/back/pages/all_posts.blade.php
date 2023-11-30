@extends('back.layouts.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Tất cả bài viết')
@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Tất cả bài viết
                    </h2>
                </div>
            </div>
        </div>
    </div>

    @livewire('all-posts')
@endsection

@push('scripts')
    <script>
        window.addEventListener('deletePost', function(event) {
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
                    window.livewire.emit('deletePostAction', event.detail.id);
                }
            })
        })
    </script>
@endpush
