<div>
    <div class="row">
        <div class="col">
            <label for="" class="form-label">Tìm kiếm</label>
            <input type="text" class="form-control" placeholder="Từ khoá..." wire:model="search">
        </div>
        <div class="col-md-3 mb-3">
            <label for="" class="form-label">Sắp xếp</label>
            <select name="" id="" class="form-select" wire:model="orderBy">
                <option value="asc">Tăng dần</option>
                <option value="desc">Gỉam dần</option>
            </select>
        </div>

    </div>

    <div class="row row-cards">
        @forelse ($posts as $post)
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <img src="/storage/images/post_images/thumbnail/resized_{{ $post->featured_image }}" alt=""
                        class="card-img-top">
                    {{-- <img src="storage/app/public/images/post_images/thumbnail/resized_" alt=""
                        class="card-img-top"> --}}
                    <div class="card-body p-2">
                        <h3 class="m-0 mb-1">{{ $post->post_title }}</h3>
                    </div>
                    <div class="d-flex">
                        <a href="{{ route('author.posts.edit-post', ['post_id' => $post->id]) }}" class="card-btn">Chỉnh
                            sửa</a>
                        <a href="#" wire:click.prevent='deletePost({{ $post->id }})' class="card-btn">Xoá </a>
                        {{-- <a href="#" class="card-btn delete-post" data-post-id="{{ $post->id }}">Xoa</a> --}}
                    </div>
                </div>
            </div>
        @empty
            <span class="text-danger">Không có bài viết để hiển thị!</span>
        @endforelse
    </div>

    <div class="d-block mt-2">
        {{ $posts->links('livewire::simple-bootstrap') }}
    </div>
</div>
