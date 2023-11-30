@extends('back.layouts.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Thêm bài viết')
@section('content')
    <style>
        .ck-editor__editable {
            min-height: 200px;
        }
    </style>
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Thêm bài viết mới
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <form action="{{ route('author.posts.create') }}" method="post" id="addPostForm" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-9">
                        <div class="mb-3">
                            <label class="form-label">Tiêu đề bài viết</label>
                            <input type="text" class="form-control" name="post_title"
                                placeholder="Nhập tiêu đề bài viết">
                            <span class="text-danger">
                                @error('post_title')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nội dung bài viết </label>
                            <textarea class="form-control" id="post_content" name="post_content" rows="6" placeholder="Nội dung"></textarea>
                            <span class="text-danger">
                                @error('post_content')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-3">
                            <div class="form-label">Danh mục</div>
                            <select class="form-select" name="post_category">
                                <option value="">Không có dữ liệu</option>
                                @foreach (\App\Models\SubCategory::all() as $subcategory)
                                    <option value="{{ $subcategory->id }}">{{ $subcategory->subcategory_name }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">
                                @error('post_category')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="mb-3">
                            <div class="form-label">Ảnh</div>
                            <input type="file" class="form-control" name="featured_image" id="input-file"
                                accept="image/jpeg, image/png, image/jpg" onchange="loadFile(event)">
                            <span class="text-danger">
                                @error('featured_image')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="image_holder mb-2" style="max-width:250px">
                            <img src="./back/dist/img/authors/default-img.png" alt="" class="img-thumbnail"
                                id="image-preview">
                        </div>
                        <button type="submit" class="btn btn-primary">Lưu</button>
                    </div>
                </div>

            </div>
        </div>
    </form>
@endsection

@push('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            ClassicEditor
                .create(document.querySelector('#post_content'))
                .catch(error => {
                    console.error(error);
                });
        });
        document.addEventListener("DOMContentLoaded", function() {
            var showToast = "{{ session('show-toast') }}";
            if (showToast) {
                Toastify({
                    text: showToast,
                    duration: 3000,
                    gravity: "top",
                    position: "right",
                    stopOnFocus: true,
                    backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
                    className: "info",
                }).showToast();
            }
        });
    </script>
@endpush
