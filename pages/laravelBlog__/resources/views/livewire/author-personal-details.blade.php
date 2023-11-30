<div>
    <form method="post" wire:submit.prevent='UpdateDetails()'>
        <div class="row">
            <div class="col-md-4">
                <div class="mb-3">
                    <label class="form-label">Tên hiển thị</label>
                    <input type="text" class="form-control" name="example-text-input" placeholder="Tên hiển thị"
                        wire:model='name'>
                    <span class="text-danger">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label class="form-label">Tên đăng nhập</label>
                    <input type="text" class="form-control" name="example-text-input" placeholder="Tên đăng nhập"
                        wire:model='username'>
                    <span class="text-danger">
                        @error('username')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="text" class="form-control" name="example-text-input" placeholder="Địa chỉ email"
                        disabled wire:model='email'>
                    <span class="text-danger">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Tiểu sử</label>
                <textarea class="form-control" name="example-textarea-input" rows="6" placeholder="Nội dung.."
                    wire:model='biography'></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
        </div>
    </form>
</div>
